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
      factory(Pessoa::class)->create();
    }

    public function testIndex()
    {
        $response = $this->get(route('pessoa.index'));
        $response->assertStatus(200);
    }

    public function testShowPessoa()
    {
      $model = Pessoa::first();
      $response = $this->get(route('pessoa.show', ['pessoa' => $model]));
      $response->assertStatus(200);
    }

    public function testDelete()
    {
      $model = Pessoa::first();
      $response = $this->delete(route('pessoa.delete', ['pessoa' => $model]));
      $response->assertRedirect(route('pessoa.index'));
    }

}
