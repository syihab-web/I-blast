<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Template Landing Page -->
    <link href="{{ asset('Landing-Page/vendor/fontawesome-free/css/all.min.css') }}">
    <link href="{{ asset('Landing-Page/vendor/simple-line-icons/css/simple-line-icons.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Font nya -->
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@700;900&display=swap" rel="stylesheet">
    
    <!-- Link Style CSS ku -->
    <link rel="stylesheet" href="{{ asset('Landing-Page/css/style.css') }}">
    <link href="{{ asset('Landing-Page/css/landing-page.min.css') }}" rel="stylesheet">

    <title>Landing Page</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">i-blast</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto" >
            <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="#">Pricing</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#" >About</a>
            <a class="nav-item btn btn-success tombol" href="/home" >Join Us</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">For <span> better </span> <br> EMAIL MARKETING</h1>
        <a href="/home" class="btn btn-success tombol"> Gabung Sekarang</a>
      </div>
    </div>
    <!-- End Jumbotron -->

    <!-- Container -->
    <div class="container">

      <!-- info panel -->
      <div class="row justify-content-center">
        <div class="col-10 info-panel">
          <div class="row">
            <div class="col-lg">
              <img src="{{ asset('Landing-Page/img/Email.png') }}" width="50%" class="float-left" alt="">
              <h4>Email Blast</h4>
              <p>Satu Klik, Untuk Banyak Tujuan</p>
            </div>
            <div class="col-lg">
              <img src="{{ asset('Landing-Page/img/design.png') }}" width="50%" class="float-left"  alt="">
              <h4>Tenplate Design</h4>
              <p>Pilih Desain Kesukaan Anda</p>
            </div>
            <div class="col-lg">
              <img src="{{ asset('Landing-Page/img/security.png') }}" width="50%" class="float-left"  alt="">
              <h4>Coming Soon</h4>
              <p>Tunggu di Versi Selanjutnya</p>
            </div>
          </div>
        </div>
      </div>
      <!-- akhir info panel -->


      <!-- Main Content -->

      <div class="row main-content">
        <div class="col-lg-6">
          <img src="{{ asset('Landing-Page/img/maincontent1.jpg') }}" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6">
          <h3>Tidak Perlu <span> Bingung </span> dengan Email Marketing </h3>
          <p>Anda hanya perlu fokus pada bisnis anda dan lakukan Email Blast dengan efisien </p>
          <a href="" class="btn btn-success tombol">Tombol ini belum tentu dipakai</a>
        </div>
      </div>

      <div class="row main-content">
        <div class="col-lg-6">
          <h3>Raih sukses anda bersama kami</h3>
          <p>Sekeras apapun berusaha, bila <b style="color: black;"> alat </b> yang anda gunakan salah.. Maka semuanya itu sia-sia </p>
          <a href="" class="btn btn-success tombol mb-4">Tombol ini belum tentu dipakai</a>
        </div>
        <div class="col-lg-6">
          <img src="{{ asset('Landing-Page/img/maincontent2.jpg') }}" alt="" class="img-fluid">
        </div>
      </div>


      <!-- End Main Content -->

      <!-- Testimoni -->

        <section class="testimoni">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <h5>Apkikasinya mudah digunakan dan juga simple. Enak dilihat dan juga menarik</h5>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-lg-6 justify-content-center d-flex">
              <figure class="figure">
                <img src="{{ asset('Landing-Page/img/img1.png') }}" class="figure-img img-fluid rounded-circle" alt="...">
              </figure>
              <figure class="figure">
                <img src="{{ asset('Landing-Page/img/img2.png') }}" class="figure-img img-fluid rounded-circle menonjol" alt="...">
                <figcaption class="figure-caption">
                  <h5>Ainan</h5>
                  <p>Web Developer</p>
                </figcaption>
              </figure>
              <figure class="figure">
                <img src="{{ asset('Landing-Page/img/img3.png') }}" class="figure-img img-fluid rounded-circle" alt="...">
              </figure>
            </div>
          </div>
        </section>

      <!-- Akhir Testimoni -->
      
      <!-- Call to Action -->
      <section class="call-to-action text-white text-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-xl-9 mx-auto">
              <h2 class="mb-4">For Better Email Marketing? Sign up now!</h2>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <div class="container">
                <a href="" class="btn btn-outline-light tombol" > Gabung Sekarang</a>
            </div>
            </div>
          </div>
        </div>
      </section>  

      <!-- Kontak --> 
        <section class="Kontak" id="Kontak">

          <div class="container mt-5" >
              <div class="row justify-content-center">
                <div class="col-lg-11 text-center">
                  
                  <div class="card border-success mb-3" >
                  <div class="card-body text-success">
                    <h5 class="card-title">Hubungi Kami</h5>
                  </div>
                  </div>
        
                  <ul class="list-group">
                    <li class="list-group-item"><h1>Kantor Kita</h1></li>
                    <li class="list-group-item">Jl.Kliningan 06 Buah Batu</li>
                    <li class="list-group-item">Di Lengkong</li>
                    <li class="list-group-item">081320005968</li>
                  </ul>
        
                </div>
        
              </div>
        
          </div>
        </section>
      <!-- End Kontak


      <!-- Footer -->
      <div class="row footer mt-5">
        <div class="col text-center">
          <p>2020 All Rights Reserved by i-blast</p>
        </div>
      </div>
      <!-- End Footer -->
        
    </div>
    <!-- End Container -->









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>