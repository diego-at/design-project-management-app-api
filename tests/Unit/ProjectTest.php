<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ProjectTest extends TestCase
{


  public function test_store()
  {

    $user = User::factory()->create();
    $session = $this->actingAs($user);
    $response = $this->post('/api/projects', ['name' => 'project_test', 'revision_rounds' => 3]);

    $response->assertSuccessful();
  }

  public function test_index()
  {
    $user = User::factory()->create();
    $session = $this->actingAs($user);

    $response = $session->get('/api/projects');
    $response->assertStatus(200);
  }
  public function test_show()
  {
    $user = User::factory()->create();
    $session = $this->actingAs($user);
    $response = $this->get('/api/projects/1');
    $response->assertSuccessful();
  }

  public function test_update()
  {

    $user = User::factory()->create();
    $session = $this->actingAs($user);
    $response = $this->put('/api/projects/1', ['name' => 'aze']);

    $response->assertSuccessful();
  }
}
