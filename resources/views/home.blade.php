@extends('layouts.app')

@section('content')




<!-- ========================= SECTION INTRO ========================= -->
<section class="section-intro padding-y-sm">
	<div class="container">

		<div class="intro-banner-wrap">
			<img src="images/banners/2.jpg" class="img-fluid rounded">
		</div>

	</div> <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->


<!-- ========================= SECTION FEATURE ========================= -->
<section class="section-content padding-y-sm">
	<div class="container">
		<article class="card card-body">


			<div class="row">
				<div class="col-md-4">
					<figure class="item-feature">
						<span class="text-primary"><i class="fa fa-2x fa-truck"></i></span>
						<figcaption class="pt-3">
							<h5 class="title">Fast delivery</h5>
							<p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore </p>
						</figcaption>
					</figure> <!-- iconbox // -->
				</div><!-- col // -->
				<div class="col-md-4">
					<figure class="item-feature">
						<span class="text-primary"><i class="fa fa-2x fa-landmark"></i></span>
						<figcaption class="pt-3">
							<h5 class="title">Creative Strategy</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							</p>
						</figcaption>
					</figure> <!-- iconbox // -->
				</div><!-- col // -->
				<div class="col-md-4">
					<figure class="item-feature">
						<span class="text-primary"><i class="fa fa-2x fa-lock"></i></span>
						<figcaption class="pt-3">
							<h5 class="title">High secured </h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							</p>
						</figcaption>
					</figure> <!-- iconbox // -->
				</div> <!-- col // -->
			</div>
		</article>

	</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION FEATURE END// ========================= -->


<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content">
	<div class="container">

<!-- ============================ COMPONENT BOOTSTRAP CARD WITH  IMG ================================= -->
<div class="row">
    <div class="col-md-4">
      <div class="card bg-dark">
        <img src="../images/banners/banner1.jpg" class="card-img opacity">
        <div class="card-img-overlay text-white">
          <h5 class="card-title">Apple Devices</h5>
          <p class="card-text">This is a wider card with a text below</p>
          <a href="#" class="btn btn-light">Discover</a>
        </div>
      </div> 
    </div> <!-- col.// -->
    <div class="col-md-4">
      <div class="card bg-dark">
        <img src="../images/banners/banner2.jpg" class="card-img opacity">
        <div class="card-img-overlay text-white">
          <h5 class="card-title">Headphones</h5>
          <p class="card-text">This is a wider card with text below</p>
          <a href="#" class="btn btn-light">Discover</a>
        </div>
      </div>
    </div> <!-- col.// -->
    <div class="col-md-4">
      <div class="card bg-dark">
        <img src="../images/banners/banner3.jpg" class="card-img opacity">
        <div class="card-img-overlay text-white">
          <h5 class="card-title">Video Game Consoles</h5>
          <p class="card-text">This is a wider card with text below</p>
          <a href="#" class="btn btn-light">Discover</a>
        </div>
      </div>
    </div> <!-- col.// -->
  </div> <!-- row.// -->
<!-- ============================ COMPONENTBOOTSTRAP CARD IMG  END .// ================================= -->

		<!-- ========================= SECTION  ========================= -->
		<section class="section-name bg padding-y-sm">
			<div class="container">
				<header class="section-heading">
					<h3 class="section-title">Our Brands</h3>
				</header><!-- sect-heading -->

				<div class="row">
					<div class="col-md-2 col-6">
						<figure class="box item-logo">
							<a href="#"><img src="images/logos/logo1.png"></a>
							<figcaption class="border-top pt-2">36 Products</figcaption>
						</figure> <!-- item-logo.// -->
					</div> <!-- col.// -->
					<div class="col-md-2  col-6">
						<figure class="box item-logo">
							<a href="#"><img src="images/logos/logo2.png"></a>
							<figcaption class="border-top pt-2">980 Products</figcaption>
						</figure> <!-- item-logo.// -->
					</div> <!-- col.// -->
					<div class="col-md-2  col-6">
						<figure class="box item-logo">
							<a href="#"><img src="images/logos/logo3.png"></a>
							<figcaption class="border-top pt-2">25 Products</figcaption>
						</figure> <!-- item-logo.// -->
					</div> <!-- col.// -->
					<div class="col-md-2  col-6">
						<figure class="box item-logo">
							<a href="#"><img src="images/logos/logo4.png"></a>
							<figcaption class="border-top pt-2">72 Products</figcaption>
						</figure> <!-- item-logo.// -->
					</div> <!-- col.// -->
					<div class="col-md-2  col-6">
						<figure class="box item-logo">
							<a href="#"><img src="images/logos/logo5.png"></a>
							<figcaption class="border-top pt-2">41 Products</figcaption>
						</figure> <!-- item-logo.// -->
					</div> <!-- col.// -->
					<div class="col-md-2  col-6">
						<figure class="box item-logo">
							<a href="#"><img src="images/logos/logo2.png"></a>
							<figcaption class="border-top pt-2">12 Products</figcaption>
						</figure> <!-- item-logo.// -->
					</div> <!-- col.// -->
				</div> <!-- row.// -->
			</div><!-- container // -->
		</section>
		<!-- ========================= SECTION  END// ========================= -->

		<!-- 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
-->
		@endsection