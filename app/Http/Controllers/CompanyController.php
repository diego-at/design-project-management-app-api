<?php

namespace App\Http\Controllers;

use App\Http\Resources\CompanyResource;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CompanyController extends Controller
{

  public function index()
  {
    return CompanyResource::collection(Company::all());
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
    return new CompanyResource($company);
  }

  public function update(Request $request, Company $company)
  {
    // check if currently authenticated user is the owner of the company
    if ($request->user()->company !== $company->company) {
      return response()->json(['error' => 'You can\'t update someone else\'s project.'], 403);
    }

    $company->update($request->only(['name', 'price', 'documents', 'status']));

    return new CompanyResource($company);
  }

  public function destroy(Company $company)
  {
    //
  }
}
