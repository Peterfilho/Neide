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

  <nav class="purple">
    <div class="nav-wrapper container">
      <a href="{{ url('/') }}" class="brand-logo"><i class="material-icons left">content_cut</i> Neide Cabeleireira</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">

        <!-- Não autenticado -->
        @guest
          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="{{ route('register') }}">Register</a></li>
        @else
        <!-- Autenticado -->
          <li><a href="{{ url('pessoas/create') }}">Cadastrar Cliente</a></li>
          <li><a href="{{ url('pessoas') }}">Agenda de Clientes</a></li>

          <!-- LOGOUT -->

          <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            logout
          </a>

          <!-- Bem vindo do usuário -->

        </li>
        <li>
          <div class="chip" style="margin-top: 18px;">
            Bem vindo {{ Auth::user()->name }}
          </div>
        </li>

        <!-- Ação para logar -->

        <li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </li>
      </ul>

    @endguest
  </ul>
</div>
</nav>

<main>

  @yield('content')

</main>

<footer class="page-footer purple">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Salão da Neide - Turvo - PR</h5>
        <p class="grey-text text-lighten-4">trabalho de Web 3. Site salão de beleza com agenda e controle de cadastros de usuários
        e login com cadastro e validação feita pelo Laravel. Algumas técnologias utilzadas para o trabalho:</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Tecnologias utilizadas</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="#!">* PHP 7</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">* Mysql 5.6</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">* Materialize 0.100.2 </a></li>
          <li><a class="grey-text text-lighten-3" href="#!">* Jquery 3.2.1 </a></li>
          <li><a class="grey-text text-lighten-3" href="#!">* HTML 5</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">* Css 3</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">* Laravel 5.4</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">* Git 2.15.0</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      © 2017 Turvo - PR
      <a class="grey-text text-lighten-4 right" href="#!">Desenvolvido por Peterson Medeiros</a>
    </div>
  </div>
</footer>


<!--Import jQuery before materialize.js-->
<script
src="https://code.jquery.com/jquery-3.2.1.min.js"
integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
crossorigin="anonymous"></script>


<!-- Compiled and minified JavaScript -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
@yield('script')
<!-- SCRIPT PARA FORMULARIO DE CADASTRO -->
<script>
// Quando clica no campo de texto ele sobe e fica pequeno
$(document).ready(function() {
  $('select').material_select();
});

// Slides
$(document).ready(function(){
     $('.slider').slider();
   });
</script>

</body>
</html>
