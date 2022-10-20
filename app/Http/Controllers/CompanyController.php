<?php

namespace App\Http\Controllers;

use App\Http\Resources\CompanyResource;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class CompanyController extends Controller
{
  private function hasAccess(Company $company)
  {
    $user = Auth::user();
    //check user access to image
    $user_company = $user->company;
    $requested_company = $company;
    if ($user_company != $requested_company) {
      return false;
    }
    return true;
  }
  public function index()
  {
    $user = Auth::user();
    $user_company = $user->company;
    return new CompanyResource($user_company);
  }

  public function store(Request $request)
  {
    $request->validate([
      'name' => ['required', 'max:30'],
      'company_type' => ['required', Rule::in(['designer', 'client'])],

    ]);

    $company = new Company;
    $company->name = $request->name;
    $company->company_type = $request->company_type;

    $company->save();

    return new CompanyResource($company);
  }

  public function show(Company $company)
  {
    if (!$this->hasAccess($company)) {
      return response()->json(['error' => 'You can\'t access the company of someone else'], 403);
    }
    return new CompanyResource($company);
  }

  public function update(Request $request, Company $company)
  {
    // check if currently authenticated user is the owner of the company
    if (!$this->hasAccess($company)) {
      return response()->json(['error' => 'You can\'t update the company of someone else'], 403);
    }

    $company->update($request->only(['name']));

    return new CompanyResource($company);
  }

  public function destroy(Company $company)
  {
    return response()->json(['error' => 'You can\'t delete your company.'], 403);
  }
}
