<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Telefone;
use Illuminate\Support\Facades\DB;
class PessoasController extends Controller
{

  private $telefones_controller;
  private $pessoa;

  public function __construct(TelefonesController $telefones_controller)
  {
    $this->telefones_controller = $telefones_controller;
    $this->pessoa = new Pessoa();
  }

  public function index()
  {
    $list_pessoas = Pessoa::all();
    return view('pessoas.index', [
      'pessoas' => $list_pessoas
    ]);
  }

  public function create ()
  {
    return View ('pessoas.create');
  }

  public function store(Request $request)
  {

    $pessoa = Pessoa::create($request->all());
    if ($request->ddd && $request->telefone) {

      $telefone = new Telefone();
      $telefone->ddd = $request->ddd;
      $telefone->telefone = $request->telefone;
      $telefone->pessoa_id = $pessoa->id;
      $this->telefones_controller->store($telefone);

    }
    return redirect('/pessoas')->with('message', 'Pessoa cadastrada com sucesso!');
  }

  public function show (Pessoa $model)
  {
    return view('pessoas.show', compact('model'));
  }

  public function destroy (Pessoa $model)
  {
    Pessoa::destroy($model->id);
    return redirect('pessoas')->with('Sucess', 'Contato excluido com sucesso!');
  }

  public function edit (Pessoa $model)
  {
    return view('pessoas.edit', compact('model'));
  }

  public function update(Request $request, Pessoa $model)
  {
    $fieldsUser = $request->only('nome');
    $fieldsPhone = $request->only('telefone','ddd');
    $phone = Telefone::where('pessoa_id', '=' ,$model->id)->first();

    $model->fill($fieldsUser)->save();
    $phone->fill($fieldsPhone)->save();

 return redirect('/pessoas');
  }
}
