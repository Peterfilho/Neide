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
    <form class="col s6" action="{{ url('/pessoas/store')}}" method="post">
      <!--TOKEN-->
      {{csrf_field()}}

      <div class="input-field col s6">
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

      <div class="input-field col s2">
        <i class="material-icons prefix">phone</i>
        <input id="icon_telephone" name="ddd" type="tel">
        <label for="icon_telephone">DDD</label>
      </div>

      <div class="input-field col s4">
        <i class="material-icons prefix">phone</i>
        <input id="icon_telephone" name="telefone" type="tel">
        <label for="icon_telephone">Telefone</label>
      </div>

      <div class="col s12">
      <button class="btn purple accent-3 waves-effect waves-purple right"> Salvar</button>
    </div>
    </form>

    <div class="col s6">

      <img class="right "src="{!! asset('img/logo.png') !!}">
      </div>
  </div>


@endsection
