<?php
session_start();
if (!isset($_SESSION['username'])) {
		header("location:login.php");}
	if ($_SESSION['module'] == "adm" || $_SESSION['module'] == "H-p"){ 
		}else { header("location:index.php");}
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
		<script src="js/jquery-1.11.3.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/add_keluarga.js"></script>
		<script src="js/tambahan.js"></script>
		<script src="js/user_setting.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		</head>
<body style="background-color : #f5f5f5;">
<div id="wrapper">
		<?php include("sidenavmenu.php");?>
		<div id="main-content">
		<div  class="container-fluid main " style="margin:0px;padding:0px;" >
					<nav  class="nav-top">
							<a href="config/logout.php" class="btn btn-danger button-logout" >LOG OUT</a>
							<h5 class="welcome"> <?php
									if ($_SESSION['module'] == "adm"){ popup();} echo "Welcome back,";name();?></h5>	
					</nav>
				<?php 
					$_SESSION['validasi'] = "ada";
					if (isset($_GET['emp_no'])){
						include('employee/edit_employee.php');
					}
					else {
						include('employee/view.php');
					}

				?>


</div>
</body>

<script>
 $("#menu-toggle").click( function (e){
  e.preventDefault();
  $("#wrapper").toggleClass("menuDisplayed");
  });

</script>
</html>