<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register i-blast</title>

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!-- Link Bootstrasp -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- link CSS ku -->
    <link rel="stylesheet" href="{{ asset('Sign-In/css/sign-up.css') }}">

    <!-- Link Font -->
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@700;900&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4">
              <form method="POST" action="{{ route('register') }}" class="form-container">
                <h1>{{ __('Register') }}</h1>

                @csrf
                <!-- Name -->
                <div class="form-group">
                  <label for="name" class="tulisan-biasa" >{{ __('Name') }}</label>
                  <input id="name"  type="text" class="inputan @error('name') is-invalid @enderror"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                  @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror

                </div>
                <!-- Akhir Name -->

                <!-- Email Address -->
                <div class="form-group">
                  <label for="email"class="tulisan-biasa" >{{ __('E-Mail Address') }}</label>
                  <input id="email" type="email" class="inputan @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                  @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror

                </div>
                <!-- Akhir Email Address -->

                <!-- Password -->
                <div class="form-group">
                  <label for="password" class="tulisan-biasa">{{ __('Password') }}</label>
                  <input id="password" type="password" class="inputan show-password @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                  @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror

                </div>
                <!-- Akhir Password -->

                <!-- Confirm Password -->
                <div class="form-group">
                  <label for="password2" class="tulisan-biasa">{{ __('Konfirmasi Password') }}</label>
                  <input type="password" class="inputan show-password" name="password_confirmation" id="password2" required autocomplete="new-password">
                </div>

                <div class="custom-control custom-checkbox checkbox">
                  <input type="checkbox" class="custom-control-input form-checkbox" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1" style="color: #ACACAC;">Show Password</label>
                </div>
                <!-- Akhir Confirm Password -->

                <div class="container  id="emailHelp2" >
                  <div class="row justify-content-center">
                    <small  class="form-text text-muted">Atau</small>
                  </div>

                <!-- Pilihan Media Sosial -->

                  <div class="row justify-content-center" style="margin-top: 30px;">

                    <div class="col-lg-12 col-xs-12 col-md-12 text-center">
                      <div id="submit">
                        <button type="submit" class="btn btn-outline-success container">{{ __('Register') }}</button>
                      </div>
                    </div>

                    <div class="sign-in">
                      <small  class="form-text text-muted">Sudah Punya Akun? <a href="{{ url('/login') }}"  class="href">Sign-In</a></small>
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
            $('.show-password').attr('type','text');
          }else{
            $('.show-password').attr('type','password');
          }
        });
      });
    </script>
    <!-- Akhir JS Untuk Show Password -->

</body>
</html>
