<?php

namespace Tests\Feature;

use App\Models\Pessoa;
use App\Models\User;
use Tests\TestCase;

class PessoaTest extends TestCase
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

    public function testPessoa()
    {
        $model = factory(Pessoa::class)->make();
        $this->post(route('pessoa.index'), $model->toArray())->assertRedirect(route('home'));
        $this->assertDatabaseHas('pessoa', $model->toArray());
    }
}