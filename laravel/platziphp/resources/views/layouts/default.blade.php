<html>
<head>
  <title>Pueblos México</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="{{ elixir('css/app.css') }}"/>
  @yield('css')
</head>
<body>
  @if($currentUser)
    <a href="{{ route('auth_destroy_path') }}">Salir</a>
  @else
    <a href="{{ route('auth_show_path') }}">Iniciar Sesión</a>
  @endif

  @yield('content')

  <script type="text/javascript" src="{{ elixir('js/all.js') }}"></script>
  @yield('js')
</body>
</html>