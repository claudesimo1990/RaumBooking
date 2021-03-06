<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand title" href="{{route('accueil')}}">
      <img src="{{ asset('/bilder/logo.png') }}" alt="/"></img><br>
        RaumReservierung
     </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
            @if (Auth::guest())
            <li class="nav-item">
                <a class="nav-link" href="{!! route('login') !!}">
                  <i class="fa fa-sign-in"></i>
                login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{!! route('register') !!}">
                  <i class="fa fa-sign-in"></i>
                register</a>
              </li>
            @else
            <li class="nav-item">
              <a class="nav-link" href="{{route('posts.index')}}">
                <i class="fa fa-edit"></i>
              Reservieren</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contact')}}"><i class="fa fa-address-book"></i>Contact</a>
            </li>
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  <i class="fa fa-user-o"></i>
                {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item" href="#">
                      <i class="fa fa-bell-o"></i>
                      <span class="badge badge-danger">9+</span>
                        Notifications            
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="fa fa-edit"></i>
                        Reservierungen            
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="fa fa-comments-o"></i>
                        Forum            
                    </a>
                    <a class="dropdown-item" href="{{ route('profile') }}">
                    <i class="fa fa-user-o"></i>
                        Profile            
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                     <i class="fa fa-sign-out"></i>
                                    {{ __('Abmelden') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf

                    </form>
                </div>
            </li>
            @endif
          </ul>
    </div>
  </div>
</nav>
