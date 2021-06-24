@extends('layouts.app')

@section('content')

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">

<!-- ============================ COMPONENT REGISTER   ================================= -->
	<div class="card mx-auto" style="max-width:520px; margin-top:40px;">
      <article class="card-body">
		<header class="mb-4"><h4 class="card-title">{{ __('Sign up') }} </h4></header>
                    <form method="POST" action="{{ route('register') }}">
                    <!-- <form method="POST" action="{{ route('register',app()->getLocale()) }}"> -->
                        @csrf
                        <div class="form-row">
                            <div class="col form-group">
                                <label>  {{ __('Name') }} </label>
                                <input type="text" placeholder="" id="name"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div> 
                        </div> <!-- form-row end.// -->

                        <div class="form-group">
                            <label>{{ __('Email') }} </label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            <small class="form-text text-muted">{{ __('We\'ll never share your email with anyone else.') }} </small>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div> <!-- form-group end.// -->
                      
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>{{ __('Create password') }} </label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            
                                @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div> <!-- form-group end.// --> 
                            <div class="form-group col-md-6">
                                <label>{{ __('Repeat password') }} </label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div> <!-- form-group end.// -->  
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">  {{ __('Register') }}  </button>
                        </div> <!-- form-group// -->      
                        <div class="form-group"> 
                            <label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" checked=""> <div class="custom-control-label"> {{ __('I am agree with') }} <a href="#"> {{ __('terms and contitions') }} </a>  </div> </label>
                        </div> <!-- form-group end.// -->         

                    </form>
                    </article><!-- card-body.// -->
    </div> <!-- card .// -->
    <p class="text-center mt-4"> {{ __('Have an account?') }} <a href="">{{ __('Log In') }}  </a></p>
    <br><br>
<!-- ============================ COMPONENT REGISTER  END.// ================================= -->


</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

@endsection
