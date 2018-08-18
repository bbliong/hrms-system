<?php
session_start();
if (!isset($_SESSION['username'])) {
		header("location:login.php");}
	if ($_SESSION['module'] == "adm" || $_SESSION['module'] == "H-p"){ 
		}else { header("location:index.php");}
include ("config/koneksi.php");
include ("config/gambar_nama.php");
include ("user_setting.php");
include ("departement_pop.php");
?>

<!DOCTYPE>
<html>
		<head>
		<title> HRMS System </title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="css/font-awesome.min.css"> 
		<link href="orgchart/orgchart.css" rel="stylesheet" type="text/css"/>
		<script src="js/jquery-1.11.3.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/tambahan.js"></script>
		<script type="text/javascript" src="orgchart/orgchart.js"></script>
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
		<?php //ini buat pesan berhasil add
		if (isset($_GET['pesan'])){
		if ($_GET['pesan'] == 'success'){
		echo "	 <div class='alert alert-success alert-dismissable' role='alert'>
		<button class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
		<strong>Success to add Departement</strong> </div>";}
		else  {
		echo "	<div class='alert alert-danger alert-dismissable' role='alert'>
		<button class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
		<strong>Failed to add Departement</strong></div>";}
		}
		?>
		<div class="container">
			<div class="row" style="margin-top:20px;">
			<a data-toggle="modal" data-target="#deptview" class="btn btn-info">Add Depertement</a>
				<ul id="tree-data" style="display:none">
						<li id="root">
							<?php //ambil boss
								$cek_bos = $konek -> query("select dept_name from mdl_tgdept_menu where grade='1'");
								if (isset($cek_bos)){
								$ambil = $cek_bos -> fetch_array();
								echo $ambil['dept_name'];}
							?>
							<ul>
								<?php //ambil boss
								$cek_bos = $konek -> query("select dept_name from mdl_tgdept_menu where grade='2'");
								if (isset($cek_bos)){
									while($ambil = $cek_bos -> fetch_array()){
										echo "<li id='node1'>". $ambil['dept_name'];
										$cek_bos2 = $konek -> query("select dept_name from mdl_tgdept_menu where grade='3' and upper_dept='".$ambil['dept_name']."'");
										if ($cek_bos2){
											echo "<ul>";
												while($ambil = $cek_bos2 -> fetch_array()){
												echo "<li id='node1'>". $ambil['dept_name']."</li>";
												}
											echo "</ul>";
											}
										echo "</li>";
									}
								}							
								?>
							</ul>
						</li>
				</ul>
			    <div id="tree-view"></div>	
			</div>
		</div>
		</div>
		</div>
</div>
</body>

<script>
//java script buat nav side 
 $("#menu-toggle").click( function (e){
  e.preventDefault();
  $("#wrapper").toggleClass("menuDisplayed");
  });
 //java script buat nav side 
//java script buat bagan 
	$(document).ready(function () {
	// create a tree
	$("#tree-data").jOrgChart({
		chartElement: $("#tree-view"), 
		nodeClicked: nodeClicked
	});
	// lighting a node in the selection
	function nodeClicked(node, type) {
		node = node || $(this);
		$('.jOrgChart .selected').removeClass('selected');
			node.addClass('selected');
		}
	});
//java script buat bagan 
</script>		
