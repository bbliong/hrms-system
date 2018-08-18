<?php 

include("koneksi.php");

$date 		= getdate();
$day 		= date('d');
$month 		= date('m');
$year 		= $date['year'];
$hours 		= $date['hours'];
$minute 	= $date['minutes'];
$second 	= $date['seconds'];
$upd_dt 	= "$year-$month-$day";

session_start();
$user = $_SESSION['username'];
if (!empty($_POST['simpan'])) {

//ini buat ngambil seq
			if (!empty($_POST['foto'])) {
				$query 			= "select seq from mdl_tgid where user_id='$user'"; 
				$cek_query 		=  $konek -> query($query);
				$ambil_query	= $cek_query -> fetch_array();
				$seq  			= $ambil_query['seq'];
				$seq 			= $seq + 1;
	//ini buat ngambil seq

				$nama_file 		= $_FILES['gambar']['name'];
				$ukuran_file 	= $_FILES['gambar']['size'];
				$tipe_file		= $_FILES['gambar']['type'];
				$temporary_file = $_FILES['gambar']['tmp_name'];

				$jadi_file		= explode("/",$tipe_file);
				$nama 			= $user.$seq."_".$upd_dt.".".$jadi_file[1];
				$path			= "../img/img_pic_user/".$nama;
				$fix_file 		= $jadi_file[1];
				$upload 		= move_uploaded_file($temporary_file, $path);

				$query_gambar		 = ("update mdl_tgid set upd_dt= ?,id_size = ?, photo_type= ?,seq = ? where user_id= ?");
				$persiapan_gambar 	 = $konek -> prepare($query_gambar);
				$persiapan_gambar -> bind_param("sisis", $upd_dt, $ukuran_file, $fix_file, $seq,$user );
				$masukan_tgid 		 = $persiapan_gambar -> execute();
			}
			else {}

// update gambar 

// update pass dan user 

			$pass = $_POST['password'];
			$repass = $_POST['repassword'];
			if (!empty($pass)){
						if ($pass == $repass){
						$query = "update mdl_tsuser set passwd = ? where user_id = ?";
						$masukan_data = $konek -> prepare($query);
						$masukan_data -> bind_param("ss", $pass,$user);
						$jalankan = $masukan_data -> execute();}else {}	
			} else{}
			if ($masukan_tgid ||  $jalankan){
					header("location:../index.php?update=berhasil");}
			else{
					header("location:../index.php?update=gagal");}		
}
else {
header("location:../index.php");
};


?>