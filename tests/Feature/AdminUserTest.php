<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class AdminUserTest extends TestCase
{
  public function testIndexFail()
  {
    $response = $this->get(route('pessoa.index'));
    $response->assertRedirect(route('login'));
  }

  public function testIndexSucess()
  {
    $user = new User(array('name' => 'nome'));
    Auth::setUser($user);
    $this->withoutMiddleware();
    $response = $this->get(route('pessoa.index'));
    $response->assertSuccessful();
  }

}
