@extends('layouts.app')

@section('title', 'Detail Email')

@section('content')
@if (session('status'))
<script>
        swal({
            icon: 'info',
            title: 'Email berhasil dikirim!',
        });
</script>
@endif

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if (session('danger'))
<script>
        swal({
            icon: 'danger',
            title: 'Maaf anda tidak mempunyai akses untuk fitur ini!',
        });
</script>
@endif
<h2>Detail Email</h2>
    <form action="{{ url('/email/sendAgain') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Id Email</label>
            <input type="text" value="{{ $email['id'] }}" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter your name or email">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Pengirim</label>
            <input name="from" type="text" value="{{ $email->from }}" class="form-control " id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter your name or email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tujuan</label>
            <input name="email" type="text" value="{{ $email->to }}" class="form-control " id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter your name or email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Subjek</label>
            <input name="subject" type="text" value="{{ $email['subject'] }}" class="form-control " id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter your name or email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Isi Pesan</label>
            <textarea name="pesan" id="pesan" cols="30" rows="10">
                {!! nl2br($email['pesan']) !!}
            </textarea>
        </div>

        <div class="form-group">
            <a href="/email" class="btn btn-primary">Back</a>
        </div>
    </form>
    <script>
        var i = 0;
        function move() {
          if (i == 0) {
            i = 1;
            var elem = document.getElementById("myBar");
            var width = 10;
            var id = setInterval(frame, 0);
            function frame() {
              if (width >= 100) {
                clearInterval(id);
                i = 0;
              } else {
                width++;
                elem.style.width = width + "%";
                elem.innerHTML = width  + "%";
              }
            }
          }
        }
        </script>

    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
        <script>
        var konten = document.getElementById("pesan");
            CKEDITOR.replace(pesan,{
            language:'en-gb'
        });
        CKEDITOR.config.allowedContent = true;
        </script>
@endsection
