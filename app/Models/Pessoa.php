<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
  protected $fillable = [
    'id',
    'nome'
  ];

  protected $table = 'pessoas';

  public function telefones()
  {
    return $this->hasMany(Telefone::class, 'pessoa_id');
  }
}
