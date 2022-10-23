{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}





<!DOCTYPE html>

<html lang="en">



<head>

<style type="text/css">

	#background-image{

		background-color: lightgray;



	}

</style>

	<!-- META ============================================= -->

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="keywords" content="" />

	<meta name="author" content="" />

	<meta name="robots" content="" />



	<!-- DESCRIPTION -->

	<meta name="description" content="dashboard : web-fixes" />



	<!-- OG -->

	<meta property="og:title" content="dashboard : web-fixes" />

	<meta property="og:description" content="dashboard : web-fixes" />

	<meta property="og:image" content="" />

	<meta name="format-detection" content="telephone=no">



	<!-- FAVICONS ICON ============================================= -->

	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />

	<link rel="shortcut icon" type="image/x-icon" href="assets/images/wf.png" />



	<!-- PAGE TITLE HERE ============================================= -->

	<title>Dashboard : Web Fixes </title>



	<!-- MOBILE SPECIFIC ============================================= -->

	<meta name="viewport" content="width=device-width, initial-scale=1">



	<!--[if lt IE 9]>

	<script src="assets/js/html5shiv.min.js"></script>

	<script src="assets/js/respond.min.js"></script>

	<![endif]-->



	<!-- All PLUGINS CSS ============================================= -->

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/assets.css')}}">



	<!-- TYPOGRAPHY ============================================= -->

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/typography.css')}}">



	<!-- SHORTCODES ============================================= -->

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/shortcodes/shortcodes.css')}}">



	<!-- STYLESHEETS ============================================= -->

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">

	<link class="skin" rel="stylesheet" type="text/css" href="{{ asset('assets/css/color/color-1.css')}}">



</head>

<body id="bg">

<div class="page-wraper">

	<!-- <div id="loading-icon-bx"></div> -->

	<div class="account-form" id="background-image">

		<div class="account-head" style="background-image:url(assets/images/background/bg2.jpg);">



		</div>

		<div class="account-form-inner">

			<div class="account-container">

				<div class="heading-bx left">

					<a href="index.html"><img src="assets/images/logo.png" alt=""></a>

					<h2 >Sign Up <span>Now</span></h2>

					<p>Login Your Account <a href="{{ route('login') }}">Click here</a></p>

				</div>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif				<div>







				</div>

				<form class="contact-bx" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">

@csrf

					<div class="row placeani">

						<div class="col-lg-12">

							<div class="form-group">

								<div class="input-group">

									<input name="name" type="text"  class="form-control" value="" placeholder="Your Name" required="">

								</div>



							</div>

						</div>

						<div class="row placeani">

						<div class="col-lg-12">

							<div class="form-group">

								<div class="input-group">

									<input name="username" type="text"  class="form-control" value="" placeholder="Your UserName" required="">

								</div>



							</div>

						</div>

						<div class="col-lg-12">

							<div class="form-group">

								<div class="input-group">



									<input name="phone" type="text"  class="form-control" value="" placeholder="Your Phone Number" required="">

								</div>



							</div>

						</div>

						<div class="col-lg-12">

							<div class="form-group">

								<div class="input-group">



									<input name="email" type="email"  class="form-control" value="" placeholder="Your Email Address" required="">

								</div>



							</div>

						</div>

						<div class="col-lg-12">

							<div class="form-group">

								<div class="input-group">

									<input name="password" type="password" class="form-control"  value="" placeholder="Your Password" required="">

								</div>



							</div>

						</div>
                        <div class="col-lg-12">

							<div class="form-group">

								<div class="input-group">

									<input name="password_confirmation" type="password" class="form-control"  value="" placeholder="Your Password" required="">

								</div>



							</div>

						</div>

						<div class="col-lg-12">

							<div class="form-group">

								<span>Profile</span>

								<div class="input-group">

									<input name="profile" type="file" class="form-control"  value=""  required="">

								</div>



							</div>

						</div>

						<div class="col-lg-12 m-b30">

							<button name="submit" type="submit" value="Submit" class="btn button-md">Sign Up</button>

						</div>

						<!-- <div class="col-lg-12">

							<h6>Sign Up with Social media</h6>

							<div class="d-flex">

								<a class="btn flex-fill m-r5 facebook" href="#"><i class="fa fa-facebook"></i>Facebook</a>

								<a class="btn flex-fill m-l5 google-plus" href="#"><i class="fa fa-google-plus"></i>Google Plus</a>

							</div>

						</div> -->

					</div>

				</form>

			</div>

		</div>

	</div>

</div>

<!-- External JavaScripts -->

<script src="{{ asset('assets/js/jquery.min.js')}}"></script>

<script src="{{ asset('assets/vendors/bootstrap/js/popper.min.js')}}"></script>

<script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>

<script src="{{ asset('assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script>

<script src="{{ asset('assets/vendors/magnific-popup/magnific-popup.js')}}"></script>

<script src="{{ asset('assets/vendors/counter/waypoints-min.js')}}"></script>

<script src="{{ asset('assets/vendors/counter/counterup.min.js')}}"></script>

<script src="{{ asset('assets/vendors/imagesloaded/imagesloaded.js')}}"></script>

<script src="{{ asset('assets/vendors/masonry/masonry.js')}}"></script>

<script src="{{ asset('assets/vendors/masonry/filter.js')}}"></script>

<script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.js')}}"></script>

<script src="{{ asset('assets/js/functions.js')}}"></script>

<script src="{{ asset('assets/js/contact.js')}}"></script>

<script src="{{ asset('assets/vendors/switcher/switcher.js')}}"></script>

</body>



</html>


