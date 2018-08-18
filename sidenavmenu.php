<?php
include("koneksi.php");
if (isset($_SESSION['username'])){
$id = $_SESSION['username'];
$cek1 = $konek -> query("select menu_id from mdl_tsautho where user_id='$id'");
$cek2 = $cek1 -> fetch_array();
$cek3 = $cek2['menu_id'];
$cek4 = $konek ->query("select module_cd from mdl_tsmenu inner join mdl_tsautho using(menu_id) where menu_id='$cek3'");
$cek5 = $cek4 -> fetch_array();
switch ($cek5['module_cd']) {
	case "adm" :
		include("module_admin/navadmin.php");
		include("module_admin/userautho.php");
		$_SESSION['module'] = $cek5['module_cd'];
		break;
	case "H-p" :
		include ("module_personal/navpersonal.php");
		include("module_admin/userautho.php");
		$_SESSION['module'] = $cek5['module_cd'];
		break;
	case "D-f" :
		include ("module_finance/navfinance.php");
		$_SESSION['module'] = $cek5['module_cd'];
		break;
	case "Emp" :
		include ("module_employee/navemployee.php");
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