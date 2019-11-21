<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>Registration - CarkerID</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom Theme files -->
	<link href="{{url('/')}}/css/register.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="{{url('/')}}/css/aos.css">
	<link rel="stylesheet" href="{{url('/')}}/css/style.css">
	<link rel="stylesheet" href="{{url('/')}}/css/bootstrap.min.css">
	<!-- //Custom Theme files -->
	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
	<!-- //web font -->
</head>

<body>
	<!-- Header -->
	<header class="site-navbar py-1" role="banner">
		<div class="container">
			<div class="row align-items-center">

				<div class="col-6 col-xl-2">
					<h1 class="mb-0"><a href="{{ url('/home')}}" class="text-black h2 mb-0">Carker<strong>ID</strong></a></h1>
				</div>
				<div class="col-6 col-xl-2 text-right d-block">

					<div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

				</div>

			</div>
		</div>
	</header>
	<!-- akhir header-->
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Registration</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="{{url('/registerPost')}}" method="post">
					@csrf
					<input class="text" type="text" name="username" placeholder="Username" required="">
					<br>
					<input class="text" type="text" name="nama" placeholder="Nama" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="text" name="notelp" placeholder="NoTelp" required="">
					<br>
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="confirm" placeholder="Confirm Password" required="">
					<input type="hidden" name="akses" value="user">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="SIGNUP">
				</form>
				<p>Don't have an Account? <a href="{{url('/login')}}"> Login Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>

</html>