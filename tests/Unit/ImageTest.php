<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ImageTest extends TestCase
{
  public function prepareTest()
  {
    $user = User::factory()->create();
    $this->actingAs($user);
  }

  public function test_store()
  {
    $this->prepareTest();

    $response = $this->post('/api/images', ['project_id' => 1, 'revision_rounds' => 3, 'max_revision_each_round' => 10,]);

    $response->assertSuccessful();
  }

  public function test_index()
  {
    $this->prepareTest();


    $response = $this->get('/api/images');
    $response->assertSuccessful();
  }
  public function test_show()
  {
    $this->prepareTest();

    $response = $this->get('/api/images/1');
    $response->assertSuccessful();
  }
  public function test_update()
  {

    $this->prepareTest();

    $response = $this->put('/api/images/1', ['status' => 'in_review']);

    $response->assertSuccessful();
  }
}
