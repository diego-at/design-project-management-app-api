<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class CompanyTest extends TestCase
{
  public function prepareTest()
  {
    $user = User::factory()->create();
    $this->actingAs($user);
  }



  public function test_store()
  {
    $response = $this->post('/api/companies', ['name' => 'Sally', 'company_type' => 'designer']);

    $response->assertStatus(201);
  }

  public function test_index()
  {
    $this->prepareTest();

    $this->post('/api/companies', ['name' => 'Sally', 'company_type' => 'designer']);
    $response = $this->get('/api/companies');
    $response->assertStatus(200);
  }
  public function test_show()
  {
    $this->prepareTest();

    $response = $this->get('/api/companies/1');
    $response->assertStatus(200);
  }
  public function test_update()
  {

    $this->prepareTest();

    $response = $this->put('/api/companies/1', ['name' => 'truc']);

    $response->assertSuccessful();
  }
}
