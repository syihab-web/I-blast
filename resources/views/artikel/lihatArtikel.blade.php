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
            <a class="navbar-brand js-scroll-trigger" href="/"><img src="{{ asset('company/logo_2.png') }}" width="90%"></a>
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
            <h2 class="text-center">Artikel</h2>

            <hr class="divider dark my-4"><br><br>

            @if(Auth::user() && Auth::user()->roles == '1')
            <a  href="/buatArtikel" class="btn btn-primary btn-md">Tambah Artikel</a><br><br>
            @endif
            <div class="row  row-cols-md-3 bga">
                @foreach ($artikel as $artikels)
                    <div class="col-12 col-md-4 mb-4 " >
                        <div class="card shadow" >
                        @if (empty($artikels->foto))
                        <div class="card-body container">
                            <div class="text-center row justify-content-center ">
                                <div class="col-10 col-md-12 thumb" >
                                    <img src="{{ asset('uploads/default_artikel_icon.png') }}" class="img-fluid" >
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="card-body container">
                            <div class="text-center row justify-content-center ">
                                <div class="col-10 col-md-12 thumb" >
                                    <img src="{{ asset($artikels->foto) }}" class="img-fluid" >
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="card-body bg">
                            <div class="link" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                                <h4>{{ $artikels->judul}}</h4>
                            </div>
                            <div class="" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis; max-height:50px;">
                                <p class="card-text" style="font-size: 10px">{!! $artikels->konten !!}</p>
                            </div>
                            <a href="/detailArtikel/{{ $artikels->slug }}">Baca Selengkapnya...</a>
                            <p class="card-text"><small class="text-muted">Dibuat oleh {{ $artikels->user['name'] }}</small></p>
                            <p class="card-text"><small class="text-muted">{{ \Carbon\Carbon::parse($artikels->updated_at)->diffForHumans() }}</small></p>

                        </div>
                        </div>
                    </div>
                @endforeach
            </div>

                <!-- style="list-style-type: none; color:black; text-decoration:none;" -->
                <!-- <a href="/detailArtikel"style="list-style-type: none; color:black" ></a> -->
                <!-- <div class="row row-cols- row-cols-md-2">
                    <div class="col mb-4">
                    @foreach ($artikel as $a)
                        <div class="card">
                        @if (empty($a->foto))
                            <img src="{{ asset('images/carousel3.jpg') }}" class="card-img-top" alt="...">
                        @else
                            <img src="..." class="card-img-top" alt="...">
                        @endif
                            <div class="card-body">
                            <h5 class="card-title">{{ $a-> judul}}</h5>
                            <p class="card-text">{{ $a->konten }}</p>
                            <p class="card-text"><small class="text-muted">Dibuat oleh user dengan id {{ $a->id_user }}</small></p>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>

                style="overflow: hidden; max-width: 350px; padding: 0;">
                style="max-height: 250px; display: block; margin: auto; width: 100%;"-->

                <div class="row justify-content-center">
                {{ $artikel->links() }}
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


