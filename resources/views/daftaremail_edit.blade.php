@extends('layouts.app')

@section('title', 'Edit Daftar Email')

@section('content')
<html>
    <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg">
                    <div class="card-header">
                        Edit Daftar Email
                    </div>

                    <div class="card-body">
                    <form method="post" action="/daftaremail/update/{{ $daftaremail->id }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                                <div class="col-md-6">
                                    <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $daftaremail->email }}">
                                    @if($errors->has('email'))
                                        <div class="text-danger">
                                            {{ $errors->first('email')}}
                                        </div>
                                    @endif
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>
                                <div class="col-md-6">
                                    <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $daftaremail->nama }}">
                                        @if($errors->has('nama'))
                                            <div class="text-danger">
                                                {{ $errors->first('nama')}}
                                            </div>
                                        @endif
                                </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <input type="submit" class="btn btn-success" value="Simpan">
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
@endsection