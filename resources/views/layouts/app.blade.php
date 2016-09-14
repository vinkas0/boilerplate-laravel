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

    <main class="app-content mdl-layout__content">
      <a name="top"></a>
      @yield('content')
    </main>
  </div>

  <!-- Scripts -->
  <script src="/js/app.js"></script>
</body>
</html>
