@extends('template.app')
@section('content')

    <div class="row">
      @foreach ($pessoas as $pessoa)
        <div class="col s9">
          <div class="card purple darken-3">
            <div class="card-content white-text">
              <span class="card-title">
                <strong>
                  {{$pessoa->nome}}
                </strong>
                <div class="right">
                  <a class="btn-floating btn-small waves-effect purple lighten-1"><i class="material-icons">add</i></a>
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
