@extends('layouts.app')

@section('content')
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('fontawesome/js/fontawesome.min.js') }}" defer></script>
<script src="{{ asset('fontawesome/js/all.js') }}" defer></script>
<script src="{{ asset('fontawesome/js/solid.js') }}" defer></script>
<script src="{{ asset('fontawesome/js/brands.js') }}" defer></script>
<script src="{{ asset('fontawesome/js/regular.js') }}" defer></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('fontawesome/all.css') }}">
<link rel="stylesheet" href="{{ asset('fontawesome/solid.css') }}">
<link rel="stylesheet" href="{{ asset('fontawesome/brands.css') }}">
<link rel="stylesheet" href="{{ asset('fontawesome/regular.css') }}">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/simple-sidebar.css') }}">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Update Profile
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('profile.update') }}">
                        @method('patch')
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" autocomplete="email" readonly>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ route('user.password.edit') }}">Ganti Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('.form-checkbox').click(function(){
			if($(this).is(':checked')){
				$('.form-control').attr('type','text');
			}else{
				$('.form-control').attr('type','password');
			}
		});
	});
</script>
@endsection