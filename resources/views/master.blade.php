<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('partials._head')
</head>

<body class="hero-image">
    @include('partials._nav')
    <div class="row">
      <div class="col-8 offset-2">
        @include('partials._prompts')
      </div>
    </div>
    <div class="main-container">
        <div class="container">
            @yield('content')
        </div>
        @include('partials._scripts')
</body><hr><br>
<footer class="footer-basic-centered">
    @include('partials._footer')
</footer>
</div>

</html>
