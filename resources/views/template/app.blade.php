<html>
<head>
  <title>@yield('title')</title>
  <link rel="shortcut icon" href="{!! asset('img/favicon.png') !!}" />
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" >
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<style media="screen">
body {
  display: flex;
  min-height: 100vh;
  flex-direction: column;
}

main {
  flex: 1 0 auto;
}
</style>

<body>

  @include ('template.nav')

<main>

  @yield('content')

</main>

  @include('template.footer')


<!--Import jQuery before materialize.js-->
<script
src="https://code.jquery.com/jquery-3.2.1.min.js"
integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
crossorigin="anonymous"></script>


<!-- Compiled and minified JavaScript -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
@yield('script')
<!-- SCRIPT PARA FORMULARIO DE CADASTRO -->

{!! Html::script('js/application.js') !!}
</body>
</html>
