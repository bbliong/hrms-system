<?php
include "config/koneksi.php";

if (isset($_POST['submit'])){

$username		 = $_POST['user_id_regis'];
$password 		 = $_POST['passwd_regis'];
$repassword 	 = $_POST['repasswd_regis'];
$query			 = "select cellular, emp_no, user_id, grade, obu, location from mdl_tgemp where user_id='$username'";
$cek 			 = $konek -> query($query);
$jumlah 		 = $cek -> num_rows;
		if ($jumlah > 0) { 
			$ambil = $cek -> fetch_array();
			$employee	 = $ambil['emp_no'];
			$telepon 	 = $ambil['cellular'];
			$object	 	 = $ambil['obu'];
			$location	 = $ambil['location'];
			$user_grade  = $ambil['grade'];}
		else {
			$error = "user id not found";
			header("location:login.php?error=$error#badan_super");}
		/* tanggal */

		$date 			= getdate();
		$day 			= $date['mday'];
		$month 			= $date['mon'];
		$year 			= $date['year'];
		$hours 			= $date['hours'];
		$minute 		= $date['minutes'];
		$second 		= $date['seconds'];
		$create_date	= "$year-$month-$day";
		$update_date 	= $create_date;
		$crt_upt 		= "Create";	

			/* tanggal */
			if (isset($username)) { // if 1
				if (empty($username && $password && $repassword)) { // if 2
					echo"maning";} 
				else {		// else 1
					if ($password == $repassword) { // if 3
						$cekdata = $konek -> query("select * from MDL_TSUSER where user_id='$username'");
						$jumuser = $cekdata -> num_rows; 
							if ($jumuser ==false) { // if 4

						   			$stmt = $konek -> prepare("insert into mdl_tsuser values (?,?,?,?,?,?,?,?,?,?)");
									$stmt -> bind_param("ssssssssss", $username, $password, $employee, $telepon, $user_grade, $object, $location, $create_date,$update_date	,$crt_upt);
									$masuk = $stmt -> execute();
									$stmt2 = $konek -> prepare("insert into mdl_tsautho values (?,?,?,?,?,?,?)");
									switch ($user_grade) {
										case "S" :
										$menu_id = "1";
										$menu_object = "1";
										$privilege = "1";
										$null = "";
										break;
										case "H" :
										$menu_id = "2";
										$menu_object = "2";
										$privilege = "2";
										$null = "";
										break;
										case "D" :
										$menu_id = "3";
										$menu_object = "3";
										$privilege = "3";
										$null = "";
										break;
										case "O" :
										$menu_id = "4";
										$menu_object = "4";
										$privilege = "4";
										$null = "";
										break;
									}
									$stmt2 -> bind_param("sssssss", $username, $menu_id, $menu_object, $null ,$null , $create_date, $update_date);
									$masuk2 = $stmt2 -> execute();

										if ($masuk && $masuk2) { //if 5
										/*session_start();
										$ambildata = $cekdata -> fetch_array();
										$_SESSION['username'] = $username;*/
										$success = " CONGRATULATION YOUR ACCOUNT HAVE BEEN CREATED.</BR> PLEASE WAIT 1 X 24 HOUR UNTIL ADMIN VERIFICATION YOUR ACCOUNT";
										header("location:login.php?success=$success");}
										else { //else 5
											echo "gagal masuk";
											die($masuk);
										}
								}// tutup if 4
							else { // else 4
									$error = "other people have been using user id";
									header("location:login.php?error=$error#badan_super");
									} 
							} //tutup if 3
						else {
							$error = "password not match";
							header("location:login.php?error=$error#badan_super");
						}
				} // tutup else 1
			}
else {
		echo "gagal";
	//header("location:index.php#badan2");
	 }	
} // ini if konfirmasi ada ga
else {
	header("location:registrasi.php");
}
?>