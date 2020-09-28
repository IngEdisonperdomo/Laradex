<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
  <title>Laradex -@yield('title')</title>
</head>
<body>
  <nav class="navbar navbar-dark bg-primary mb-2">
    <a href="{{  url('/') }}" class="navbar-brand">Laradex</a>
    <a href="{{  url('/crear') }}" class="navbar-brand btn btn-info">Crear</a>
  </nav>

  @yield('content')


  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
  
  <script src="/bootstrap/js/bootstrap.js" ></script>
</body>
</html>