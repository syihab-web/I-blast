@extends('layouts.app')

@section('title', 'Buat Pengumuman')

@section('content')

<style>
    .progress { position:relative; width:100%; border: 1px solid #7F98B2; padding: 1px; border-radius: 3px; padding-top: 1%; }
    .bar { background-color: #B4F5B4; width:0%; height:25px; border-radius: 3px; }
    .percent { position:absolute; display:inline-block; top:7px; left:48%; color: #7F98B2;}
    #myProgress {
  width: 100%;
  background-color: #ddd;
}

#myBar {
  width: 10%;
  height: 30px;
  background-color: #4CAF50;
  text-align: center;
  line-height: 30px;
  color: white;
}
</style>

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
<h2>Buat Pengumuman</h2>
<hr>
            <form action="/pengumuman/store" method="POST">
               @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">judul pengumuman</label>
                    <input type="text" required autocomplete="off" name="judul" class="form-control bg" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter your name or email">
                </div>
                <div class="form-group">
                    <label for="pesan">Isi Pengumuman</label>
                    <textarea id="pesan" class="bg" name="isi" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <input type="hidden" value="{{ Auth::user()->id }}" required name="user_id" class="form-control bg" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="subject">
                </div>
               <input onclick="send()" type="submit" class="btn btn-success" value="submit" id="submit" name="submit">
            </form>
            <script>

            </script>
        <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
        <script>
        var konten = document.getElementById("pesan");
            CKEDITOR.replace(pesan,{
            language:'en-gb'
        });
        CKEDITOR.config.allowedContent = true;
        </script>
        <script src="{{ asset('js/progress.js') }}" defer></script>
        {{-- <script>
            $( 'form' ).submit(function ( e ) {
            var data, xhr;

            data = new FormData();

            xhr = new XMLHttpRequest();

            xhr.open( 'POST', 'http://127.0.0.1:8081/', true );
            xhr.onreadystatechange = function ( response ) {};
            xhr.send( data );

            e.preventDefault();
        });
        </script> --}}
            @endsection
