<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login CarkerID</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{url('/')}}/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/css/main.css">
	<link rel="stylesheet" href="{{url('/')}}/css/aos.css">
	<link rel="stylesheet" href="{{url('/')}}/css/style.css">
	<link rel="stylesheet" href="{{url('/')}}/css/bootstrap.min.css">
	<!--===============================================================================================-->
</head>

<body>
	<!-- Header -->
	<header class="site-navbar py-1" role="banner">
		<div class="container">
			<div class="row align-items-center">

				<div class="col-6 col-xl-2">
					<h1 class="mb-0"><a href="{{ url('/home')}}" class="text-black h2 mb-0">Carker<strong>ID</strong></a></h1>
				</div>

				<div class="col-10 col-xl-10 d-none d-xl-block">
					<nav class="site-navigation text-right" role="navigation">
						<ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
							<li><a href="{{url('/register')}}"><span class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">+</span> Register</span></a></li>
						</ul>
					</nav>
				</div>

				<div class="col-6 col-xl-2 text-right d-block">
					<div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
				</div>
			</div>
		</div>
	</header>
	<!-- akhir header-->

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				@if ($message = Session::get('alert'))
				<div class="alert alert-warning alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>{{$message}}</strong>
				</div>
				@endif
				<form action="{{ url('/loginPost')}}" method="POST" class="login100-form validate-form flex-sb flex-w">
					@csrf
					<span class="login100-form-title p-b-32">
						Account Login
					</span>
					<span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate="Email is required">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate="Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt3">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="{{url('/')}}/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="{{url('/')}}/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="{{url('/')}}/vendor/bootstrap/js/popper.js"></script>
	<script src="{{url('/')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="{{url('/')}}/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="{{url('/')}}/vendor/daterangepicker/moment.min.js"></script>
	<script src="{{url('/')}}/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="{{url('/')}}/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="{{url('/')}}/js/main.js"></script>

</body>

</html>