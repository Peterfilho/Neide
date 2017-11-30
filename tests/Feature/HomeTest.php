<?php

namespace Tests\Feature;

use App\Models\Pessoa;
use App\Models\User;
use Tests\TestCase;

class HomeTest extends TestCase
{

  protected function setUp()
  {
    parent::setUp();
    $user = User::first();
    $this->be($user);
    $this->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);
  }

  public function testIndex()
  {
    $response = $this->get(route('home'));
    $response->assertStatus(200);
  }


  public function testEdit()
  {
    $response = $this->get(route('pessoa.new'));
    $response->assertStatus(200);
  }



}
