<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name') }}</title>

  <!-- Styles -->
  <link href="/css/app.css" rel="stylesheet">

  <!-- Scripts -->
  <script>
  window.Laravel = <?php echo json_encode([
    'csrfToken' => csrf_token(),
  ]); ?>
  </script>
</head>
<body>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <div class="brand-header mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title hidden-sm hidden-xs">
          <a href="{{ config('app.url') }}">
            {{ config('app.name') }}
          </a>
        </span>
        <!-- Add spacer, to align navigation to the right in desktop -->
        <div class="mdl-layout-spacer visible-lg-block visible-md-block"></div>
        <!-- Navigation -->
        <div class="brand-navigation-container visible-lg-block visible-md-block">
          <nav class="brand-navigation mdl-navigation">
            @if (Auth::guest())
            <a class="mdl-navigation__link" href="{{ url('/login') }}">Login</a>
            <a class="mdl-navigation__link" href="{{ url('/register') }}">Register</a>
            @else
            <a class="mdl-navigation__link"  href="{{ url('/logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Logout</a>
            @endif
          </nav>
        </div>
        <span class="mdl-layout-title hidden-lg hidden-md">
          <a href="{{ config('app.url') }}">
            {{ config('app.name') }}
          </a>
        </span>
      </div>
    </div>

    <main class="app-content mdl-layout__content">
      <a name="top"></a>
      @yield('content')
    </main>
  </div>

  <!-- Scripts -->
  <script src="/js/app.js"></script>
</body>
</html>
