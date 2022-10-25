<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
  //method to check user's access
  static function hasAccess(Project $project)
  {
    $user = Auth::user();
    //check user access to project
    $project_companies = $project->companies->pluck('id')->toArray();
    $user_company = $user->company->id;
    if (!in_array($user_company, $project_companies)) {
      return false;
    }
    return true;
  }


  public function store(Request $request)
  {
    $request->validate([
      'name' => ['required'],
    ]);

    $user = Auth::user();
    $user_company_id = $user->company->id;

    $project = new Project;
    $project->name = $request->name;
    $project->save();
    $project->companies()->attach($user_company_id);

    //store with company of current user
    return new ProjectResource($project);
  }

  public function index()
  {
    $user = Auth::user();
    $projects = $user->company->projects;

    // list all user's company projects
    return ProjectResource::collection($projects);
  }

  public function show(Project $project)
  {

    if (!$this->hasAccess($project)) {
      return response()->json(['error' => 'You can\'t access a project of another company'], 403);
    }

    // access granted
    return new ProjectResource($project);
  }

  public function update(Request $request, Project $project)
  {
    if (!$this->hasAccess($project)) {
      return response()->json(['error' => 'You can\'t update a project of another company'], 403);
    }

    // access granted
    $project->update($request->only(['name', 'revision_rounds', 'status']));
    return new ProjectResource($project);
  }

  public function destroy(Project $project)
  {
    if (!$this->hasAccess($project)) {
      return response()->json(['error' => 'You can\'t delete a project of another company'], 403);
    }

    // access granted
    $project->delete();
    return response()->json('Project deleted', 204);
  }
}
