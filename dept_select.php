<?php
include("config/koneksi.php");
/*
if (isset($_POST['dept_name'])) {
	$dept_name = $_POST['dept_name'];
		$query = "select grade from mdl_tgdept_menu where dept_name='$dept_name'";
		$query = $konek -> query($query);
		$grade = $query -> fetch_array();
		$grade = $grade['grade'];
		switch ($grade){
			case 1 :
			echo "<input type='hidden' value='2' placeholder='2'>";
			break;
			case 2 :
			echo "<input type='hidden' value='3' placeholder='3'>";
			break;
		}
}
*/

if (isset($_POST['submit'])){

$date 		= getdate();
$day 		= date('d');
$month 		= date('m');
$year 		= $date['year'];
$hours 		= $date['hours'];
$minute 	= $date['minutes'];
$second 	= $date['seconds'];
$crt_dt 	= "$year-$month-$day";
$upd_dt 	= $crt_dt;

$dept_code = $_POST['dept_code'];
$dept_name = $_POST['dept_name'];
$upper_dept = $_POST['upper_dept'];
$query = "select grade from mdl_tgdept_menu where dept_name='$upper_dept'";
$query = $konek -> query($query);
$grade = $query -> fetch_array();
$grade = $grade['grade'];
switch ($grade){
			case 1 :
			$grade = "2";
			break;
			case 2 :
			$grade = "3";
			break;
			default :
			$grade = "1";
			break;
		}
}

$query = "insert into mdl_tgdept_menu (dept, dept_name, upper_dept, grade, crt_dt, upd_dt) values (?,?,?,?,?,?)";
$query_prepare = $konek ->prepare($query);
$query_prepare -> bind_param ("ssssss", $dept_code, $dept_name, $upper_dept, $grade, $crt_dt, $upd_dt);
$query_execute = $query_prepare -> execute();


if ($query_execute) {
	header("location:departement.php?pesan=success");	
}
else {
	header("location:departement.php?pesan=failed");
}

?>