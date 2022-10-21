<?php

namespace App\Http\Controllers;

use App\Http\Resources\RevisionResource;
use App\Models\Image;
use App\Models\Revision;
use App\Models\Version;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class RevisionController extends Controller
{
  //method to check user's access
  static function hasAccess(Revision $revision, bool $is_update)
  {
    $user = Auth::user();
    //check user access to revision

    if ($is_update) {
      if ($user->id != $revision->user_id) {

        return false;
      } else {
        return true;
      }
    }
    if (!$is_update) {
      if (!in_array($user->company->id, $revision->image->project->companies->pluck('id')->toArray())) {
        return false;
      } else {
        return true;
      }
    }
    return true;
  }


  public function store(Request $request)
  {

    $request->validate([
      'message' => ['required'],
      'is_done' => ['required'],
      'geometry_object' => ['required'],
      'image_id' => ['required'],
      'version_id' => ['required'],

    ]);
    $image = Image::findOrFail($request->image_id);
    $version = Version::findOrFail($request->version_id);

    if (!ImageController::hasAccess($image)) {
      return response()->json(403);
    }
    if (!VersionController::hasAccess($version)) {
      return response()->json(403);
    }
    //access granted
    $user = Auth::user();

    $revision = new Revision;
    $revision->message = $request->message;
    $revision->is_done = $request->is_done;
    $revision->geometry_object = $request->geometry_object;
    $revision->image_id = $request->image_id;
    $revision->version_id = $request->version_id;

    $revision->user_id = $user->id;

    $revision->save();

    //store with company of current user
    return new RevisionResource($revision);
  }

  public function index()
  {
    $user = Auth::user();
    $company_projects = $user->company->projects->pluck('id')->toArray();
    $images = Image::whereIn('project_id', $company_projects)->get()->pluck('id')->toArray();
    $revisions = Revision::whereIn('image_id', $images)->get();

    // list all user's company revisions
    return RevisionResource::collection($revisions);
  }

  public function show(Revision $revision)
  {

    if (!$this->hasAccess($revision, false)) {
      return response()->json(['error' => 'You can\'t access a revision of another company'], 403);
    }
    // access granted
    return new RevisionResource($revision);
  }

  public function update(Request $request, Revision $revision)
  {
    if (!$this->hasAccess($revision, true)) {
      return response()->json(['error' => 'You can\'t update a revision of another company'], 403);
    }

    // access granted
    $revision->update($request->only(['message', 'is_done', 'geometry_object', 'image_id']));
    return new RevisionResource($revision);
  }

  public function destroy(Revision $revision)
  {
    if (!$this->hasAccess($revision, true)) {
      return response()->json(['error' => 'You can\'t delete a revision of another company'], 403);
    }

    // access granted
    $revision->delete();
    return response()->json('Revision deleted', 204);
  }
}
