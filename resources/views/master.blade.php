<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    @include('partials._head')
  </head>
  <body class="hero-image">
    @include('partials._nav')
    <div class="container">
      @yield('content')
    </div>
    @include('partials._scripts')
  </body>
  <footer>
    @include('partials._footer')
  </footer>
</html>
