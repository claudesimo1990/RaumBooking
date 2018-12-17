<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    
    <title>RaumReservierung TH KÖLN</title>
    <link rel="shortcut icon" href="{{ asset('/bilder/IMG_4154.PNG') }}">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/modern-business.css') }}" rel="stylesheet">

    @yield('css')

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand title" href="index.html">
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
                  <a class="nav-link" href="{!! route('contact') !!}">Forum</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                      {{ __('Profile') }} <br>
                                      {{ __('Notifications') }} <br>
                                      {{ __('Meine Reservierungen') }} <br>
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
    <!-- Page Content -->
    <div class="container">

     @yield('content')
     
    </div>
    <!-- /.container -->
 <div class="push"></div>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; TH KÖLN 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   @yield('js')
  </body>

</html>
