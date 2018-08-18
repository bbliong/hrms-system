<?php
	function gambar_user(){ 
			include ("koneksi.php");
			$nama = $_SESSION['username']; 
			$cek1 = $konek -> query("select emp_no from mdl_tsuser where user_id='$nama'");
			$ambil_query = $cek1 -> fetch_array();
			$nama = $ambil_query['emp_no'];
			$query = "select mdl_tsuser.user_id , mdl_tgid.upd_dt, photo_type,seq from mdl_tsuser inner join mdl_tgid using (emp_no) where emp_no='$nama' order by upd_dt asc "; 
			$cek_query =  $konek -> query($query);
			$ambil_query = $cek_query -> fetch_array();
			$upd  = $ambil_query['upd_dt'];	
			$nama = $ambil_query['user_id'];
			$type = $ambil_query['photo_type'];
			$seq  = $ambil_query['seq'];
			echo $nama.$seq."_".$upd.".".$type;
				};
	function user_id(){ 
			include ("koneksi.php");
			$nama = $_SESSION['username']; 
			$nama = strtoupper($nama);
			echo $nama;
				};

	function name(){ 
			include ("koneksi.php");
			$nama = $_SESSION['username']; 
			$cek1 = $konek -> query("select emp_no from mdl_tsuser where user_id='$nama'");
			$ambil_query = $cek1 -> fetch_array();
			$nama = $ambil_query['emp_no'];
			$query = "select emp_name from mdl_tgemp inner join mdl_tsuser using (emp_no) where emp_no='$nama'"; 
			$cek_query =  $konek -> query($query);
			$ambil_query = $cek_query -> fetch_array();
			$nama_pisah = explode(" ", $ambil_query['emp_name']);	
			$nama = strtoupper($nama_pisah[0]);
			echo $nama;
				};

	?>

