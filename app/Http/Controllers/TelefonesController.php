<?php

namespace App\Http\Controllers;

use App\Models\Telefone;
use Illuminate\Http\Request;

class TelefonesController extends Controller
{
    public function store(Telefone $telefone)
    {
      try {
        $telefone->save();
      } catch (Exception $e) {
        return "Erro: " . $e->getMessage();
      }
    }
}
