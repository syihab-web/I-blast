<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login i-blast</title>

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!-- Link Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- link CSS ku -->
    <link rel="stylesheet" href="{{ asset('Sign-In/css/login.css') }}">

    <!-- Link Font -->
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@700;900&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4">

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="form-container" method="POST" action="{{ route('password.email') }}">
                @csrf
                <h1>{{ __('Reset Password') }}</h1>

                <!-- Email Address -->
                <div class="form-group">
                  <label for="email"class="tulisan-biasa" >{{ __('E-Mail Address') }}</label>
                  <input id="email" type="email" class="inputan @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  required autocomplete="email" autofocus>

                  @error('email')
                    <span class="invalid-feedback" role-"alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror

                </div>
                <!-- Ahkir Email Address -->

                <div class="col-lg-12 col-xs-12 col-md-12 text-center">
                    <div id="submit">
                    <button type="submit" class="btn btn-outline-success container">{{ __('Kirim Password Reset Link') }}</button>
                    </div>
                </div>

                  </div>

                </div>


              </form>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
        </div>
    </div>

    <!-- JS Boostrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- Fontawesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

    <!-- JS Untuk Show Password -->
    <script type="text/javascript">
      $(document).ready(function(){
        $('.form-checkbox').click(function(){
          if($(this).is(':checked')){
            $('#password').attr('type','text');
          }else{
            $('#password').attr('type','password');
          }
        });
      });
    </script>

</body>
</html>
