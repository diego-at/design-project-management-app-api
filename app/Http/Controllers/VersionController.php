<?php

namespace App\Http\Controllers;

use App\Http\Resources\VersionResource;
use App\Models\Image;
use App\Models\Version;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class VersionController extends Controller
{
  //method to check user's access
  static function hasAccess(Version $version)
  {
    $user = Auth::user();
    //check user access to version

    if (!in_array($user->company->id, $version->image->project->companies->pluck('id')->toArray())) {
      return false;
    }

    return true;
  }


  public function store(Request $request)
  {

    $request->validate([
      'url' => ['required'],
      'image_id' => ['required'],

    ]);
    $image = Image::findOrFail($request->image_id);

    if (!ImageController::hasAccess($image)) {
      return response()->json(403);
    }

    //access granted

    //check if maximum number of versions reached
    $image_versions_ids = $image->versions->pluck('id')->toArray();
    $image_max_revision_rounds = $image->revision_rounds;
    $image_current_revision_rounds =  count($image_versions_ids);

    //check if max number of revisions reached
    if ($image_current_revision_rounds == $image_max_revision_rounds) {
      return  response()->json(['error' => 'Maximum number of revision rounds reached. Increase revision rounds for this image.'], 409);
    }

    //change is_current on previous version and find version number
    if ($image_current_revision_rounds == 0) {
      $version_number = 1;
    } else {
      //find new version number
      $version_number = count($image_versions_ids) + 1;

      //set is current to false for previous version
      $previous_version_id = $image_versions_ids[count($image_versions_ids)];
      $previous_version = Version::findOrFail($previous_version_id);
      $previous_version->is_current = false;
    }

    $version = new Version;
    $version->url = $request->url;
    $version->image_id = $request->image_id;
    $version->is_current = true;
    $version->version_number = $version_number;

    $version->save();

    //store with company of current user
    return new VersionResource($version);
  }

  public function index()
  {
    $user = Auth::user();
    $company_projects = $user->company->projects->pluck('id')->toArray();
    $images = Image::whereIn('project_id', $company_projects)->get()->pluck('id')->toArray();
    $versions = Version::whereIn('image_id', $images)->get();

    // list all user's company versions
    return VersionResource::collection($versions);
  }

  public function show(Version $version)
  {

    if (!$this->hasAccess($version, false)) {
      return response()->json(['error' => 'You can\'t access a version of another company'], 403);
    }
    // access granted
    return new VersionResource($version);
  }

  public function update(Request $request, Version $version)
  {
    if (!$this->hasAccess($version, true)) {
      return response()->json(['error' => 'You can\'t update a version of another company'], 403);
    }

    // access granted
    $version->update($request->only(['url', 'version', 'is_current', 'image_id']));
    return new VersionResource($version);
  }

  public function destroy(Version $version)
  {
    if (!$this->hasAccess($version, true)) {
      return response()->json(['error' => 'You can\'t delete a version of another company'], 403);
    }

    // access granted
    $version->delete();
    return response()->json('Version deleted', 204);
  }
}
