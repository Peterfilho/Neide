@extends('template.app')

@section('title')
  Agenda
@endsection

@section('content')
  <br>
  <span class="flow-text" style="margin-left: 30px;">Lista de contatos</span>
  <br>
  <br>
  <div class="divider"></div>
  <br>
  <div class="row container">
    @foreach ($pessoas as $pessoa)
      <div class="col s12 m6 l6">
        <div class="card purple accent-2" style="min-height: 200px">
          <div class="card-content white-text">
            <span class="card-title">

              <strong>
                {{$pessoa->nome}}
              </strong>

<div class="right">
              <div class="fixed-action-btn horizontal">
                <a class="btn-floating purple accent-3 lighten-1 btn-small"><i class="largue material-icons">menu</i></a>
                <ul>
                  <li><a class="btn-floating btn-small waves-effect waves-light red lighten-2" href="{{ route('pessoa.show', ['model' => $pessoa]) }}">
                    <i class="material-icons">delete</i></a></li>
                  <li><a class="btn-floating btn-small waves-effect waves-light blue lighten-2" href="{{ route('pessoa.edit', ['model' => $pessoa]) }}">
                    <i class="material-icons">mode_edit</i></a></li>
                </ul>
              </div>
</div>
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
    @endforeach
  </div>

@endsection
