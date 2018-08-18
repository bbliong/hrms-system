<?php
include ("../config/koneksi.php");
if (isset($_POST['emp_no'])){
//--------------------------------------------table employee----------------------------------
	$emp_no 		= $_POST['emp_no'];
	$emp_name 		= $_POST['emp_name'];
	$job_desc 		= $_POST['job_desc'];
	$lvl_cd 		= $_POST['lvl_cd'];
	$grade 			= $_POST['grade'];
	$dept			= $_POST['dept'];
	$obu 			= $_POST['obu'];
	$location 		= $_POST['location'];
	$recruitment 	= $_POST['recruitment'];
	$working_area 	= $_POST['working_area'];
	$ent_dt 		= $_POST['ent_dt'];
	$retire_dt		= $_POST['retire_dt'];
	$status 		= $_POST['status'];
	$emp_type 		= $_POST['emp_type'];
	$from_dt 		= $_POST['from_dt'];
	$end_dt			= $_POST['end_dt'];
	$promo_dt 		= $_POST['promo_dt'];
	$place_birth 	= $_POST['place_birth'];
	$birth_dt 		= $_POST['birth_dt'];
	$sex 			= $_POST['sex'];
	$id_no 			= $_POST['id_no'];
	$ethnic 		= $_POST['ethnic'];
	$blood_type 	= $_POST['blood_type'];
	$uniform 		= $_POST['uniform'];
	$shoes_no		= $_POST['shoes_no'];
	$add_curr 		= $_POST['add_curr'];
	$village_curr 	= $_POST['village_curr'];
	$district_curr 	= $_POST['district_curr'];
	$city_curr 		= $_POST['city_curr'];
	$prov_curr 		= $_POST['prov_curr'];
	$zip_curr 		= $_POST['zip_curr'];
	$add_id 		= $_POST['add_id'];
	$village_id 	= $_POST['village_id'];
	$district_id 	= $_POST['district_id'];
	$city_id 		= $_POST['city_id'];
	$prov_id 		= $_POST['prov_id'];
	$zip_id 		= $_POST['zip_id'];
	$phone_number 	= $_POST['phone_number'];
	$celuler 		= $_POST['celuler'];
	$email 			= $_POST['email'];
	$religion 		= $_POST['religion'];
	$schooling 		= $_POST['schooling'];
	$school_name 	= $_POST['school_name'];
	$major 			= $_POST['major'];
	$wedd_dt 		= $_POST['wedd_dt'];
	$bank_name 		= $_POST['bank_name'];
	$bank_add 		= $_POST['bank_add'];
	$bank_acct 		= $_POST['bank_acct'];
	$tax_status 	= $_POST['tax_status'];
	$npwp 			= $_POST['npwp'];
	$jst_area 		= $_POST['jst_area'];
	$bpjs_ket_no 	= $_POST['bpjs_ket_no'];
	$bpjs_ket_dt 	= $_POST['bpjs_ket_dt'];
	$bpjs_kes_no 	= $_POST['bpjs_kes_no'];
	$bpjs_kes_dt 	= $_POST['bpjs_kes_dt'];
	$emergency_name = $_POST['emergency_name'];
	$emergency_no 	= $_POST['emergency_no'];
	$relation 		= $_POST['relation'];
	$old_empno 		= $_POST['old_empno'];
	$curr 			= $_POST['curr'];
	$basic_sal 		= $_POST['basic_sal'];
	$re_amt 		= $_POST['re_amt'];
	$comp_amt 		= $_POST['comp_amt'];
	$ple_amt 		= $_POST['ple_amt'];
	$php_amt 		= $_POST['php_amt'];
	$tla_amt 		= $_POST['tla_amt'];
	$tax_area 		= $_POST['tax_area'];
	$spsi_flag 		= $_POST['spsi_flag'];
	$co_flag 		= $_POST['co_flag'];
	$pens_flag 		= $_POST['pens_flag'];
	$bpjs_kes_flag 	= $_POST['bpjs_kes_flag'];
	$bpjs_ket_flag 	= $_POST['bpjs_ket_flag'];
	$custom_4 		= $_POST['custom_4'];
	$custom_5 		= $_POST['custom_5'];
	$user_id 		= $_POST['user_id'];
//--------------------------------------------table employee---------------------------------------



//-----------------------------------------------tanggal-------------------------------------------

$date 		= getdate();
$day 		= date('d');
$month 		= date('m');
$year 		= $date['year'];
$hours 		= $date['hours'];
$minute 	= $date['minutes'];
$second 	= $date['seconds'];
$crt_dt 	= "$year-$month-$day";
$upd_dt 	= $crt_dt;
//-----------------------------------------------tanggal --------------------------------------------

//-------------------------------------------------foto----------------------------------------------
if (!empty($_POST['foto'])) {
	$seq_poto = 1;
	$nama_file = $_FILES['gambar']['name'];
	$ukuran_file = $_FILES['gambar']['size'];
	$tipe_file = $_FILES['gambar']['type'];
	$temporary_file = $_FILES['gambar']['tmp_name'];

	$jadi_file = explode("/",$tipe_file);
	$fix_file  = $jadi_file[1];
	$nama = $user_id.$seq_poto."_".$upd_dt.".".$fix_file;
	$path = "../img/img_pic_user/".$nama;
	$upload = move_uploaded_file($temporary_file, $path);

			
			$query_gambar = ("insert into mdl_tgid values (?,?,?,?,?,?,?,?)");
			$persiapan_gambar = $konek -> prepare($query_gambar);
			$persiapan_gambar -> bind_param("sissssis", $emp_no, $ukuran_file, $id_no,$fix_file, $crt_dt, $upd_dt, $seq_poto, $user_id);

			$masukan_tgid = $persiapan_gambar -> execute();
}
else { 
	$seq_poto 		= "";
	$ukuran_file 	= "";
	$tipe_file 		=  "";
			$query_gambar	  = ("insert into mdl_tgid values (?,?,?,?,?,?,?,?)");
			$persiapan_gambar = $konek -> prepare($query_gambar);
			$persiapan_gambar -> bind_param("sissssis", $emp_no, $ukuran_file, $id_no,$tipe_file, $crt_dt, $upd_dt, $seq_poto, $user_id);

			$masukan_tgid = $persiapan_gambar -> execute();
	 };

//------------------------------------------------foto------------------------------------------------


if (!empty($emp_no && $emp_name && $ent_dt && $retire_dt && $status  && $crt_dt && $upd_dt && $user_id )) {

	$cek1 		= "select emp_no from mdl_tgemp where emp_no = '$emp_no'";
	$cek2 		= $konek -> query($cek1);
	$cekjumlah 	= $cek2 -> num_rows;

	if ($cekjumlah == false) {

		$masuk1 = ("insert into mdl_tgemp values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		
		$masuk3 = $konek -> prepare($masuk1);
		
		$masuk3 -> bind_param("ssssssssssssssssssssssssisssssssssssssssssssssssssssssssssssiiiiiisssssssssss",$emp_no,$emp_name,$job_desc,$lvl_cd,$grade,$dept,$obu,$location,$recruitment,$working_area,$ent_dt,$retire_dt,$status,$emp_type,$from_dt, $end_dt,$promo_dt,$place_birth,$birth_dt,$sex,$id_no,$ethnic,$blood_type,$uniform,$shoes_no,$add_curr,$village_curr,$district_curr,$city_curr,$prov_curr,$zip_curr,$add_id,$village_id,$district_id,$city_id,$prov_id,$zip_id,$phone_number,$celuler,$email,$religion,$schooling,$school_name,$major,$wedd_dt,$bank_name,$bank_add,$bank_acct,$tax_status,$npwp,$jst_area,$bpjs_ket_no,$bpjs_ket_dt,$bpjs_kes_no,$bpjs_ket_dt,$emergency_name,$emergency_no,$relation,$old_empno,$curr,$basic_sal,$re_amt,$comp_amt,$ple_amt,$php_amt,$tla_amt,$tax_area,$spsi_flag,$co_flag,$pens_flag,$bpjs_kes_flag,$bpjs_ket_flag,$custom_4,$custom_5,$crt_dt,$upd_dt,$user_id); 
		
		$masukan_tgemp = $masuk3 -> execute();


			$masuk2 = ("insert into mdl_tgfam values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

			$seq 				= 0;
			foreach ($_POST['name_family'] as $key => $val){
					//table family
					$seq++;
					$emp_no_family		= $_POST['emp_no'];
					$relation_family 	= $_POST['relation_family'][$key];
					$name_family 		= $_POST['name_family'][$key];
					$sex_family 		= $_POST['sex_family'][$key];
					//ssn
					$birth_dt_family 	= $_POST['birth_dt_family'][$key];
					$place_birth_family	= $_POST['place_birth_family'][$key];
					$schooling_family	= $_POST['schooling_family'][$key];
					$job_desc_family 	= $_POST['job_desc_family'][$key];
					$deduction_flag 	= $_POST['deduction_flag'][$key];
					$living_status 		= $_POST['living_status'][$key];
					$reimburse_status 	= $_POST['reimburse_status'][$key];
					$allow_status 		= $_POST['allow_status'][$key];
					$ins_status 		= $_POST['ins_status'][$key];
					$fam_desc 			= $_POST['fam_desc'][$key];
					$fam_certif_no 		= $_POST['fam_certif_no'][$key];
					//crt dt
					//upd dt
					//user id
				//table family

					$masuk4 = $konek -> prepare($masuk2);

					
					$masuk4 -> bind_param("sissssssssssssssssss",$emp_no_family,$seq,$relation_family,$name_family,$sex_family,$ssn,$birth_dt_family,$place_birth_family,$schooling_family,$job_desc_family,$deduction_flag,$living_status,$reimburse_status,$allow_status,$ins_status,$fam_desc,$fam_certif_no,$crt_dt,$upd_dt,$user_id);

						$masukan_tgfam = $masuk4 -> execute();
						var_dump($masukan_tgemp);
						}/*tutup foreach */ 
					
					if ($masukan_tgemp = true && $masukan_tgfam = true){
						header("location:../index.php?module=employee#");
						$masuk3 -> close();
						$masuk4 -> close();
					 	} 
						else {
								echo " ada yang salah ";
								$konek -> query("delete from mdl_tgemp where emp_no ='$emp_no'");
								$konek -> query("delete from mdl_tgfam where emp_no ='$emp_no'");
						}
			 } 
		else { echo " data sudah ada";}
				 } 
		else {echo "ada yang kosong";}

			}
		else {echo"jangan langsung";}
?>