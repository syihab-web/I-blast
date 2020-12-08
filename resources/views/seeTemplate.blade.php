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
                    <h5>Segera Datang</h5>
                    <p>Akan Datang dengan segera Fitur dan template baru.</p>
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
    </div><br><br>
    <center><h2>Bagaimana Cara Menggunakan Template</h2></center>
    <center>
        <table>
            <tr>
                <td>1. Salin source code template yang diinginkan pada halaman ini</td>
            </tr>
            <tr>
                <td>2. Lalu pergi ke halaman kirim email</td>
            </tr>
            <tr>
                <td>3. Klik Menu Tools pada textarea</td>
            </tr>
            <tr>
                <td>4. lalu pilih menu source code</td>
            </tr>
            <tr>
                <td>5. Tempel source code yang telah di salin tadi</td>
            </tr>

            <tr>
                <td>6. Lalu tinggal kalian edit datanya.</td>
            </tr>
        </table>
    </center>

    <hr class="bg">
@foreach ($template as $values)

    <div class="page-section">
    <center><h1 class="mt-5">{{ $values->title }}</h1></center>
    <center><img src="{{ asset($values->image) }}" alt="" width="700" class="mt-3"></center>
    <br>
    <center><h6>{{ \Carbon\Carbon::parse($values->updated_at)->diffForHumans() }}</h6></center>
    <br>
    <center>
        <figure>
            <textarea name="" cols="80" rows="10" id="pilih2" readonly>
                {!! $values->code !!}
            </textarea>
        </figure>
    </center>
    <center><button onclick="copy2()" class="btn btn-primary mt-2"><i class="fas fa-copy"></i> Copy</button></center>
    </div>
<br>
@endforeach

<table align="center">
    <tr>
        <td>
            {{ $template->links() }}
        </td>
    </tr>
</table>

    <hr class="bg">

    <script>
         function copy(){
        var content = document.getElementById('pilih1');
        content.select();
         document.execCommand('copy');
         }
    </script>
        <script type="text/javascript">
        function copy2(){
        var content = document.getElementById('pilih2');
        content.select();
         document.execCommand('copy');
         }
        </script>
  </body>
@endsection
