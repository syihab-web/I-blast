<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Template Landing Page -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Font nya -->
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@700;900&display=swap" rel="stylesheet">

    <!-- Link Style CSS ku -->
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link href="{{ asset('css/landing-page.min.css') }}" rel="stylesheet">


    <title>Landing Page</title>
  </head>
  <body>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('status'))
    <script>
            swal({
                icon: 'info',
                title: 'Kritik Dan Saran Berhasil dikirim!',
            });
    </script>
    @endif
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
      <a class="navbar-brand" href="/"><img src="{{ asset('company/logo_2.png') }}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto" >
            <a class="nav-link active" href="/home">Home <span class="sr-only">(current)</span></a>
            @if(Auth::user() && Auth::user()->roles == '1')
            <a class="nav-link" href="/email/dashboard">Dashboard</a>
            @endif
            <a class="nav-link" href="/email/create">Send Email</a>
            <a class="nav-link" href="#about" >About</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">For <span> better </span> <br> EMAIL MARKETING</h1>
        <a href="/email/dashboard" class="btn btn-success tombol"> Gabung Sekarang</a>
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
              <img src="{{ asset('company/Email.png') }}" width="50%" class="float-left" alt="">
              <h4>Email Blast</h4>
              <p>Satu Klik, Untuk Banyak Tujuan</p>
            </div>
            <div class="col-lg">
              <img src="{{ asset('company/design.png') }}" width="50%" class="float-left"  alt="">
              <h4>Template Design</h4>
              <p>Pilih Desain Kesukaan Anda</p>
            </div>
            <div class="col-lg">
              <img src="{{ asset('company/security.png') }}" width="50%" class="float-left"  alt="">
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
          <img src="{{ asset('company/maincontent1.jpg') }}" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6">
          <h3>Tidak Perlu <span> Bingung </span> dengan Email Marketing </h3>
          <p>Anda hanya perlu fokus pada bisnis anda dan lakukan Email Blast dengan efisien </p>
          <a href="/email/create" class="btn btn-success tombol">Send Email now</a>
        </div>
      </div>

      <div class="row main-content">
        <div class="col-lg-6">
          <h3>Raih sukses anda bersama kami</h3>
          <p>Sekeras apapun berusaha, bila <b style="color: black;"> alat </b> yang anda gunakan salah.. Maka semuanya itu sia-sia </p>
          <a href="/email/create" class="btn btn-success tombol mb-4">Send Email now</a>
        </div>
        <div class="col-lg-6">
          <img src="{{ asset('company/maincontent2.jpg') }}" alt="" class="img-fluid">
        </div>
      </div>


      <!-- End Main Content -->

      <!-- Testimoni -->

        <section class="testimoni" id="about">
          <div class="row justify-content-center">
            <div class="">
              <h1>About Us</h1>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-lg-6 justify-content-center d-flex">
              <figure class="figure">
                <img src="{{ asset('company/Syihab.jpg') }}" class="figure-img img-fluid rounded-circle menonjol" alt="...">
                <h5>Syihab</h5>
                <p>Project Manager</p>
            </figure>
              <figure class="figure">
                <img src="{{ asset('company/ainani.jpg') }}" class="figure-img img-fluid rounded-circle menonjol" alt="...">
                <figcaption class="figure-caption">
                  <h5>Ainan</h5>
                  <p>Web Developer</p>
                </figcaption>
              </figure>
              <figure class="figure">
                <img src="{{ asset('company/syarif.jpg') }}" class="figure-img img-fluid rounded-circle menonjol" alt="...">
                <figcaption class="figure-caption">
                    <h5>Syarif</h5>
                    <p>Web Designer</p>
                  </figcaption>
            </figure>
              <figure class="figure">
                <img src="{{ asset('company/rahma.jpg') }}" class="figure-img img-fluid rounded-circle menonjol" alt="...">
                <figcaption class="figure-caption">
                    <h5>Rahma</h5>
                    <p>Sistem analis</p>
                  </figcaption>
            </figure>
            <figure class="figure">
                <img src="{{ asset('company/hilman.jpg') }}" class="figure-img img-fluid rounded-circle menonjol" alt="...">
                <figcaption class="figure-caption">
                    <h5>Hilman</h5>
                    <p>Front End Developer</p>
                  </figcaption>
            </figure>
            </div>
          </div>
          I-Blast dibuat oleh para peserta praktek kerja lapangan di PT INOVINDO Digital Media. Para peserta yang terlibat dalam project ini beranggotakan siswa dan siswi SMKN 4 BANDUNG. SMKN 4 BANDUNG adalah Sekolah Menengah Kejuruan yang memiliki kelompok bidang keahlian Ketenaga Listrikan, Audio Video, dan Teknik Komputer dan Informatika. Keberadaannya didukung oleh dunia usaha dan dunia industri, baik dalam pembelajaran maupun penyerapan lulusannya, salah satunya oleh PT Inovindo Digital Media. Pembelajaran teori dan praktek tidak hanya dilakukan di dalam kelas tetapi dilakukan di dunia industri melalui praktek kerja industri di perusahaan-perusahaan yang relevan.

          Lulusannya telah tersebar di berbagai perguruan tinggi dan Dunia Usaha/Dunia Industri. Kesempatan untuk melanjutkan studi dan bekerja sangat terbuka luas bagi lulusannya. Jalur PMDK tersedia bagi lulusan yang berprestasi baik PN maupun Swasta. Bagi siswa yang ingin bekerja, penempatannya didukung oleh Disnaker melalui Bursa Kerja Khusus (BKK) sesuai dengan kualifikasi yang di persyaratkan oleh perusahaa, serta siswa dapat berwirausaha sesuai dengan kompetensi keahlian masing-masing.

          <br><br><br><br><br><br>
        </section>

        <!-- Akhir Testimoni -->

      <!-- Call to Action -->
      <!-- Kontak -->
        <section class="Kontak" id="Kontak">

          <div class="container " >
              <div class="row pt-4 mb-4 justify-content-center ">
                <div class="col text-center">
                    <h2>Kirim Masukan, kritik, ataupun saran </h2>
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
                    <li class="list-group-item">Jl.Kliningan 06 Buah Batu</li>
                    <li class="list-group-item">Di Lengkong</li>
                    <li class="list-group-item">081320005968</li>
                  </ul>

                </div>

                <div class="col-lg-6 ">

              <form method="POST" action="/sendSaran" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-3">
                  <label for="nama ">Nama</label>
                  <input type="text" name="nama" class="form-control footer-rounded" id="nama" placeholder="Masukkan nama anda disini">
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
