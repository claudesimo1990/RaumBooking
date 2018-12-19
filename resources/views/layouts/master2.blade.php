<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RaumReservierung TH KÖLN </title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/bilder/IMG_4154.PNG') }}">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/modern-business.css') }}" rel="stylesheet">

    @yield('css')

  </head>

  <body>

    <!-- Navigation -->
    @yield('nav')

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        @yield('header')
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      @yield('content')

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   @yield('js')
  </body>

</html>
