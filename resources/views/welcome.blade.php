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
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <style>
        .promo-title{
            color: aliceblue;
        }
    </style>
    <body id="page-top">

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
@if(session('status'))
<script>
    swal({
        icon: 'info',
        title: 'Kritik dan Saran Berhasil dikirim!',
    });
</script>
@endif
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="{{ asset('company/logo_2.png') }}" width="90%"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Layanan</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#banner">Keunggulan</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#artikel"> Artikel</a></li>

                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#saran">Saran</a></li>

                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/home"><i class="fas fa-sign-in-alt"></i> Masuk</a></li>
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
                        <a class="btn btn-success btn-xl" href="{{ url('/home') }}"> Mulai Sekarang</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-success">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Kita punya yang kalian inginkan</h2>
                        <hr class="divider light my-4" />
                        <br><br>
                       </div>
                </div>
            </div>
            <!-- Main Content -->
    <div class="container">
      <div class="row main-content">
        <div class="col-lg-6">
          <img src="{{ asset('company/maincontent1.jpg') }}" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6">
          <h3 class="text-white">Tidak Perlu <span> Bingung </span> dengan Email Marketing </h3>
          <p class="text-light">Anda hanya perlu fokus pada bisnis anda dan lakukan Email Blast dengan efisien </p>
          <a href="/email/create" class="btn btn-primary tombol">Kirim email Sekarang</a>
        </div>
      </div>

      <div class="row main-content mt-5">
        <div class="col-lg-6">
          <h3 class="text-white">Raih sukses anda bersama kami</h3>
          <p class="text-light">Sekeras apapun berusaha, bila <b style="color: black;"> alat </b> yang anda gunakan salah.. Maka semuanya itu sia-sia </p>
          <a href="/email/create" class="btn btn-primary tombol mb-4">Kirim Email sekarang</a>
        </div>
        <div class="col-lg-6">
          <img src="{{ asset('company/maincontent2.jpg') }}" alt="" class="img-fluid">
        </div>
      </div>
    </div>

      <!-- End Main Content -->

        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <h2 class="text-center mt-0">Layanan</h2>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-mobile text-success mb-4"></i>
                            <h3 class="h4 mb-2">Responsif</h3>
                            <p class="text-muted mb-0">Dapat digunakan di berbagai platform</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-laptop-code text-success mb-4"></i>
                            <h3 class="h4 mb-2">Terbaru</h3>
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
                            <i class="fas fa-4x fa-book-reader text-success mb-4"></i>
                            <h3 class="h4 mb-2">Artikel</h3>
                            <zp class="text-muted mb-0">Menyediakan Berbagai Artikel Terbaru dan Informatif</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<section id="banner" class="page-section bg-success">
<div class="container h-100">
    <h2 class="text-white mt-0 text-center">Keunggulan</h2>
    <hr class="divider light my-4" />
    <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-md-4">
            <img src="{{ asset('company/jam.png') }}" width="80%">
        </div>

    <div class="col-md-6 text-center">
        <p class="promo-title mr-5">Menghemat berjam-jam</p>
    <p class="text-light">Buat pengiriman email Anda dengan cepat. Tidak diperlukan desainer grafis atau pembuat kode HTML.</p>
</div>
</div>
</div>
<div class="container">
    <div class="row h-100 align-items-center justify-content-center text-center">
    <div class="col-md-4">
        <img src="{{ asset('company/laptop.png') }}" width="80%">
    </div>
    <div class="col-md-6">
        <p class="promo-title mr-5">Cantik dan responsif</p>
    <p class="text-light">Email Anda akan terlihat bagus di semua jenis perangkat dan klien email yang berbeda.</p>
</div>
</div>
</div>
<div class="container">
    <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-md-4">
            <img src="{{ asset('company/hem.png') }}" width="80%">
        </div>

    <div class="col-md-6">
         <p class="promo-title mr-5">I-Blast</p>
    <p class="text-light">Cara terbaik untuk mengirimkan email Anda dengan cepat kepada puluhan atau mungkin ratusan orang yang membutuhkan informasi dari Anda.</p>
</div>
 </div>
</div>
<div class="container">
    <div class="row h-100 align-items-center justify-content-center text-center">
    <div class="col-md-4">
        <img src="{{ asset('company/web.png') }}" width="80%">
    </div>
    <div class="col-md-6">
        <p class="promo-title mr-5">Template</p>
    <p class="text-light">Anda hanya perlu memasukan info kedalam email Anda dan memilih template yang Anda inginkan untuk tampilan email yang akan Anda kirim kepada banyak orang.</p>
</div>
</div>
</div>
</section>
<section class="page-section" id="video">
    <div class="container">

        <h2 class="text-center">Demo Website</h2>
        <hr class="divider dark my-4">

        <video controls width="100%">
            <source src="" type="video/mp4" />
        </video>
    </div>
</section>
<section class="page-section" id="artikel">
    <div class="container">
        <h1 class="text-center">Artikel</h1>
        <hr class="divider my-4">
    <div class="row  row-cols-md-3 bga">
        @foreach ($artikel as $artikels)
            <div class="col-12 col-md-4 mb-4 " >
                <div class="card shadow h-100">
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
                        <div class="col-10 col-md-12 thumb">
                            <img src="{{ asset($artikels->foto) }}" class="img-fluid">
                        </div>
                    </div>
                </div>
                @endif
                <div class="card-body bg">
                    <div class="link" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                        <h4>{{ $artikels->judul}}</h4>
                    </div>
                    <div style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis; max-height:50px;">
                        <p class="card-text" style="font-size: 10px; color: black">{!! Str::substr(strip_tags($artikels->konten), 0, 70)   !!}...</p>
                    </div>
                    <a href="/detailArtikel/{{ $artikels->slug }}">Baca Selengkapnya...</a>
                    <p class="card-text"><small class="text-muted">Dibuat oleh {{ $artikels->user['name'] }}</small></p>
                    <p class="card-text"><small class="text-muted">{{ \Carbon\Carbon::parse($artikels->updated_at)->diffForHumans() }}</small></p>

                </div>
                </div>
            </div>
        @endforeach
    </div>
    <center><a href="/lihatArtikel" class="btn btn-success"><i class="fas fa-arrow-alt-circle-right"></i> Lihat Selengkapnya</a></center>
</div>
</section>
<br>

<section class="page-section bg-success" id="about">
    <div class="container">
    <div class="row justify-content-center">
      <div class="">
        <h1 class="text-light">Tentang Kami</h1>
        <hr class="divider light my-4" />
<br>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-2 justify-content-center d-flex">
        <figure class="figure-caption">
          <img width="70%" src="{{ asset('company/Syihab.jpg') }}" class="figure-img img-fluid rounded-circle menonjol" alt="...">
          <h5 class="text-light">Syihab</h5>
          <h6 class="text-light">Manager Proyek</h6>
      </figure>
      </div>
      <div class="col-md-2 justify-content-center d-flex">
        <figure class="figure">
          <img width="70%" src="{{ asset('company/ainani.jpg') }}" class="figure-img img-fluid rounded-circle menonjol" alt="...">
          <figcaption class="figure-caption">
            <h5 class="text-light">Ainan</h5>
            <h6 class="text-light">Pengembang Web</h6>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-2 justify-content-center d-flex">
        <figure class="figure">
          <img width="70%" src="{{ asset('company/syarif.jpg') }}" class="figure-img img-fluid rounded-circle menonjol" alt="...">
          <figcaption class="figure-caption">
              <h5 class="text-light">Syarif</h5>
              <h6 class="text-light">Desainer Web</h6>
            </figcaption>
      </figure>
      </div>
      <div class="col-md-2 justify-content-center d-flex">
        <figure class="figure">
          <img width="70%" src="{{ asset('company/rahma.jpg') }}" class="figure-img img-fluid rounded-circle menonjol" alt="...">
          <figcaption class="figure-caption">
              <h5 class="text-light">Rahma</h5>
              <h6 class="text-light">Sistem analis</h6>
            </figcaption>
      </figure>
      </div>
      <div class="col-md-2 justify-content-center d-flex">
      <figure class="figure">
          <img width="70%" src="{{ asset('company/hilman.jpg') }}" class="figure-img img-fluid rounded-circle menonjol" alt="...">
          <figcaption class="figure-caption">
              <h5 class="text-light">Hilman</h5>
              <h6 class="text-light">Pengembang Front End</h6>
            </figcaption>
      </figure>
      </div>
    </div>
    <p style="color: whitesmoke" align="justify"> I-Blast dibuat oleh para peserta praktek kerja lapangan di PT INOVINDO Digital Media. Para peserta yang terlibat dalam project ini beranggotakan siswa dan siswi SMKN 4 BANDUNG. SMKN 4 BANDUNG adalah Sekolah Menengah Kejuruan yang memiliki kelompok bidang keahlian Ketenaga Listrikan, Audio Video, dan Teknik Komputer dan Informatika. Keberadaannya didukung oleh dunia usaha dan dunia industri, baik dalam pembelajaran maupun penyerapan lulusannya, salah satunya oleh PT Inovindo Digital Media. Pembelajaran teori dan praktek tidak hanya dilakukan di dalam kelas tetapi dilakukan di dunia industri melalui praktek kerja industri di perusahaan-perusahaan yang relevan.

    Lulusannya telah tersebar di berbagai perguruan tinggi dan Dunia Usaha/Dunia Industri. Kesempatan untuk melanjutkan studi dan bekerja sangat terbuka luas bagi lulusannya. Jalur PMDK tersedia bagi lulusan yang berprestasi baik PN maupun Swasta. Bagi siswa yang ingin bekerja, penempatannya didukung oleh Disnaker melalui Bursa Kerja Khusus (BKK) sesuai dengan kualifikasi yang di persyaratkan oleh perusahaa, serta siswa dapat berwirausaha sesuai dengan kompetensi keahlian masing-masing.</p>

</div>
<br>
  </section>

              <!-- Kontak -->
              <section class="Kontak" id="saran">

                <div class="container " >
                    <div class="row pt-4 mb-4 justify-content-center ">
                      <div class="col text-center">
                          <h2>Kirim Masukan, kritik, ataupun saran </h2>
                          <hr class="divider my-4" />
                      </div>
                    </div>

                    <div class="row justify-content-center">
                      <div class="col-lg-4 text-center">

                        <div class="card border-success mb-3" >
                        <div class="card-body text-success">
                          <h5 class="card-title">Hubungi Kami</h5>
                        </div>
                        </div>

                        <ul class="list-group">
                          <li class="list-group-item"><h1>Kantor Kita</h1></li>
                          <li class="list-group-item">Jalan Batusari No. C15</li>
                          <li class="list-group-item">Komplek Buana Citra Ciwastra, Buahbatu, Bandung</li>
                          <li class="list-group-item">0856 2251 196</li>
                        </ul>

                      </div>

                      <div class="col-lg-6 ">

                    <form method="POST" action="/sendSaran" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group mt-3">
                        <label for="nama ">Nama</label>
                        <input required type="text" name="nama" class="form-control footer-rounded" id="nama" placeholder="Masukkan nama anda disini">
                      </div>
                      <div class="form-group">
                        <label for="alamat">Email atau nomor telepon</label>
                        <input required type="text" name="contact" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="alamat">Kritik atau Saran</label>
                        <textarea name="saran" id="curhatan" class="form-control footer-rounded"></textarea>
                      </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-outline-success footer-rounded" onclick="return confirm('Apakah anda yakin ingin mengirim saran?')">Kirim</button>
                      </div>
                    </form>

                      </div>
                    </div>

                </div>
              </section>
            <!-- End Kontak

        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © {{ \Carbon\Carbon::now()->year }} I-Blast</div></div>
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
