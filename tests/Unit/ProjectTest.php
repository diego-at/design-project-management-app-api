<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ProjectTest extends TestCase
{
  public function prepareTest()
  {
    $user = User::factory()->create();
    $this->actingAs($user);
  }

  public function test_store()
  {

    $this->prepareTest();

    $response = $this->post('/api/projects', ['name' => 'project_test',]);

    $response->assertSuccessful();
  }

  public function test_index()
  {
    $this->prepareTest();

    $response = $this->get('/api/projects');
    $response->assertStatus(200);
  }
  public function test_show()
  {
    $this->prepareTest();

    $response = $this->get('/api/projects/1');
    $response->assertSuccessful();
  }

  public function test_update()
  {

    $this->prepareTest();

    $response = $this->put('/api/projects/1', ['name' => 'aze']);

    $response->assertSuccessful();
  }
}
