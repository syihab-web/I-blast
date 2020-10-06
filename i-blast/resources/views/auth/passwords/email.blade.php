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
<link rel="icon" href="{{ asset('company/logo.png') }}">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/simple-sidebar.css') }}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
