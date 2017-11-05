@extends('template.app')
@section('title')
  Salão da Neide
@endsection
@section('content')
<br>

    <div class="slider">
      <ul class="slides">
        <li>
          <img src="{!! asset('img/slide1.jpg') !!}"> <!-- random image -->
          <div class="caption center-align">
            <h3>Solte a beleza dentro de você</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
        <li>
          <img src="{!! asset('img/slide2.png') !!}"> <!-- random image -->
          <div class="caption right-align">
            <h3>Seu estilo, sua escolha – um verdadeiro toque</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
        <li>
          <img src="{!! asset('img/slide3.png') !!}"> <!-- random image -->
          <div class="caption right-align">
            <h3>Experiência de Vida Com Cor</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
        <li>
          <img src="{!! asset('img/slide4.jpg') !!}"> <!-- random image -->
          <div class="caption center-align">
            <h3>Fazendo você e seu cabelo brilhar</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
      </ul>
    </div>
<br>


@endsection
