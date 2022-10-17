<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ApiTest extends TestCase
{
  /**
   * A basic test example.
   *
   * @return void
   */
  public function test_index()
  {
    $response = $this->get('/api/companies');
    $response->assertStatus(200);
  }
  public function test_show()
  {
    $response = $this->get('/api/companies/1');
    $response->assertStatus(200);
  }

  public function test_store()
  {
    $response = $this->post('/api/companies', ['name' => 'Sally', 'company_type' => 'designer']);

    $response->assertStatus(201);
  }
}
