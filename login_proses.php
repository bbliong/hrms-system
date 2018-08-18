<?php
include_once ("config/koneksi.php");
session_start();
$username = $_POST['user_id'];
$password = $_POST['passwd'];

if (!isset ($username) || !isset ($password)){
	header("location:login.php");
	$_SESSION['empty'];
}
else {
	$cekdata = $konek -> query("select user_id, passwd from MDL_TSUSER where user_id='$username'");		
	$jumlahuser = $cekdata-> num_rows;
		if ( $jumlahuser == true ){
			$data = $cekdata -> fetch_array();
			#if cek  user
				if ($username == $data['user_id'] && $password == $data['passwd']) {
						$_SESSION['username'] = $data['user_id'];
						$masuk = $_SESSION['username'];
						header("location:index.php");}
				else {
						$error = "Username And Password is not match";
							header("location:login.php?error=$error");
					}
			#if validasi user
			} #if validasi jumlah
		else {
				$error = "username or password can't blank";
							header("location:login.php?error=$error");
			}
		}#tutup else
?>