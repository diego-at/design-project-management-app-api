<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class RevisionTest extends TestCase
{


  public function prepareTest()
  {
    $user = User::factory()->create();
    $this->actingAs($user);
  }

  public function test_store()
  {
    $this->prepareTest();

    $response = $this->post('/api/revisions', [
      'is_done' => false, 'message' => 'revision_test', 'geometry_object' => '{"Peter":35,"Ben":37,"Joe":43}', 'image_id' => 1,
    ]);

    $response->assertSuccessful();
  }

  public function test_index()
  {
    $this->prepareTest();

    $response = $this->get('/api/revisions');
    $response->assertStatus(200);
  }
  public function test_show()
  {
    $this->prepareTest();
    $response = $this->get('/api/revisions/1');
    $response->assertSuccessful();
  }

  public function test_update()
  {
    //ne marche pas car l'id de l'user de la révision n'est pas le même que celui de la révision  
    $this->prepareTest();
    $response = $this->put('/api/revisions/1', ['message' => 'aze']);

    $response->assertSuccessful();
  }
}
