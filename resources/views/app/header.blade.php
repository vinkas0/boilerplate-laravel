<div class="app-header mdl-layout__header-row hidden-xs">
  <a href="{{ config('app.url') }}" class="mdl-layout-title">
    {{ config('app.name') }}
  </a>

  <div class="app-navigation-container">
    <nav class="app-navigation mdl-navigation">
      <a class="mdl-navigation__link mdl-typography--text-uppercase" href="{{ url('/') }}">Home</a>
    </nav>
  </div>
  <!-- Add spacer, to align navigation to the right in desktop -->
  <div class="mdl-layout-spacer"></div>
  <a href="#" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Call to action</a>
</div>
