<?php

namespace App\Http\Controllers;

use App\Http\Resources\ImageResource;
use App\Models\Image;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ImageController extends Controller
{
  //method to check user's access
  private function hasAccess(Image $image)
  {
    $user = Auth::user();
    //check user access to image
    $image_companies = $image->project->companies->pluck('id')->toArray();
    $user_company = $user->company->id;
    if (!in_array($user_company, $image_companies)) {
      return false;
    }
    return true;
  }


  public function store(Request $request)
  {
    $request->validate([
      'project_id' => ['required'],
    ]);
    $project = Project::findOrFail($request->project_id);
    if (!ProjectController::hasAccess($project)) {
      return response()->json(['error' => 'You can\'t access a image of another company'], 403);
    }

    //access granted
    $user = Auth::user();

    $image = new Image;
    $image->project_id = $request->project_id;
    $image->save();

    //store with company of current user
    return new ImageResource($image);
  }

  public function index()
  {
    $user = Auth::user();
    $company_projects = $user->company->projects->pluck('id')->toArray();

    $images = Image::whereIn('project_id', $company_projects)->get();

    // list all user's company images
    return ImageResource::collection($images);
  }

  public function show(Image $image)
  {

    if (!$this->hasAccess($image)) {
      return response()->json(['error' => 'You can\'t access a image of another company'], 403);
    }

    // access granted
    return new ImageResource($image);
  }

  public function update(Request $request, Image $image)
  {
    if (!$this->hasAccess($image)) {
      return response()->json(['error' => 'You can\'t update a image of another company'], 403);
    }

    // access granted
    $image->update($request->only(['status']));
    return new ImageResource($image);
  }

  public function destroy(Image $image)
  {
    if (!$this->hasAccess($image)) {
      return response()->json(['error' => 'You can\'t delete a image of another company'], 403);
    }

    // access granted
    $image->delete();
    return response()->json('Image deleted', 204);
  }
}
