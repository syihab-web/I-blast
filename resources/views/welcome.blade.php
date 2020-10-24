<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Welcome page</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="{{ asset('company/logo_2.png') }}" width="90%"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/home"><i class="fas fa-sign-in-alt"></i> Sign in</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-dark">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-md-6">
                        <img class="ml-5" src="{{ asset('company/thumbnail.png') }}" width="90%">
                      </div>

                    <div class="col-md-6 ">
                        <p class="text-white-75 font-weight-light mb-5">I-Blast Merupakan Website yang menyediakan fitur fitur yang dapat mempermudah pengiriman email marketing.</p>
                        <a class="btn btn-success btn-xl" href="/home">GET STARTED</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-success" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">We've got what you need!</h2>
                        <hr class="divider light my-4" />
                        <p class="text-white-50 mb-4">I-blast dengan fitur fitur nya akan memudahkan anda dalam melakukan pekerjaan produktif seperti mengirim email dalam jumlah yang banyak dalam satu waktu.</p>
                      </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <h2 class="text-center mt-0">Services</h2>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-mobile text-success mb-4"></i>
                            <h3 class="h4 mb-2">Mobile Responsive</h3>
                            <p class="text-muted mb-0">Dapat digunakan di berbagai platform</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-laptop-code text-success mb-4"></i>
                            <h3 class="h4 mb-2">Up to Date</h3>
                            <p class="text-muted mb-0">Selalu Update fitur dan template email</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-envelope text-success mb-4"></i>
                            <h3 class="h4 mb-2">Blast Mail</h3>
                            <p class="text-muted mb-0">Mengirim email banyak dengan waktu singkat</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-heart text-success mb-4"></i>
                            <h3 class="h4 mb-2">Made with Love</h3>
                            <zp class="text-muted mb-0">Is it really open source if it's not made with love?</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © 2020 I-Blast</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/welcome.js') }}"></script>
    </body>
</html>
