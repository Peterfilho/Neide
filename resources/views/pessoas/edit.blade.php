@extends('template.app')
@section('title')
  Editar Contato
@endsection
@section('content')

  <br>
  <span class="flow-text" style="margin-left: 30px;">Editar contato</span>
  <br>
  <br>
  <div class="divider"></div>
  <br>



<div class="row">



      {!! Form::close() !!}
      <!-- FORMULARIO PARA EDITAR TELEFONE -->


        <div class="col s12 m6 l3">
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


  <div class="row">
    {!! Form::open(['method' => 'PUT', 'route' => ['pessoa.update' , 'model' => $model]]) !!}
      <!--TOKEN-->
      <input type="hidden" name="id" value="{{ $model->id }}">
      <div class="input-field col s12 m12 l6">
        <i class="material-icons prefix">mode_edit</i>
        <input id="nome" name="nome"  type="text" value="{{ $model->nome }}">
        <label for="nome">Nome</label>
      </div>
    </div>

<div class="row">
    @foreach($model->telefones as $telefone)

      <div class="input-field col s12 m4 l2">
        <i class="material-icons prefix">mode_edit</i>
        <input id="ddd" name="ddd"  type="text" value="{{ $telefone->ddd }}">
        <label for="ddd">DDD</label>
      </div>

      <div class="input-field col s12 m8 l4">
        <i class="material-icons prefix">mode_edit</i>
        <input id="telefone" name="telefone"  type="text" value="{{ $telefone->telefone}}">
        <label for="telefone">Telefone</label>
      </div>
    @endforeach
</div>


<div class="row col s12 l6">


        <div class="col s4 l2 offset-l3">
            <a class="btn purple accent-3 waves-effect waves-purple" href="{{ url("/pessoas") }}"> Cancelar</a>
        </div>

      <div class="col s4 l2 ">
        <button class="btn purple accent-3 waves-effect waves-purple">Salvar</button>
      </div>

</div>



</div>

  @endsection
