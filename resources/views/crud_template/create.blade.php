@extends('layouts.app')

@section('title', 'Tambahkan Template')

@section('content')


<div class="container bga">
    <h3>Tambahkan Template</h3>

    <hr><br>
        <form action="/template/store" method="POST" enctype="multipart/form-data" class="mt-4 bga">
            @csrf
            <div class="form-group">
                <label for="title"><b>judul</b></label>
                <input name="title" autocomplete="off" type="text" id="title" class="form-control bg" placeholder="Tulis Judul Disini.." value="{{ old('judul') }}">

                @if($errors->has('title'))
                    <div class="text-danger">
                        {{ $errors->first('title')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="thumbnail"><b>Foto </b><br><small>Maksimal ukuran file adalah 10 MB</small></label>
                <input name="image" type="file" id="thumbnail" accept=".png, .jpg, .jpeg" class="form-control-file bg" value="{{ old('foto') }}">

                @if($errors->has('image'))
                    <div class="text-danger">
                        {{ $errors->first('image')}}
                    </div>
                @endif
            </div>
            <label for="">Kode</label>

            <textarea name="code" id="" class="form-control bg" cols="50" rows="10">{{ old('konten') }}</textarea>

            @if($errors->has('code'))
                <div class="text-danger">
                    {{ $errors->first('code')}}
                </div>
            @endif

            <button class="btn btn-success btn-block mt-3">Tambahkan!</button>
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
