@extends('layouts.app')

@section('title', 'Edit Artikel')

@section('content')


<div class="container">
        <form action="/proses_buatArtikel/{{ $edit->id }}" method="POST" enctype="multipart/form-data" class="mt-4">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title"><b>Title</b></label>
                <input name="judul" type="text" id="title" class="form-control bg" placeholder="Tulis Judul Disini.." value="{{ $edit->judul }}">

                @if($errors->has('judul'))
                    <div class="text-danger">
                        {{ $errors->first('judul')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="thumbnail"><b>Thumbnail</b><br><small>Maksimal ukuran file adalah 10 MB</small></label>
                <input name="foto" type="file" id="thumbnail" class="form-control-file bg">

                @if($errors->has('foto'))
                    <div class="text-danger">
                        {{ $errors->first('foto')}}
                    </div>
                @endif
            </div>
            <textarea name="konten" id="konten" class="form-control bg" cols="50" rows="10" >{!! $edit->konten !!}</textarea>

            @if($errors->has('konten'))
                <div class="text-danger">
                    {{ $errors->first('konten')}}
                </div>
            @endif

            {{-- Hidden Inputs --}}
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

            <button class="btn btn-success btn-block mt-3">Ubah!</button>
        </form>
    </div>
    <!-- CKEditor -->
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script>
    var konten = document.getElementById("konten");
        CKEDITOR.replace(konten,{
        language:'en-gb'
    });
    CKEDITOR.config.allowedContent = true;
    </script>

@endsection
