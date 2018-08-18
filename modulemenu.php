<?php
if (isset($_SESSION['username'])){
switch ($cek5['module_cd']) {
	case "adm" :
		include("module_admin/admin.php");
		$_SESSION['module'] = $cek5['module_cd'];
		break;
	case "H-p" :
		include ("module_personal/H-personal.php");
		$_SESSION['module'] = $cek5['module_cd'];
		break;
	case "D-f" :
		include ("module_finance/D-finance.php");
		$_SESSION['module'] = $cek5['module_cd'];
		break;
	case "Emp" :
		include ("module_employee/O-employee.php");
		$_SESSION['module'] = $cek5['module_cd'];
		break;
}
}
else {
	if (isset($_SESSION['username'])){
	header("location:index.php"); }
	else {
		header("location:login.php");
	}
}
?>