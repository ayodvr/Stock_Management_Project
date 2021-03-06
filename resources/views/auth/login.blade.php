@extends('layouts.navless')
@section('content')
<div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card" style="margin-top: 50px">
              <div class="card-header card-header-auth">
                <h4>Login</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                    @csrf
                  <div class="form-group">
                    <label for="email">{{ __('E-Mail') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" tabindex="1" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">{{ __('Password') }}</label>
                      <div class="float-right">
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-small">
                        {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" tabindex="2" required autocomplete="current-password"
                    id="txtPassportNumber" onkeyup="EnableDisable(this)">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"  id="remember" {{ old('remember') ? 'checked' : '' }}>
                      <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" id="btnSubmit" class="btn btn-lg btn-block btn-info" tabindex="4" disabled="disabled">
                      {{ __('Login') }}
                    </button>
                  </div>
                </form>
                {{-- <div class="text-center mt-4 mb-3">
                  <div class="text-job text-muted">Login With Social</div>
                </div>
                <div class="row sm-gutters">
                  <div class="col-6">
                  <a href="{{route('login.facebook')}}" class="btn btn-block btn-social btn-facebook">
                      <span class="fab fa-facebook"></span> Facebook
                    </a>
                  </div>
                  <div class="col-6">
                  <a href="{{route('login.google')}}" class="btn btn-block btn-social btn-google">
                      <span class="fab fa-google"></span> Google
                    </a>
                  </div>
                </div> --}}
              </div>
              {{-- <div class="mt-5 text-muted text-center" style="margin-bottom:15px ">
                Don't have an account? <a href="/register">Create One</a>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script type="text/javascript">
    function EnableDisable(txtPassportNumber) {
        //Reference the Button.
        var btnSubmit = document.getElementById("btnSubmit");

        //Verify the TextBox value.
        if (txtPassportNumber.value.length > 5 ) {
            //Enable the TextBox when TextBox has value.
            btnSubmit.disabled = false;
        } else {
            //Disable the TextBox when TextBox is empty.
            btnSubmit.disabled = true;
        }
    };
</script>
@endsection
