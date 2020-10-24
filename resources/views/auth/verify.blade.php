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
<link rel="stylesheet" href="{{ asset('Sign-In/css/login.css') }}">


<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/simple-sidebar.css') }}">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8" id="verif">
            <div  class="mt-4">
                <div id="card-content">
                    <div id="card-title">
                        <h4 style="color: white">Verify Your Email Address</h4>
                        <hr style="color: ">
                        @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                        @endif

                        <h5 style="color: green">
                            {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        </h5>
                    </div>
                    <hr>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <center><button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.</center>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
