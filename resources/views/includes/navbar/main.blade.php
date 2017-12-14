<nav class="navbar is-primary">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item" href="{{route('home')}}">
        <img src="{{asset('images/blog-logo1.png')}}" alt="CMS Blog Logo">
      </a>
      <div class="navbar-burger burger" data-target="navbarPrimary">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <div id="navbarPrimary" class="navbar-menu">
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
            <a class="navbar-item" href="{{route('login')}}">
              Login
            </a>
            <a class="navbar-item" href="{{route('register')}}">
              Join the Community
            </a>
          @else
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link" href="#">
                Hey {{ Auth::user()->name}}
              </a>
              <div class="navbar-dropdown is-boxed">
                <a class="navbar-item" href="#">
                  <i class="fa m-r-5 fa-user-circle" aria-hidden="true"></i>Profile
                </a>
                <a class="navbar-item" href="#">
                  <i class="fa m-r-5 fa-bell-o" aria-hidden="true"></i>Notification
                </a>
                <a class="navbar-item" href="{{route('manage.dashboard')}}">
                  <i class="fa m-r-5 fa-cog" aria-hidden="true"></i>Manage
                </a>
                <hr class="navbar-divider">
                <a href="{{route('logout')}}" class="navbar-item" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                  <i class="fa m-r-5 fa-sign-out" aria-hidden="true"></i>Sign Out
                </a>
                @include('includes.forms.logout')
              </div>
            </div>
          @endif

      </div>
    </div>
  </div>
</nav>
