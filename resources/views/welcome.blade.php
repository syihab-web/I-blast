<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
    <link rel="icon" href="{{ asset('company/logo.png') }}">
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
    <link rel="stylesheet" href="{{ asset('css/welcome_style.css') }}">
    </head>
<body>
<section id="nav-bar">

	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{ asset('company/logo_2.png') }}"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
            <a class="nav-link" href="/home"><i class="fas fa-sign-in-alt"></i> SignUpFree</a>
        </li>
        </ul>
    </div>
</div>
</nav>

</section>

	<!------------------banner selection------------------------------->
<section id="banner">
<div class="container">
<div class="row">
    <div class="col-md-6">
        <img src="{{ asset('company/thumbnail.png') }}" width="100%">
    </div>
    <div class="col-md-6 text-center">
        <p class="promo-title">For Better Email Marketing</p>
    <p>I-Blast merupakan website yang bertujuan untuk mempermudah pengiriman Email marketing Secara Gratis, Cepat, dan Praktis.</p>
    <a href="/home" class="btn btn-outline-success">Get Started</a>

</div>
</div>
</div>
</section>
</body>
</html>
