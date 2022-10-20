<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class CompanyTest extends TestCase
{
  /**
   * A basic test example.
   *
   * @return void
   */
  public function test_index()
  {
    $user = User::factory()->create();
    $session = $this->actingAs($user);

    $response = $session->get('/api/companies');
    $response->assertStatus(200);
  }
  public function test_show()
  {
    $user = User::factory()->create();
    $session = $this->actingAs($user);
    $response = $this->get('/api/companies/1');
    $response->assertStatus(200);
  }

  public function test_store()
  {
    $response = $this->post('/api/companies', ['name' => 'Sally', 'company_type' => 'designer']);

    $response->assertStatus(201);
  }

  public function test_update()
  {

    $user = User::factory()->create();
    $session = $this->actingAs($user);
    $response = $this->put('/api/companies/1', ['name' => 'truc']);

    $response->assertSuccessful();
  }
}
