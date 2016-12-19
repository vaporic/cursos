<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Pueblos México</title>
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="{{ elixir('css/app.css') }}"/>
  @yield('css')
</head>
<body>
  @include('partials.header')

  @yield('content')

  <script type="text/javascript" src="{{ elixir('js/all.js') }}"></script>
  @yield('js')
</body>
</html>