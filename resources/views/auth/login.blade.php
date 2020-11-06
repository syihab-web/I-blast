<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk i-blast</title>

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
              <form class="form-container" method="POST" action="{{ route('login') }}">
                @csrf
                <h1>Masuk</h1>

                <!-- Email Address -->
                <div class="form-group">
                  <label for="email"class="tulisan-biasa" >Alamat Email</label>
                  <input id="email" type="email" class="inputan @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  required autocomplete="email" autofocus autocomplete="off">

                  @error('email')
                    <span class="invalid-feedback" role-"alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror

                  <small id="emailHelp" class="form-text text-muted">Harap Masukkan E-Mail yang anda gunakan saat Registrasi</small>
                </div>
                <!-- Ahkir Email Address -->

                <!-- Password -->
                <div class="form-group">
                  <label for="password" class="tulisan-biasa">Sandi</label>
                  <input id="password"  type="password" class="inputan @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                  @error('password')
                    <span class="invalid-feedback" role-"alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror

                </div>

                <div class="custom-control custom-checkbox checkbox">
                  <input type="checkbox" class="custom-control-input form-checkbox" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1" style="color: #ACACAC;">Lihat Sandi</label>
                </div>

                <div class="custom-control custom-checkbox checkbox">
                  <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label class="custom-control-label" for="remember" style="color: #ACACAC;">Ingat Saya</label>
                </div>
                <!-- Akhir Password -->

                <div class="col-lg-12 col-xs-12 col-md-12 text-center">
                    <div id="submit">
                      <button type="submit" class="btn btn-outline-success container">{{ __('Masuk') }}</button>
                    </div>
                  </div>

                <div class="container"  id="emailHelp2" >
                  <div class="row justify-content-center">
                    <small  class="form-text text-muted">Atau</small>
                  </div>

                <!-- Pilihan Media Sosial -->

                  <div class="row justify-content-center" >

                    <div class="col-lg-8 col-xs-8 col-md-12 text-center">
                      <div class="" role="group" aria-label="Basic example">
                        <a href="{{ url('auth/google') }}" class="btn btn-outline-danger "><i class="fab fa-google"></i></a>
                      </div>
                    </div>
                <!--Akhir Pilihan Media Sosial -->



                    <div class="sign-in">
                      <small  class="form-text text-muted">Belum Punya Akun? <a href="{{ url('/register') }}" class="href">Registrasi</a>
                      </small>
                    </div>

                    <div class="sign-in">

                      @if (Route::has('password.request'))
                      <small>
                      <a href="{{ route('password.request') }}" class="href">{{ __('Lupa Password?') }}</a>
                      </small>
                      @endif

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
