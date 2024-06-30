<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>
  <!-- Fontes do google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

  <!-- CSS BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- CSS da Aplicação -->
  <link rel="stylesheet" href="/css/styles.css">
  <script src="/js/scripts.js"></script>

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light">

      <div class="collapse navbar-collapse" id="navbar">
        <a href="/" class="navbar-brand">
          <img src="/img/logo.svg" alt= "EliteEvents">
        </a>
        <ul class="navbar-nav">
        <li class="nav-item">
            <a href="/" class="nav-link">Inicio</a>
          </li>
          <li class="nav-item">
            <a href="/events/contacts" class="nav-link">Contato</a>
          </li>
          <li class="nav-item">
            <a href="/events/create" class="nav-link">Organizar Eventos</a>
          </li>
          <li class="nav-item">
            <a href="/events/enter" class="nav-link">Entrar </a>
          </li>
          <li class="nav-item">
            <a href="/events/resgister" class="nav-link">Cadastre-se</a>
          </li>
        </ul>
      </div>
    </nav>

  </header>
  @yield ('content')
  <footer>
    <p>EliteEvents &copy; 2024</p>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>