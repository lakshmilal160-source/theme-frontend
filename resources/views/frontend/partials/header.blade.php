<header class="site-header">
  <div class="container header-inner">
    <a class="brand" href="{{ route('home') }}"><span class="brand-mark" aria-hidden="true">▱</span> themehaus.</a>
    <form class="header-search" action="{{ route('themes.index') }}" method="GET" role="search">
      <label class="visually-hidden" for="site-search">Find a dashboard theme</label>
      <input id="site-search" name="search" value="{{ request('search') }}" placeholder="Find your next great dashboard...">
      <button aria-label="Search themes" type="submit">Search</button>
    </form>
    <nav class="nav-links" aria-label="Main navigation">
      <a href="{{ route('themes.index') }}">Explore themes</a><a href="{{ route('about') }}">About us</a><a href="{{ route('contact') }}">Let's talk ↗</a>
    </nav>
    <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="mobile-navigation">Menu</button>
  </div>
  <nav id="mobile-navigation" class="mobile-nav" aria-label="Mobile navigation"><a href="{{ route('themes.index') }}">Explore themes</a><a href="{{ route('about') }}">About us</a><a href="{{ route('contact') }}">Let's talk</a></nav>
</header>