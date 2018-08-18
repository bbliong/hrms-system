<?php
session_start();
if (!isset($_SESSION['username'])) {
		header("location:login.php");
}
include ("config/koneksi.php");
include ("config/gambar_nama.php");
include ("user_setting.php");
?>


<!DOCTYPE>
<html>
		<head>
			<title> HRMS System </title>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
			<link rel="stylesheet" type="text/css" href="css/style.css">
			<link rel="stylesheet" type="text/css" href="css/datepicker.css" media="screen">
			<script src="js/jquery-1.11.3.js"></script>
			<script src="js/bootstrap.js"></script>
			<script src="js/tambahan.js"></script>
			<script src="js/bootstrap-datepicker.js"></script>
			<script src="js/bootstrap-datepicker_ja.js" charset="utf-8"></script>
			<meta name="viewport" content="width=device-width, initial-scale=1">
		</head>
<body style="background-color : #f5f5f5;">
<div id="wrapper">
		<?php include("sidenavmenu.php");?>
		<div id="main-content">
		<div  class="container-fluid main" >
					<nav  class="nav-top">
							<a href="config/logout.php" class="btn btn-danger button-logout" >LOG OUT</a>
							<h5 class="welcome"> <?php
								if ( $_SESSION['module'] == "adm" || $_SESSION['module'] == "H-p"){ popup();} echo "Welcome back,";name();?>
							</h5>	
					</nav>
				<?php  include("config/pesan.php");?>
				<?php if(isset($_GET['module']) ) {
						switch ($_GET['module']) {
							case "employee" :
							include("employee/add_employee.php");	
							break ;}
							}		
					else {
					include("modulemenu.php"); } ?>

</div>
<script>
//java script buat nav side 
 $("#menu-toggle").click( function (e){
  e.preventDefault();
  $("#wrapper").toggleClass("menuDisplayed");
  });

	$(document).ready(function () {
	    $('.tanggal').datepicker({
	        format: "dd-mm-yyyy",
	        autoclose:true
	    });
	});
//java script buat nav side 
</script>
</body>
</html>