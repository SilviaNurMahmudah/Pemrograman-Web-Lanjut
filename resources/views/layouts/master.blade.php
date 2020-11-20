<!DOCTYPE html>
<html lang="en" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('judul')</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="dns-prefetch" href="//fonts.gstatic.com">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link href="kuis1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="kuis1/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="kuis1/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="kuis1/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="kuis1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="kuis1/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="kuis1/style.css" rel="stylesheet">

</head>
<body>
@section('content')
  @if (session('status'))
    <div class="alert alert-success" role="alert">
      {{ session('status') }}
    </div>
  @endif
<!-- ======= Header ======= -->
<header id="header" class="header-tops">
    <div class="container">
      <h1>Silvia Nur Mahmudah</h1>
      <h2>Welcome to <span>  My Website</span></h2>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
            @can('user-display')
            <a href="home">Home</a>
            @endcan
          </li>

          <li class="nav-item {{ Route::is('about') ? 'active' : '' }}">
            @can('user-display')
            <a href="about">About</a>
            @endcan
          </li>

          <li class="nav-item {{ Route::is('contact') ? 'active' : '' }}">
            @can('user-display')
            <a href="contact">Contact</a>
            @endcan
          </li>

          <li class="nav-item {{ Route::is('manage') ? 'active' : '' }}">
            @can('manage-articles')
            <a href="{{route('manage')}}">Manage</a>
            @endcan
          </li>

          @guest
            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
            @if (Route::has('register'))
                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
            @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
      </nav><!-- .nav-menu --> 
    </div>
</header><!-- End Header -->

@yield('konten')


</body>

<div class="credits">
    <p>Copyright &copy; Silvia's Website 2020</p>
</div>

  <!-- Vendor JS Files -->
  <script src="kuis1/vendor/jquery/jquery.min.js"></script>
  <script src="kuis1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="kuis1/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="kuis1/vendor/php-email-form/validate.js"></script>
  <script src="kuis1/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="kuis1/vendor/counterup/counterup.min.js"></script>
  <script src="kuis1/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="kuis1/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="kuis1/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="kuis1/js/main.js"></script>

  <!-- Scripts -->
  <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

</html>