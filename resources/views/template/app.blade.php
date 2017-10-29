<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <style type="text/css">

  body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }

  </style>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
  <nav class="purple">
    <div class="nav-wrapper purple container">
      <a href="#" class="brand-logo"><i class="material-icons left">content_cut</i> Neide Cabeleireira</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#">Login</a></li>
      </ul>
    </nav>

    @yield('content')


    <footer class="page-footer purple">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Salão da Neide - Turvo - PR</h5>
            <p class="grey-text text-lighten-4">Veja nossas redes sociais e fique por dentro das novidades</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Redes Sociais</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!"><i class="material-icons left">wifi</i>Facebook</a></li>
              <li><a class="grey-text text-lighten-3" href="#!"><i class="material-icons left">wifi</i>Twitter</a></li>
              <li><a class="grey-text text-lighten-3" href="#!"><i class="material-icons left">wifi</i>Instagram</a></li>
              <li><a class="grey-text text-lighten-3" href="#!"><i class="material-icons left">wifi</i>Snapchat</a></li>
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
  </html>
