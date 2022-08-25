<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<!-- Custom Theme files -->
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<link href="css/font-awesome.css" rel="stylesheet" />
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="login">
			<h1><a href="index.php">VNS Consulting </a></h1>
			<div class="login-bottom">
				<h2>Login</h2>
				<form method="post" action="include/login.php">
					<div class="col-md-12">
						<div class="login-mail">
							<input type="text" placeholder="Email" required="" name="email" />
							<i class="fa fa-envelope"></i>
						</div>
						<div class="login-mail">
							<input type="password" placeholder="Password" required="" name="password"/>
							<i class="fa fa-lock"></i>
						</div>
					</div>
					<div class="col-md-12 login-do">
						<label class="hvr-shutter-in-horizontal login-sub">
							<input type="submit" value="login" name="submit" />
						</label>

					</div>

					<div class="clearfix"></div>
				</form>
			</div>
		</div>
		<!---->
		<div class="copy-right">
			<p>
				&copy; 2016 Minimal. All Rights Reserved | Design by
			</p>
		</div>
		<!---->
		<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
	</body>
</html>
