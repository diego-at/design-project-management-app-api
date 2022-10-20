<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ImageTest extends TestCase
{


  public function test_store()
  {

    $user = User::factory()->create();
    $session = $this->actingAs($user);
    $response = $this->post('/api/images', ['project_id' => 1]);

    $response->assertSuccessful();
  }

  public function test_index()
  {
    $user = User::factory()->create();
    $session = $this->actingAs($user);

    $response = $session->get('/api/images');
    $response->assertSuccessful();
  }
  public function test_show()
  {
    $user = User::factory()->create();
    $session = $this->actingAs($user);
    $response = $this->get('/api/images/1');
    $response->assertSuccessful();
  }
  public function test_update()
  {

    $user = User::factory()->create();
    $session = $this->actingAs($user);
    $response = $this->put('/api/images/1', ['status' => 'in_review']);

    $response->assertSuccessful();
  }
}
