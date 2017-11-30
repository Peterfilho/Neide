
  <nav class="purple">
    <div class="nav-wrapper" style="margin-left: 40px; margin-right: 40px;">
        <a href="{{ url('/') }}" class="brand-logo"><i class="material-icons left">content_cut</i>Neide</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <ul id="nav-mobile" class="right hide-on-med-and-down">

          <!-- Não autenticado -->
          @guest
            <li><a href="{{ route('login') }}"><i class="material-icons right">chevron_right</i>Login</a></li>
            <!--
            <li><a href="{{ route('register') }}">Register</a></li>
            -->
          @else
          <!-- Autenticado -->
            <li><a href="{{ route('pessoa.new') }}"><i class="material-icons left">person_add</i> Cadastrar Contato</a></li>
            <li><a href="{{ route('pessoa.index') }}"><i class="material-icons left">view_list</i>Agenda de Contatos</a></li>

            <!-- LOGOUT -->

            <li>
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <i class="material-icons left">exit_to_app</i>logout
            </a>

            <!-- Bem vindo do usuário -->

          </li>
          <li>
            <div class="chip">
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
      </ul>
      <ul class="side-nav" id="mobile-demo">
          <!-- Não autenticado -->
          @guest

            <li><a href="{{ route('login') }}"><i class="material-icons right">chevron_right</i>Login</a></li>

          @else
          <!-- Autenticado -->
          <li class="center">
            <div class="chip">
              Bem vindo {{ Auth::user()->name }}
            </div>
          </li>

            <li><a href="{{ route('pessoa.new') }}"><i class="material-icons left">person_add</i> Cadastrar Contato</a></li>
            <li><a href="{{ route('pessoa.index') }}"><i class="material-icons left">view_list</i>Agenda de Contatos</a></li>

            <!-- LOGOUT -->

            <li>
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <i class="material-icons left">exit_to_app</i>logout
            </a>

            <!-- Bem vindo do usuário -->

          </li>


      <!-- Ação para logar -->
          <li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </li>


      @endguest
    </ul>
      </ul>
    </div>
  </nav>
