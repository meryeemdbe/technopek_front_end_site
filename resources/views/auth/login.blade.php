@extends('layouts.app')

@section('content')

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-conten padding-y" style="min-height:84vh">

    <!-- ============================ COMPONENT LOGIN   ================================= -->
    <div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
        <div class="card-body">
            <h4 class="card-title mb-4"> {{ __('Sign in') }} </h4>

            <form method="POST" action="{{ route('login') }}">
            <!-- <form method="POST" action="{{ route('login',app()->getLocale()) }}"> -->
                @csrf
                <a href="#" class="btn btn-facebook btn-block mb-2"> <i class="fab fa-facebook-f"></i> &nbsp {{ __('Sign in with Facebook') }}</a>
                <a href="#" class="btn btn-google btn-block mb-4"> <i class="fab fa-google"></i> &nbsp {{ __('Sign in with Google') }}</a>
                <div class="form-group">
                    <input placeholder="{{ __('Email') }}" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div> <!-- form-group// -->

                <div class="form-group">
                    <input placeholder="{{ __('Password') }}" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div> <!-- form-group// -->

                <div class="form-group">
                    <a href="#" class="float-right"> {{ __('Forgot password?') }} </a>
                    <label class="float-left custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <div class="custom-control-label"> {{ __('Remember') }} </div>
                    </label>
                </div> <!-- form-group form-check .// -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> {{ __('Login') }} </button>
                    @if (Route::has('password.request'))
                    <!-- <a class="btn btn-link" href="{{ route('password.request',app()->getLocale()) }}"> -->
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div> <!-- form-group// -->
            </form>
        </div> <!-- card-body.// -->
    </div> <!-- card .// -->

    <p class="text-center mt-4">{{ __('Don\'t have an account?') }}  <a href="#">{{ __('Sign up') }}</a></p>
    <br><br>
    <!-- ============================ COMPONENT LOGIN  END.// ================================= -->


</section>
<!-- ========================= SECTION CONTENT END// ========================= -->



@endsection