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
                <a class="nav-link" href="{!! route('login') !!}">login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{!! route('register') !!}">register</a>
              </li>
            @else
            <li class="nav-item">
              <a class="nav-link" href="about.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.html">Reservierung</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            <li class="nav-item">
                  <a class="nav-link" href="{!! route('accueil') !!}">Forum</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item" href="{{ route('profile') }}">
                          profile            
                      </a>

                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
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
