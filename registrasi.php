<!DOCTYPE>
<?php
session_start();
if (isset($_SESSION['username'])) {
	header("location:index.php");
}
	else {
?>
<html>
	<head>
		<title> HRMS System </title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="bootstrap.js"></script>
		<script src="jquery-1.11.3.js"></script>
	</head>
<body>
	
		<div class="container-fluid">
				<nav class="navbar navbar-inverse navbar-fixed-top">
					<div class="navbar-header">
							<a hef="index.php" class="navbar-brand">HRMS System </a> 
					</div>
						<div class="button_basic_login">
							<a href="index.php" class="btn btn-success button-login">LOG OUT</a>
							<a href="logout.php" class="btn btn-danger button-regis">HOME</a>
						</div>
				</nav>
		</div>
			<form action="registrasi_proses.php" method="post"> 
			<div id="badan2">
			<div class="col-md-12"  >
							<h2 align="center"> Register </h2>
					<div class="input">
						<div class="form-group has-feedback">
							<input type="text" name="user_id" maxlength="7" class="form-control input-md transparent-input " placeholder="User ID">
							<span class="glyphicon glyphicon-user form-control-feedback white"></span> 
							<span class="form-control-feedback white">sadasdasdas</span></br>
						</div>
						 
						 <div class="form-group has-feedback">
							<input type="password" name="passwd" maxlength="7" class="form-control input-md transparent-input " placeholder="Password"><span class="glyphicon glyphicon-lock form-control-feedback white"></span></br>
						</div>
						 <div class="form-group has-feedback">
							<input type="password" name="passwd" maxlength="7" class="form-control input-md transparent-input " placeholder="Password"><span class="glyphicon glyphicon-lock form-control-feedback white"></span></br>
						</div>

						 
						<div class="form-group">
							<input type="submit" value="register" class="form-control submit" name="submit">
						</div>
					</div>
			</div>
			</div>
			</form>
			</div><!--tutup class col-md-4 col-md-offset-8 col col-sm-12 col-xs-12 badan -->
		</div> <!--tutup container-->
</body>
</html>
<?php
}
?>
