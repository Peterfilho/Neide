@extends('template.app')
@section('title')
  Editar Contato
@endsection
@section('content')

  <h2>Editar contato </h2>

  <div class="row">
    <form class="col s6" action="{{ url('/pessoas/update')}}" method="post">
      <!--TOKEN-->
      {{csrf_field()}}
      <input type="hidden" name="id" value="{{ $pessoa->id }}">
      <div class="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
        <input id="nome" name="nome"  type="text" value="{{ $pessoa->nome }}">
        <label for="nome">Nome</label>
      </div>
      <div class="col s12">
        <button class="waves-effect waves-light btn-large right">Salvar</button>
      </div>
    </form>

      <div class="col s3 push-s1">
        <div class="card purple accent-2" style="min-height: 200px">
          <div class="card-content white-text">
            <span class="card-title">
              <strong>
                {{$pessoa->nome}}
              </strong>
            </span>
            <br>
            <hr>
            <strong>Telefones:</strong>
            <br>
            @foreach($pessoa->telefones as $telefone)
              ( {{$telefone->ddd}} ) -
              {{$telefone->telefone}}<br>
            @endforeach
          </div>
        </div>
      </div>
    </div>

  @endsection
