@extends('template.app')

@section('title')
  Novo contato
@endsection

@section('content')

  <br>
  <span class="flow-text" style="margin-left: 30px;">Cadastrar um novo contato</span>
  <br>
  <br>
  <div class="divider"></div>

  <div class="row">
    <form class="col s12 m12 l6" action="{{ route('pessoa.save')}}" method="post">
      <!--TOKEN-->
      {{csrf_field()}}

      <div class="input-field col s12 m12 l6">
        <i class="material-icons prefix">account_circle</i>
        <input id="nome" name="nome" type="text">
        <label for="nome">Nome</label>
      </div>
      <!--
      <div class="input-field col s6 right">
      <i class="material-icons prefix">account_circle</i>
      <input id="icon_prefix" type="text">
      <label for="icon_prefix">Sobrenome</label>
    </div>

    <div class="input-field col s6">

    <i class="material-icons prefix">account_circle</i>
    <select>
    <option value="" disabled selected>Sexo</option>
    <option value="1">Masculino</option>
    <option value="2">Feminino</option>
  </select>
</div>
-->

<div class="input-field col s4 m4 l2">
  <i class="material-icons prefix">phone</i>
  <input id="icon_telephone" name="ddd" type="tel">
  <label for="icon_telephone">DDD</label>
</div>

<div class="input-field col  s8  m8 l4">
  <i class="material-icons prefix">phone</i>
  <input id="icon_telephone" name="telefone" type="tel">
  <label for="icon_telephone">Telefone</label>
</div>

<div class="row">


  <div class="col s4 l2 right">
    <button class="btn purple accent-3 waves-effect waves-purple"> Salvar</button>
  </div>

  <div class="col s4 l2 right" style="margin-right: 10px;">
      <a class="btn purple accent-3 waves-effect waves-purple" href="{{ url("/pessoas") }}"> Cancelar</a>
  </div>

</div>
</form>

<div class="col s12 m12 l6">

  <img class="right "src="{!! asset('img/logo.png') !!}">
</div>
</div>


@endsection
