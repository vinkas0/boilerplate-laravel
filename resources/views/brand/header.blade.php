<div class="brand-header mdl-layout__header-row">
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
