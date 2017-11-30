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
      <div class="card purple darken-1" style="min-height: 250px">
        <div class="card-content white-text">
          <span class="card-title">
            <strong>
              ATENÇÃO
            </strong>
          </span>
          <h5>Deseja realmente excluir este contato?</h5>

            </div>


              @include('util.delete', ['route' => 'pessoa.delete', 'model' => $model])
            
          </div>

          </div>

        <div class="col s12 m10 l4 right">
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
