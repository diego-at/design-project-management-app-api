<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectWorkflowTest extends TestCase
{
  /**
   * A basic feature test example.
   *
   * @return void
   */
  public function test_example()
  {

    //create companies
    $response_company_designer = $this->post('/api/companies', ['name' => 'company_test_workflow_designer', 'company_type' => 'designer']);
    $response_company_designer->assertSuccessful();

    $response_company_client = $this->post('/api/companies', ['name' => 'company_test_workflow_client', 'company_type' => 'client']);
    $response_company_client->assertSuccessful();

    $company_designer_id = $response_company_designer["data"]["id"];
    $company_client_id = $response_company_client["data"]["id"];

    $response_user_designer =  $this->post('/api/users', ['name' => 'company_test_workflow_designer', 'company_type' => 'designer']);
    die();
    //create user
    //create project
    //create image
    //create version
    //create revision  
    $response = $this->get('/');

    $response->assertStatus(200);
  }
}
