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
    <script src="{{ asset('js/simple-modal.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/all.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/solid.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/regular.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modals.css') }}">
    <link rel="stylesheet" href="{{ asset('css/simple-modal.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/simple-sidebar.css') }}">
    <style>
  html {

    --bg: #FCFCFC;
    --bg-panel: #EBEBEB;
    --color-headings: #0077FF;
    --color-text: #333333;
}

html[data-theme='dark'] {
    --bg: #333333;
    --bg-panel: #434343;
    --color-headings: #3694FF;
    --color-text: #B5B5B5;
}

body {
    background-color: var(--bg);
}

.container {
    color: var(--color-text);
}
.bg{
    background-color: var(--bg-panel);
    color: var(--color-text);

}
.up{
    color: var(--color-text);
}



input[type=checkbox]{
	height: 0;
	width: 0;
	visibility: hidden;
}

#lb {
	cursor: pointer;
	text-indent: -9999px;
	width: 52px;
	height: 27px;
	background:grey;
	border-radius: 100px;
	position: relative;
}

#lb:after {
	content: '';
	position: absolute;
	top: 3px;
	left: 3px;
	width: 20px;
	height: 20px;
	background: #fff;
	border-radius: 90px;
	transition: 0.3s;
}

input:checked + #lb {
	background: var(--color-headings);
}

input:checked + #lb:after {
	left: calc(100% - 5px);
	transform: translateX(-100%);
}

#lb:active:after {
	width: 45px;
}

html.transition,
html.transition *,
html.transition *:before,
html.transition *:after {
  transition: all 750ms !important;
  transition-delay: 0 !important;
}
    </style>
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
            <div class="bg" id="sidebar-wrapper">
                <div class="sidebar-heading"><a href="" class="list-group-item bg-transparent"><i class="fas fa-user-circle"></i>  Edit Profile</a>
                </div>
                <br>
                <div class="list-group list-group-flush">
                <i class="list-group-item bg-transparent">
                    <div class="dropdown">
                        <i class="fas fa-tachometer-alt"></i>
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <a href="">Dashboard</a>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#"><i class="fas fa-tachometer-alt"></i> Dashboard Home</a>
                          <a class="dropdown-item" href="/email"><i class="fas fa-history"></i> Email History</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
                </i>
                <i class="list-group-item bg-transparent">
                    <i class="fas fa-envelope"></i><a class="ml-2" href="/email/create"> Send Email</a>
                </i>
                <i class="list-group-item bg-transparent">
                    <i class="fas fa-image"></i><a class="ml-2" href="/email/"> See Template</a>
                </i>
                <i class="list-group-item bg-transparent">
                     <div class="toggle-container">
                        <input type="checkbox" id="switch" name="theme" /><label id="lb" for="switch">Toggle</label>
                        <small><i class="fas fa-sun"></i>Day / <i class="fas fa-moon"></i>Night</small>
                    </div>
                </i>
                </div>
            </div>
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-md navbar-light bg-secondary justify-content-between">
                <div class="container">
                    <a class="navbar-item ml-2 btn btn-dark" id="menu-toggle"><i class="fas fa-bars"></i></a>
                    <form class="form-check-inline">
                    <input class="form-control mr-sm-2 p-1 pl-2" size="25" type="search" placeholder="Search" aria-label="Search">
                    <a href="/email/search" class="btn btn-dark"><i class="fas fa-search"></i></a>
                    </form>
                </div>
                </nav>
                <main class="py-4 mb-2">
                    <div class="container">
                        @yield('content')
                    </div>
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
<script>
     var checkbox = document.querySelector('input[name=theme]');

        checkbox.addEventListener('change', function() {
            if(this.checked) {
                trans()
                document.documentElement.setAttribute('data-theme', 'dark')
            } else {
                trans()
                document.documentElement.setAttribute('data-theme', 'light')
            }
        })

        let trans = () => {
            document.documentElement.classList.add('transition');
            window.setTimeout(() => {
                document.documentElement.classList.remove('transition')
            }, 1000)
        }
</script>
</body>
</html>
