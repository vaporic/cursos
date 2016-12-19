<ul class="list-inline">
  <li>
    <a href="{{ route('index') }}">Inicio</a>
  </li>
  @if($currentUser)
    <li>
      Hola, {{ $currentUser->first_name }} {{ $currentUser->last_name }}
    </li>
    <li>
      <a href="{{ route('auth_destroy_path') }}">Salir</a>
    </li>
  @else
    <li>
      <a href="{{ route('register_create_path') }}">Registro</a>
    </li>
    <li>
      <a href="{{ route('auth_show_path') }}">Iniciar Sesión</a>
    </li>
  @endif
</ul>

<header id="header-container">
  <div class="container">
    <div class="row">
      <div class="col-xs-6">
        <a href="{{ route('index') }}">
          <h1>Pueblos México</h1>
        </a>
      </div>
      <div class="col-xs-6">
        Login
      </div>
    </div>
  </div>
</header>