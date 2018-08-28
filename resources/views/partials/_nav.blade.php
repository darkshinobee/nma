<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ route('home') }}">NMA PORTAL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" id="nav_text" href="{{ route('home') }}">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="nav_text" href="{{ route('about') }}">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="nav_text" href="{{ route('all_articles') }}">ARTICLES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="nav_text" href="{{ route('contact') }}">CONTACT US</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-outline-primary" href="{{ route('post_article') }}">POST ARTICLE</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <form class="form-inline my-2 my-lg-0">
        {{-- @if (Route::has('login')) --}}
                @auth
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          Dr {{ Auth::user()->first_name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('my_account') }}">{{ __('My Account') }}</a>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             {{-- onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();" --}}
                                           >
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
                @else
                    <li class="nav-item">
                      <a class="nav-link" id="nav_text" href="{{ route('login') }}">LOGIN</a>
                    </li>
                    {{-- <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li> --}}
                @endauth
        {{-- @endif --}}
      </form>
    </ul>
  </div>
</nav><br>
<div class="row">
  <div class="col-8 offset-2">
    <div class="input-group input-group-lg">
      <input type="text" class="form-control" id="nav_search" placeholder="Search Article, Doctor ...">
    </div>
  </div>
</div>
<hr>
