@extends('layouts.app')

@section('content')
    <!-- link CSS -->
    <link href="{{ asset('css/seeTemplate.css') }}" rel="stylesheet">

    <title>Template</title>
  <body>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if (session('danger'))
<script>
        swal({
            icon: 'danger',
            title: 'Maaf anda tidak mempunyai akses untuk fitur ini!',
        });
</script>
@endif
    <!-- Carouselnya -->
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="2000">
            <div class="overlay-image" id="carou1"><img src="{{ asset('images/blast.jpg') }}" ></div>
                <div class="carousel-caption  d-md-block">
                    <h5>Blast Template</h5>
                    <p>Template default yang bertemakan warna merah yang simple dan responsive. cocok untuk email yang digunakan untuk iklan atau marketing.</p>
                    <a href="/email/create" class="btn btn-success btn-md active" role="button" aria-pressed="true">Gunakan Template</a>
                </div>
            </div>
            <div class="carousel-item" data-interval="5000">
                <div class="overlay-image" id="carou2"><img src="{{ asset('images/sky.jpg') }}" ></div>
                <div class="carousel-caption  d-md-block">
                    <h5>Sky</h5>
                    <p>SKY, Template yang bertemakan warna langit yaitu biru dan putih. Tampilan sky template terlihat simple namun responsive. cocok untuk email yang digunakan untuk tanda terima kasih.</p>
                    <a href="/email/create" class="btn btn-success btn-md active" role="button" aria-pressed="true">Gunakan Template</a>
                </div>
            </div>
            <div class="carousel-item" data-interval="1500">
                <div class="overlay-image" id="carou3"></div>
                <div class="carousel-caption  d-md-block">
                    <h5>Coming Soon</h5>
                    <p>Lorem tur adipisicing elit. Labore facere esse consectetur nulla nesciunt quaerat tenetur error maxime explicabo necessitatibus ab quam sint sapiente, exercitationem omnis, enim beatae animi quos.</p>
                    <a href="/email/create" class="btn btn-success btn-md active" role="button" aria-pressed="true">Gunakan Template</a>
                </div>
            </div>
        </div>
        <a href="#myCarousel" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="sr-only">Sebelumnya</span>
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a href="#myCarousel" class="carousel-control-next" role="button" data-slide="next">
            <span class="sr-only">Sebelumnya</span>
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>
    <center><h1 class="mt-5">Blast Template</h1></center>
    <center><img src="{{ asset('images/blast.jpg') }}" alt="" width="700" class="mt-3"></center>
    <center><a href="/email/create" class="btn btn-primary mt-2">Try</a></center>

    <hr>

    <center><h1 class="mt-5">Sky Template</h1></center>
    <center><img src="{{ asset('images/sky.jpg') }}" alt="" width="700" class="mt-3"></center>
    <center><a href="/email/create" class="btn btn-primary mt-2">Try</a></center>
  </body>
@endsection
