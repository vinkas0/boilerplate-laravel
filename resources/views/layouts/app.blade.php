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
    <div class="mdl-layout__header">
      @include('brand.header')
      @include('app.header')
    </div>

    @include('drawer.hamburger')
    <div class="ribbon ribbon-top"></div>

    <main class="app-content mdl-layout__content">
      <a name="top"></a>
      <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--1-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
        <div class="page-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--10-col">
          @yield('content')
        </div>
      </div>
    </main>

    <div class="ribbon ribbon-bottom" style="background-color: #f5f5f5;"></div>
    <footer>
      @include('app.footer')
      @include('brand.footer')
    </footer>
  </div>

  <!-- Scripts -->
  <script src="/js/app.js"></script>
</body>
</html>
