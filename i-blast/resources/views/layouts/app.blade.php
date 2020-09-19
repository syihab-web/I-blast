<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('fontawesome/js/fontawesome.min.js') }}" defer></script>
    <script src="{{ asset('fontawesome/js/all.js') }}" defer></script>
    <script src="{{ asset('fontawesome/js/solid.js') }}" defer></script>
    <script src="{{ asset('fontawesome/js/brands.js') }}" defer></script>
    <script src="{{ asset('fontawesome/js/regular.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/all.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/solid.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/regular.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/simple-sidebar.css') }}">
</head>
<body>
    <div id="app">
     <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('company/logo_2.png') }}" width="80">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="/home"><i class="fas fa-home"></i> Home</a>
                        </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }} <i class="fas fa-sign-out-alt"></i>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="d-flex" id="wrapper">

                <!-- Sidebar -->
            <div class="bg-light border-right" id="sidebar-wrapper">
                <div class="sidebar-heading"><a href="" class="list-group-item list-group-item-action bg-light"><i class="fas fa-user-circle"></i>  Edit Profile</a>
                </div>
                <br>
                <div class="list-group list-group-flush">

                <a class="list-group-item list-group-item-action bg-light" href="/email"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                <a class="list-group-item list-group-item-action bg-light" href="/email/create"><i class="fas fa-envelope"></i>  Send Email</a>
                <a class="list-group-item list-group-item-action bg-light" href="#"><i class="fas fa-images"></i>  See Templates</a>
                </div>
            </div>
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-md navbar-light bg-secondary justify-content-between mb-5">
                <div class="container">
                    <a class="navbar-item ml-2 btn btn-dark" id="menu-toggle"><i class="fas fa-bars"></i></a>
                    <form class="form-check-inline">
                    <input class="form-control mr-sm-2 p-1 pl-2" size="25" type="search" placeholder="Search" aria-label="Search">
                    <a href="/email/search" class="btn btn-dark"><i class="fas fa-search"></i></a>
                    </form>
                </div>
                </nav>
                <main class="py-4 mb-5">
                    @yield('content')
                </main>

            </div>
        </div>
        <br><br>
      	<footer class="footer-distributed">

		<div class="footer-left">

        <span><img src="{{ asset('company/logo.png') }}" width="100"></span>

		<p class="footer-links">
		<a href="#">Home</a>
	·
		<a href="https://inovindo.co.id/">About</a>
	·
		<a href="#">Contact</a>
		</p>

		<p class="footer-company-name">I-Blast &copy; 2020</p>
		</div>

		<div class="footer-center">

		<div class="mt-2">
		<i class="fa fa-map-marker"></i>
		<p><span>Buana Citra C-15</span>Kab.Bandung, Jawa Barat</p>
		</div>

		<div class="mt-3">
		<i class="fa fa-phone"></i>
		<p>+62-881-0236-89072</p>
		</div>

		<div class="mt-3">
		<i class="fa fa-envelope"></i>
		<p><a href="mailto:syihabudin234@gmail.com">syihabudin234@gmail.com</a></p>
		</div>

		</div>

		<div class="footer-right">

		<p class="footer-company-about">
		<span>About the company</span>
        INOVINDO Merupakan perusahaan Jasa Pembuatan Website Profesional, memiliki tenaga ahli muda yang berkompeten dan senantiasa mengutamakan pelayanan yang prima untuk klien / perusahaan mitra.mt-1</p>

		<div class="footer-icons">

		<a href="#"><i class="fab fa-facebook"></i></a>
		<a href="#"><i class="fab fa-twitter"></i></a>
		<a href="#"><i class="fab fa-instagram"></i></a>
		<a href="https://inovindo.co.id/"><i class="fas fa-globe"></i></a>

		</div>

		</div>

		</footer>
    </div>

    <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>
</html>
