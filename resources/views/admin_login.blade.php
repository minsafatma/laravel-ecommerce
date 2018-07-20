<!--
Author: minsa
Author URL: http://minsa.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Fashion Designer Login Form A Responsive Widget Template  ::minsa</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Designer Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<link rel="stylesheet" href='{{asset("backend/css/flexslider.css")}}' type="text/css" media="screen" /> <!-- Flexslider-CSS -->
<link href='{{asset("backend/css/font-awesome.css")}}' rel="stylesheet"><!-- Font-awesome-CSS --> 
<link href='{{asset("backend/css/style.css")}}' rel='stylesheet' type='text/css'/><!-- Stylesheet-CSS -->
<link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700" rel="stylesheet">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>	
</head>
<body>
	<h1>Fashion Designer Login</h1>
	<div class="main-agile">
		
		<div class="content-wthree">
			<div class="about-middle">
			<section class="slider">
			<div class="flexslider">
				<ul class="slides">
				  <li>
					<div class="banner-bottom-2">			  		
						<div class="about-midd-main">
							<img class="agile-img" src="" alt=" " class="img-responsive">
							<h4>minsa</h4>
							<p>Fashion Designer</p>
						</div>
						<p class="alert-danger">
						<?php
						$messege=Session::get('messege');
						if($messege){
							echo $messege;
							Session::put('messege',null);
						}

					?>
				</p>
						<div class="new-account-form">
							<h2 >Admin Login</h2>
								<form action="{{url('/admin-dashbord')}}" method="post">
									{{ csrf_field() }}
									<div class="inputs-w3ls">
										<p>Email</p>
										<i class="fa fa-envelope" aria-hidden="true"></i>
										<!-- yaha pe E capital hai email ka  -->
										<input type="email" class="admin_email" name="admin_Email" placeholder="" >
									</div>
									<div class="inputs-w3ls">
										<p>Password</p>
										<i class="fa fa-unlock-alt" aria-hidden="true"></i>
								<input type="password" class="admin_password" name="admin_Password" placeholde="">
									</div>
									<label class="anim">
										<input type="checkbox" class="checkbox">
										<span>Remember Me</span> 
										<a href="#">Forgot Password</a>
									</label> 
										<input type="submit" value="Login">  
								</form> 
						</div>
					</div>
					
				
		

		</div>
	</div>
	<div class="footer-w3l">
		<p class="agileinfo"> &copy; 2018 Fashion Designer Login Form. | Design by minsa</p>
	</div>
<script src='{{asset("backend/js/jquery.min.js")}}'></script>

	<!-- FlexSlider -->
				  <script defer src='{{asset("backend/js/jquery.flexslider.js")}}'></script>
				  <script type="text/javascript">
					$(function(){
					 
					});
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
		<!-- FlexSlider -->

</body>
</html>