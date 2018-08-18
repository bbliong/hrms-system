<?php
include("../config/koneksi.php");
if (isset($_POST['save'])){
	$emp_no 		= $_GET['emp_no'];
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

$date 		= getdate();
$day 		= $date['mday'];
$month 		= $date['mon'];
$year 		= $date['year'];
$hours 		= $date['hours'];
$minute 	= $date['minutes'];
$second 	= $date['seconds'];
$upd_dt 	= "$year-$month-$day";
$crt_dt 	= $upd_dt;


$query= (" update mdl_tgemp set 
		PLACE_BIRTH = ?, 
		BIRTH_DT = ?, 
		SEX = ?, 
		ID_NO = ?, 
		ETHNIC = ?, 
		BLOOD_TYPE = ?, 
		UNIFORM = ?, 
		SHOES_NO = ?, 
		ADD_CURR = ?, 
		VILLAGE_CURR = ?,
		DISTRICT_CURR = ?, 
		CITY_CURR = ?, 
		PROV_CURR = ?, 
		ZIP_CURR = ?, 
		ADD_ID = ?, 
		VILLAGE_ID = ?, 
		DISTRICT_ID = ?,
		CITY_ID = ?, 
		PROV_ID = ?, 
		ZIP_ID = ?, 
		PHONE_HOME= ?, 
		CELLULAR = ?, 
		EMAIL = ?, 
		RELIGION = ?, 
		SCHOOLING = ?, 
		SCHOOL_NAME = ?, 
		MAJOR = ?, 
		WEDD_DT = ?, 
		BANK_NAME = ?, 
		BANK_ADD =?, 
		BANK_ACCT = ?, 
		TAX_STATUS = ?, 
		NPWP = ?, 
		JST_AREA = ?, 
		BPJS_KET_NO = ?, 
		BPJS_KET_DT = ?, 
		BPJS_KES_NO = ?, 
		BPJS_KES_DT = ?, 
		EMERGENCY_NAME =?, 
		EMERGENCY_NO = ?, 
		RELATION = ?, 
		OLD_EMPNO = ?, 
		CURR =?, 
		BASIC_SAL = ?, 
		RE_AMT = ?, 
		COMP_AMT = ?,
		PLE_AMT = ?, 
		PHP_AMT= ?, 
		TLA_AMT = ?, 
		TAX_AREA = ?, 
		SPSI_FLAG = ?, 
		CO_FLAG = ?, 
		PENS_FLAG = ?, 
		BPJS_KES_FLAG = ?, 
		BPJS_KET_FLAG = ?, 
		CUSTOM_4 = ?,
		CUSTOM_5 = ?,
		UPD_DT = ?
		 where EMP_NO = ?");

$edit = $konek ->prepare($query);

$edit -> bind_param("sssssssisssssssssssssssssssssssssssssssssssiiiiiissssssssss",$place_birth,$birth_dt,$sex,$id_no,$ethnic,$blood_type,$uniform,$shoes_no,$add_curr,$village_curr,$district_curr,$city_curr,$prov_curr,$zip_curr,$add_id,$village_id,$district_id,$city_id,$prov_id,$zip_id,$phone_number,$celuler,$email,$religion,$schooling,$school_name,$major,$wedd_dt,$bank_name,$bank_add,$bank_acct,$tax_status,$npwp,$jst_area,$bpjs_ket_no,$bpjs_ket_dt,$bpjs_kes_no,$bpjs_ket_dt,$emergency_name,$emergency_no,$relation,$old_empno,$curr,$basic_sal,$re_amt,$comp_amt,$ple_amt,$php_amt,$tla_amt,$tax_area,$spsi_flag,$co_flag,$pens_flag,$bpjs_kes_flag,$bpjs_ket_flag,$custom_4,$custom_5,$upd_dt,$emp_no); 

$edit -> execute();
$edit -> close();

	$masuk2 = ("update mdl_tgfam set 
						relation = ?, 
						nama = ?, 
						sex  = ?, 
						birth_dt = ?, 
						place_birth = ?, 
						schooling = ?, 
						job_desc = ?,
						deduct_flag =?,
						living_status = ?, 
						reimburse_status = ?, 
						alw_status = ?, 
						ins_status = ?, 
						fam_desc = ?, 
						fam_certif_no = ?, 
						upd_dt = ?
						where emp_no = ? and seq= ?
						");
	$masuk1 = ("insert into mdl_tgfam values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
	$cekdataseq= $konek -> query("select seq from mdl_tgfam where emp_no='$emp_no'");
	$banyakdataseq = $cekdataseq -> num_rows;
			$seq = 0;
			foreach ($_POST['name_family'] as $key => $val){
					//table family
					$seq++;
					$emp_no_family 		= $emp_no;
					$relation_family 	= $_POST['relation_family'][$key];
					$name_family 		= $_POST['name_family'][$key];
					$sex_family 		= $_POST['sex_family'][$key];
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
					//upd dt
					//user id
				//table family
					if ($banyakdataseq > $key){
					$masuk4 = $konek -> prepare($masuk2);

					$masuk4 -> bind_param("sssssssssssssssss",$relation_family,$name_family,$sex_family,$birth_dt_family,$place_birth_family,$schooling_family,$job_desc_family,$deduction_flag,$living_status,$reimburse_status,$allow_status,$ins_status,$fam_desc,$fam_certif_no,$upd_dt,$emp_no,$seq);

					 $masuk4 -> execute();
 
					}
					else {

					$masuk3 = $konek -> prepare($masuk1);

					$masuk3 -> bind_param("sissssssssssssssssss",$emp_no_family,$seq,$relation_family,$name_family,$sex_family,$ssn,$birth_dt_family,$place_birth_family,$schooling_family,$job_desc_family,$deduction_flag,$living_status,$reimburse_status,$allow_status,$ins_status,$fam_desc,$fam_certif_no,$crt_dt,$upd_dt,$user_id);

						$masukan_tgfam = $masuk3 -> execute();

					}//tutup else*/
					}/*tutup foreach */ 
					


}// tutup if isset
header("location:../employee.php");
?>