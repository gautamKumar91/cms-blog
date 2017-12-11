<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
      <nav class="navbar is-primary">
        <div class="container">
          <div class="navbar-brand">
            <a class="navbar-item" href="{{route('home')}}">
              <img src="{{asset('images/blog-logo1.png')}}" alt="CMS Blog Logo">
            </a>
            <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>

          <div id="navbar" class="navbar-menu">
            <div class="navbar-start">
              <a class="navbar-item" href="#">
                Learn
              </a>
              <a class="navbar-item" href="#">
                Discuss
              </a>
              <a class="navbar-item" href="#">
                Share
              </a>
            </div>

            <div class="navbar-end">

                @if(Auth::guest())
                  <a class="navbar-item" href="#">
                    Login
                  </a>
                  <a class="navbar-item" href="#">
                    Join the Community
                  </a>
                @else
                  <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="#">
                      Hey Gautam
                    </a>
                    <div class="navbar-dropdown is-boxed">
                      <a class="navbar-item" href="#">
                        <i class="fa m-r-5 fa-user-circle" aria-hidden="true"></i>Profile
                      </a>
                      <a class="navbar-item" href="#">
                        <i class="fa m-r-5 fa-bell-o" aria-hidden="true"></i>Notification
                      </a>
                      <a class="navbar-item" href="#">
                        <i class="fa m-r-5 fa-cog" aria-hidden="true"></i>Setting
                      </a>
                      <hr class="navbar-divider">
                      <a class="navbar-item" href="#">
                        <i class="fa m-r-5 fa-sign-out" aria-hidden="true"></i>Sign Out
                      </a>
                    </div>
                  </div>
                @endif

            </div>
          </div>
        </div>
      </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
