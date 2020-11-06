<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Artikel</title>
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
        <style>
            body{
                background-color: #ddd;
            }
        </style>
    </head>
    <body id="page-top">

        @if(session('success'))
        <script>
            swal({
                icon: 'info',
                title: 'Data berhasil Ditambahkan!',
            });
        </script>
        @endif

        @if(session('edit'))
        <script>
            swal({
                icon: 'info',
                title: 'Data berhasil Diedit!',
            });
        </script>
        @endif
        @if(session('hapus'))
        <script>
            swal({
                icon: 'info',
                title: 'Data berhasil Dihapus(Silahkan lihat di halaman sampah)!',
            });
        </script>
        @endif
        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif


        <!-- GetButton.io widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "6282120524105", // WhatsApp number
                instagram: "ainanitajriyan_", // Instagram username
                call_to_action: "Hubungi kami", // Call to action
                button_color: "#28a745", // Color of button
                position: "right", // Position may be 'right' or 'left'
                order: "whatsapp,instagram", // Order of buttons
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
<!-- /GetButton.io widget -->

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav" style="background: #000">
            <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="{{ asset('company/logo_2.png') }}" width="90%"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/#services">Layanan</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/#banner">Keunggulan</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/lihatArtikel"> Artikel</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/#about">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/#saran">Saran</a></li>

                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/home"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <div class="container mt-5">
            <section class="page-section">

                <h3 class="text-center">Detail Artikel</h3>

                <hr class="divider dark-my-4"><br>

                <div class="card border-light bga"style="border:black;">
                @foreach($show as $s)
                <div class="card-header text-center bga">
                    <div div class="container-fluid" >
                        @if(Auth::user() && Auth::user()->roles == '1')
                        <a href="/editArtikel/{{ $s->id }}" class="btn btn-primary ">Edit</a>
                        <a onclick="return confirm('Apakah anda yakin ingin menghapus Artikel ini?');" href="/hapusArtikel/{{ $s->id }}" class="btn btn-danger">Hapus</a>
                        @endif
                        <br><br>
                    <div class="row justify-content-center" >
                        <div class="col-10 col-md-12" style="text-align: center; padding: 0; " >
                            <h1>{{ $s->judul }}</h1><br>
                        <img src="{{ asset($s->foto) }}" class="img-fluid" alt="Responsive image" style="max-height: 700px;" width="700px">
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card-body" >
                    <br>
                    <center>

                    <p class="card-text">{!! $s->konten !!}</p>
                </center>
                </div>
                <div class="card-footer text-muted">
                    Dibuat oleh {{ $s->user->name }}
                </div>
                @endforeach
                </div>


            </section>
        </div>

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
