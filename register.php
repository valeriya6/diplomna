<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Register</title>
    <meta name="description" content="" lang="en-EN">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="cleartype" content="on">
    <meta http-equiv="imagetoolbar" content="no" />
	
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

    <script type="text/javascript" src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

	<link  href='css/font-awesome.css'  rel="stylesheet" />
    <link  href='css/main.css'  rel="stylesheet" />

	<script type="text/javascript" src="js/main.js"></script>
</head>

<body>
	
		
	<div class='beforeHeader'>
		
		<!--
		<div class='yellowLine'>
		
			<div class="topContainer">
				<div id='topLogin'><a href="#">SIGN IN</a> | <a href="#">REGISTER</a></div>
				<div id='topShip'>
				
					<ul  class='countryContainer'>
					
						
						<li><a href='javascript:void(0)'><img src="img/flag.png" /></a></li>
						<li><a href='javascript:void(0)'><img src="img/flag.png" /></a></li>
						<li  class='active'><a href='javascript:void(0)'><img src="img/flag.png" /></a></li>
						
					</ul>
				</div>
			</div>
		</div>-->
		
		
		<?php require_once('navigation.php') ?>
		
		<header class='pageRegister'></header>
	</div>
	
	
	
	<img class='shadow' src='img/shadow.png'>
	
	
	
	<div class="loginCont">
		
		<form class="userInfo">
		
		
		<h2 class="loginTitle">Register</h2>
		
			<label for="E-mail">E-mail:</label><input  type="email" name="email">
			<label for="Retype e-mail">Retype e-mail:</label><input  type="email" name="email2">
			
			<label for="fname">First name:</label><input  type="text" name="uname">

		<h3>Password</h3>

			<label for="password">Password:</label><input  type="password" name="password">
			<label for="password2">Confirm password:</label><input  type="password" name="password2">

			<div class="button">
				
				<input id="regBtn" type="button" value="Register">
			
			</div>
			<a href="login.php" class="alreadyReg">Already registered</a>
		</form>
	</div>
	
	
	
	
	
	
	<img class='shadow ' src='img/shadow.png'>
	
	<?php require_once('footer.php') ?>
    
    
    <script>
    	$(document).ready(function(){
    		
    		$('.tabs ul.controls li a').click(function(e){
    			
    			e.preventDefault();
    			
    			$('.tabs ul.controls li').removeClass('active');
    			$(this).parent().addClass('active');
    			
    			$('.tabs .tab').hide();
    			$($(this).attr('href')).show();
    			
    		});
    		
    	});
    </script>
</body>
	
