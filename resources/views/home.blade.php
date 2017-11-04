@extends('template.app')

@section('content')
  <div class="container">
    <br>
    <span class="flow-text">Área administrativa</span>
    <br>
    <br>
    <div class="divider"></div>
    <div class="panel-body">
      @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif
      <br>


  <div class="chip">
    Logado com sucesso!
    <i class="close material-icons">close</i>
  </div>

    

    </div>
  </div>
  <div class="row">
    <div class="right">
      <img src="{!! asset('img/logo.png') !!}">
    </div>
  </div>

@endsection
