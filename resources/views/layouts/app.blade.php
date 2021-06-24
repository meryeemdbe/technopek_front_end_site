<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/app.css  " rel="stylesheet">


    <!-- ------------------------------ tEMPALTE dESIGN  ----------------------------- -->


    <!-- jQuery -->
    <script src="/js/jquery-2.0.0.min.js" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" />

    <!-- Font awesome 5 -->
    <link href=" {{asset('fonts/fontawesome/css/all.min.css')}}" type="text/css" rel="stylesheet">

    <!-- custom style -->
    <link href="{{asset('css/ui.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet" media="only screen and (max-width: 1200px)" />

    <!-- custom javascript -->
    <script src="/js/script.js" type="text/javascript"></script>

    <script type="text/javascript">
        /// some script

        // jquery ready start
        $(document).ready(function() {
            // jQuery code

        });
        // jquery end
    </script>

    <!-- ------------------------------ END tEMPALTE dESIGN  ----------------------------- -->

</head>

<body class="body1" > 
    <div id="app">
        <header class="section-header">
        <nav class="navbar navbar-dark navbar-expand p-0 bg-primary">
<div class="container">
    <!-- Additional items -->
    <ul class="navbar-nav d-none d-md-flex mr-auto">
		<li class="nav-item"><a class="nav-link" href="#"></a></li>
		
    </ul>
    <ul class="navbar-nav">
	
		<li class="nav-item dropdown">
		 	<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> {{ __('Language') }}  </a>
		    <ul class="dropdown-menu dropdown-menu-right" style="max-width: 100px;">
				<li><a class="dropdown-item" href="{{route(Route::currentRouteName(),'fr') }}"> {{ __('Frensh') }}  </a></li>
                <li><a class="dropdown-item" href="{{route(Route::currentRouteName(),'en') }}"> {{ __('English') }}  </a></li>
                
		    </ul>
		</li>
	</ul> <!-- list-inline //  -->
  </div> <!-- navbar-collapse .// -->
</div> <!-- container //  -->
</nav> <!-- header-top-light.// -->

            <section class="header-main border-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-sm-4 col-12">
                            <a href="{{route('home')}}" class="brand-wrap">
                                <img class="logo" src="../images/Technopek.png">
                            </a> <!-- brand-wrap.// -->
                        </div>
                        <div class="col-lg-4 col-xl-5 col-sm-8 col-12">
                            <form action="#" class="search">
                                <div class="input-group w-100">
                                    <input type="text" class="form-control" style="width:55%;" placeholder="{{ __('Search') }} ">
                                    <select class="custom-select" name="category_name">
                                        <option value="">{{ __('All type') }} </option>
                                        <option value="codex">Special</option>  
                                        <option value="comments">Only best</option>
                                        <option value="content">Latest</option>
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form> <!-- search-wrap .end// -->
                        </div> <!-- col.// -->
                        <div class="col-lg-5 col-xl-4 col-sm-12">
                            <div class="widgets-wrap float-md-right">
                               
                                @guest
                                @if (Route::has('login'))
                                <div class="widget-header dropdown">
                                    <a href="#" data-toggle="dropdown" data-offset="20,10">
                                        <div class="icontext">
                                            <div class="icon">
                                                <i class="icon-sm rounded-circle border fa fa-user"></i>
                                            </div>
                                            <div class="text">
                                                <small class="text-muted"> {{ __('Sign in | Join') }} </small>
                                                <div> {{ __('My account') }} <i class="fa fa-caret-down"></i> </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <form class="px-4 py-3" method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label>Email address</label>
                                                <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label> {{ __('Password') }}</label>
                                                <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-primary">{{ __('Sign in') }}</button>
                                        </form>
                                        <hr class="dropdown-divider">
                                        <a class="dropdown-item" href="{{ route('register') }}">{{ __('Have an account? Sign up') }}</a>
                                       
                                        @if (Route::has('password.request'))
                                        <a class="dropdown-item" href="{{ route('password.request' ) }}"> {{ __('Forgot Your Password?') }} </a>
                                        @endif
                                    </div> <!--  dropdown-menu .// -->
                                </div> <!-- widget-header .// -->
                                @endif


                                @else
                                <div class="widget-header dropdown">
                                    <a href="#" data-toggle="dropdown" data-offset="20,10">
                                        <div class="icontext">
                                            <div class="icon">
                                                <i class="icon-sm rounded-circle border fa fa-user"></i>
                                            </div>
                                            <div class="text">
                                                <div> {{ Auth::user()->name }}  </div>
                                                <small class="text-muted">My account <i class="fa fa-caret-down"></i> </small>
                                              
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                    @endguest


                                </div> <!-- widgets-wrap.// -->
                            </div> <!-- col.// -->
                        </div> <!-- row.// -->
                    </div> <!-- container.// -->
            </section> <!-- header-main .// -->

           
        </header>
        <!-- section-header.// -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
@include('layouts.footer')
</body>

</html>