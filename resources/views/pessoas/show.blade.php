@extends('template.app')
@section('title')
  Deletar contato
@endsection
@section('content')
  <br>
  <span class="flow-text" style="margin-left: 30px;">Excluir contato</span>
  <br>
  <br>
  <div class="divider"></div>
  <br>
  <div class="row">

    <div class="col s12 m10 l4 push-s1">
      <div class="card purple darken-1" style="min-height: 180px">
        <div class="card-content white-text">
          <span class="card-title">
            <strong>
              ATENÇÃO
            </strong>
          </span>
          <h5>Deseja realmente excluir este contato?</h5>

            @include('util.delete', ['route' => 'pessoa.delete', 'model' => $model]);
          {{-- <a class="btn-floating btn-large   waves-effect waves-light green darken-2 right" href="{{ url("/pessoas/$pessoa->id/destroy") }}" style="margin-left: 5px;">
            <i class="material-icons">check_circle</i></a> --}}
          <a class="btn-floating btn-large waves-effect waves-light red darken-2 right" href="{{ url("/pessoas") }}" style="margin-left: 5px;">
            <i class="material-icons">cancel</i></a>


            </div>
          </div>
        </div>

        <div class="col s12 m10 l3 push-s1">
          <div class="card purple accent-2" style="min-height: 200px">
            <div class="card-content white-text">
              <span class="card-title">
                <strong>
                  {{$model->nome}}
                </strong>
              </span>
              <br>
              <hr>
              <strong>Telefones:</strong>
              <br>
              @foreach($model->telefones as $telefone)
                ( {{$telefone->ddd}} ) -
                {{$telefone->telefone}}<br>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    @endsection