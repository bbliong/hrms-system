<?php
$emp = $_GET['emp_no'];
$ambildata = $konek -> query("select * from mdl_tgemp where emp_no='$emp'");

$keluarindata = $ambildata -> fetch_array();

?>

<div class="add_employee">
	<ul class="tab">
	  <li><a href="#" class="tablinks" onclick="menu(event, 'Personal Data')">Personal Data</a></li>
	  <li><a href="#" class="tablinks" onclick="menu(event, 'Family Data')">Family Data</a></li>
	  <li><a href="#" class="tablinks" onclick="menu(event, 'Important Number')">Important Number</a></li>
		</ul>
	<form action="employee/edit_employee_proses.php?emp_no=<?php echo $emp; ?>" method="POST" enctype="multipart/form-data" >
	
	<div id="Personal Data" class="tabcontent" style="display:block;" >
				<div class="contentemployee" >
				<input  value="<?php echo $keluarindata['USER_ID']?>" type="hidden"	name="user_id" maxlength="30" class="input_employee"  style="width:60%;float:left;margin-right:0;">
				<input  value="<?php echo $keluarindata['PLACE_BIRTH']?>" type="text"	name="place_birth" maxlength="30" class="input_employee" placeholder="Place Birth" style="width:60%;float:left;margin-right:0;">
				<input  value="<?php echo $keluarindata['BIRTH_DT']?>" type="text"	name="birth_dt" maxlength="30" class="input_employee" placeholder="Birth Date" style="width:35%;margin : 10px 0 10px 5px;">
				<select  value="<?php echo $keluarindata['SEX']?>" class="input_employee" name="sex">
							<option value="Laki-Laki" selected="selected">Laki-Laki </option>
							<option value="Perempuan">Perempuan </option>
					</select>
				<input  value="<?php echo $keluarindata['ID_NO']?>" type="text"	name="id_no" maxlength="30" class="input_employee" placeholder="ID Number"></br>
					<input  value="<?php echo $keluarindata['ETHNIC']?>" type="text"	name="ethnic" maxlength="30" class="input_employee" placeholder="Ethnic"></br>			
					<input  value="<?php echo $keluarindata['BLOOD_TYPE']?>" type="text"	name="blood_type" maxlength="30" class="input_employee" placeholder="Blood Type"></br>
					<input  value="<?php echo $keluarindata['UNIFORM']?>" type="text"	name="uniform" maxlength="30" class="input_employee" placeholder="Uniform"></br>
					<input  value="<?php echo $keluarindata['SHOES_NO']?>" type="text"	name="shoes_no" maxlength="30" class="input_employee" placeholder="Shoes Number"></br>
						<input  value="<?php echo $keluarindata['PHONE_HOME']?>" type="text"	name="phone_number" maxlength="30" class="input_employee" placeholder="Phone Number" style="width:48%;margin-right:0;float:left;">
						<input  value="<?php echo $keluarindata['CELLULAR']?>" type="text"	name="celuler" maxlength="30" class="input_employee" placeholder="Celuler" style="width:47%;margin-left:2px;margin-right:0;float:right;position:relative;"></br>
					<input  value="<?php echo $keluarindata['EMAIL']?>" type="text"	name="email" maxlength="30" class="input_employee" placeholder="Email"></br>
					<input  value="<?php echo $keluarindata['RELIGION']?>" type="text"	name="religion" maxlength="30" class="input_employee" placeholder="Religion"></br>
					<input  value="<?php echo $keluarindata['SCHOOLING']?>" type="text"	name="schooling" maxlength="30" class="input_employee" placeholder="Schooling"></br>
					<input  value="<?php echo $keluarindata['SCHOOL_NAME']?>" type="text"	name="school_name" maxlength="30" class="input_employee" placeholder="School Name"></br>
				</div>
				<div class="contentemployee" style="vertical-align:top;">
				<input  value="<?php echo $keluarindata['MAJOR']?>" type="text"	name="major" maxlength="30" class="input_employee" placeholder="Major"></br>
				<input  value="<?php echo $keluarindata['WEDD_DT']?>" type="text"	name="wedd_dt" maxlength="30" class="input_employee" placeholder="Wedd Date"></br>
				<fieldset class="scheduler-border">
    					<legend class="scheduler-border">Current</legend>
					<input  value="<?php echo $keluarindata['ADD_CURR']?>" type="text"	name="add_curr" maxlength="30" class="input_employee" style="margin-top:2px;margin-bottom:2px;" placeholder="Add"></br>
					<input  value="<?php echo $keluarindata['VILLAGE_CURR']?>" type="text"	name="village_curr" maxlength="30" class="input_employee" style="margin-top:2px;margin-bottom:2px;" placeholder="Village"></br>
					<input  value="<?php echo $keluarindata['DISTRICT_CURR']?>" type="text"	name="district_curr" maxlength="30" class="input_employee" style="margin-top:2px;margin-bottom:2px;" placeholder="District"></br>
					<input  value="<?php echo $keluarindata['CITY_CURR']?>" type="text"	name="city_curr" maxlength="30" class="input_employee" style="margin-top:2px;margin-bottom:2px;" placeholder="City"></br>
					<input  value="<?php echo $keluarindata['PROV_CURR']?>" type="text"	name="prov_curr" maxlength="30" class="input_employee" style="margin-top:2px;margin-bottom:2px;" placeholder="Province"></br>
					<input  value="<?php echo $keluarindata['ZIP_CURR']?>" type="text"	name="zip_curr" maxlength="30" class="input_employee" style="margin-top:2px;margin-bottom:2px;" placeholder="Zip "></br>
					

				</fieldset>	
				<fieldset class="scheduler-border" >
    					<legend class="scheduler-border">On ID</legend>
					<input  value="<?php echo $keluarindata['ADD_ID']?>" type="text"	name="add_id" maxlength="30" class="input_employee" style="margin-top:2px;margin-bottom:2px;" placeholder="Add"></br>
					<input  value="<?php echo $keluarindata['VILLAGE_ID']?>" type="text"	name="village_id" maxlength="30" class="input_employee" style="margin-top:2px;margin-bottom:2px;" placeholder="Village"></br>
					<input  value="<?php echo $keluarindata['DISTRICT_ID']?>" type="text"	name="district_id" maxlength="30" class="input_employee" style="margin-top:2px;margin-bottom:2px;" placeholder="District"></br>
					<input  value="<?php echo $keluarindata['CITY_ID']?>" type="text"	name="city_id" maxlength="30" class="input_employee" style="margin-top:2px;margin-bottom:2px;" placeholder="City"></br>
					<input  value="<?php echo $keluarindata['PROV_ID']?>" type="text"	name="prov_id" maxlength="30" class="input_employee" style="margin-top:2px;margin-bottom:2px;" placeholder="Province"></br>
					<input  value="<?php echo $keluarindata['ZIP_ID']?>" type="text"	name="zip_id" maxlength="30" class="input_employee" style="margin-top:2px;margin-bottom:2px;" placeholder="Zip "></br>
				</fieldset>	
				</div>
				
  		 <input type="submit" class="btn btn-success" name="save" style="margin-top:10px;width:90%;height:60px;" value="SAVE">
			</div>

		<div id="Family Data" class="tabcontent">
		<a href="javascript:add_keluarga();" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>add to record</a>
		<fieldset class="scheduler-border" class="contentemployee">
	<?php
		$ambildatas = $konek -> query("select * from mdl_tgfam where emp_no='".$_GET['emp_no']."'");
		while ($keluarindatas = $ambildatas -> fetch_array()){
		?>

					<legend class="scheduler-border">Family <?php echo $keluarindatas['seq'];?></legend>	
				 		<div class="contentemployee">
		    				<input  value="<?php echo $keluarindatas['nama']?>" type="text"	name="name_family[]" maxlength="30" class="input_employee" style="margin-top:2px;margin-bottom:2px;" placeholder="Name "></br>
							<select  value="<?php echo $keluarindatas['relation']?>" class="input_employee" name="relation_family[]">
									<option value="F" selected="selected">Father </option>
									<option value="M">Mother </option>
									<option value="S">Sister </option>
									<option value="B">Brother </option>
									<option value="C">Children </option>
									<option value="P">Parent </option>
							</select>
							<select  value="<?php echo $keluarindatas['sex']?>" class="input_employee" name="sex_family[]">
									<option value="Laki-Laki" selected="selected">Laki-Laki </option>
									<option value="Perempuan">Perempuan </option>
							</select>
							<input  value="<?php echo $keluarindatas['place_birth']?>" type="text"	name="place_birth_family[]" maxlength="30" class="input_employee" placeholder="Place Birth" style="width:60%;float:left;margin-right:0;">
							<input  value="<?php echo $keluarindatas['birth_dt']?>" type="text"	name="birth_dt_family[]" maxlength="30" class="input_employee" placeholder="Birth Date" style="width:35%;margin : 10px 0 10px 5px;">
							<input  value="<?php echo $keluarindatas['schooling']?>" type="text"	name="schooling_family[]" maxlength="30" class="input_employee" placeholder="Schooling_family"></br>
							<input  value="<?php echo $keluarindatas['job_desc']?>" type="text"	name="job_desc_family[]" maxlength="30" class="input_employee"  placeholder="Job Description"></br>
							<h4 style="display:inline-block;margin-left:10px;"> Deduction Flag : </h4> 
							<select  value="<?php echo $keluarindatas['deduction_flag']?>" class="input_employee" name="deduction_flag[]" style="width:55%";>
									<option value="Y" selected="selected">Yes </option>
									<option value="N">NO </option>
							</select>
						</div>
						<div class="contentemployee" style="vertical-align:top;margin-top:-8px;">
							<input  value="<?php echo $keluarindatas['living_status']?>" type="text"	name="living_status[]" maxlength="30" class="input_employee" placeholder="Living Status"></br>
							<input  value="<?php echo $keluarindatas['reimburse_status']?>" type="text"	name="reimburse_status[]" maxlength="30" class="input_employee" placeholder="Reimburse Status"></br>
							<input  value="<?php echo $keluarindatas['alw_status']?>" type="text"	name="allow_status[]" maxlength="30" class="input_employee" placeholder="Allowance Status"></br>
							<input  value="<?php echo $keluarindatas['ins_status']?>" type="text"	name="ins_status[]" maxlength="30" class="input_employee" placeholder="Insurance Status"></br>
							<input  value="<?php echo $keluarindatas['fam_desc']?>" type="text"	name="fam_desc[]" maxlength="30" class="input_employee" placeholder="Family Description"></br>
							<input  value="<?php echo $keluarindatas['fam_certif_no']?>" type="text"	name="fam_certif_no[]" maxlength="30" class="input_employee" placeholder="Family certificate Number"></br>
							</div>
			<?php }?>
		     <div id="record" class="contentemployee"></div> 
             <div id="records" class="contentemployee" style="vertical-align:top;padding-bottom:30px; "></div>
    			</fieldset>	
    		</div>	
		<div id="Important Number" class="tabcontent">
			<div class="contentemployee" >
				<input  value="<?php echo $keluarindata['BANK_NAME']?>" type="text"	name="bank_name" maxlength="30" class="input_employee" placeholder="Bank Name" style="width:48%;float:left;margin-right:0;">
				<input  value="<?php echo $keluarindata['BANK_ADD']?>" type="text"	name="bank_add" maxlength="30" class="input_employee" placeholder="Bank Add" style="width:47%;margin : 10px 0 10px 5px;">
				<input  value="<?php echo $keluarindata['BANK_ACCT']?>" type="text"	name="bank_acct" maxlength="30" class="input_employee" placeholder="Bank Acct" style="width:48%;float:left;margin-right:0;">
				<input  value="<?php echo $keluarindata['TAX_STATUS']?>" type="text"	name="tax_status" maxlength="30" class="input_employee" placeholder="Tax Status" style="width:47%;margin : 10px 0 10px 5px;">
				<input  value="<?php echo $keluarindata['NPWP']?>" type="text"	name="npwp" maxlength="30" class="input_employee" placeholder="Npwp" style="width:48%;float:left;margin-right:0;">
				<input  value="<?php echo $keluarindata['JST_AREA']?>" type="text"	name="jst_area" maxlength="30" class="input_employee" placeholder="Area" style="width:47%;margin : 10px 0 10px 5px;">
				<input  value="<?php echo $keluarindata['BPJS_KET_NO']?>" type="text"	name="bpjs_ket_no" maxlength="30" class="input_employee" placeholder="Number BPJS" style="width:48%;float:left;margin-right:0;">
				<input  value="<?php echo $keluarindata['BPJS_KET_DT']?>" type="text"	name="bpjs_ket_dt" maxlength="30" class="input_employee" placeholder="Date" style="width:47%;margin : 10px 0 10px 5px;">
				<input  value="<?php echo $keluarindata['BPJS_KES_NO']?>" type="text"	name="bpjs_kes_no" maxlength="30" class="input_employee" placeholder="Number BPJS" style="width:48%;float:left;margin-right:0;">
				<input  value="<?php echo $keluarindata['BPJS_KES_DT']?>" type="text"	name="bpjs_kes_dt" maxlength="30" class="input_employee" placeholder="Date" style="width:47%;
				margin : 10px 0 10px 5px;">
				<input  value="<?php echo $keluarindata['EMERGENCY_NAME']?>" type="text"	name="emergency_name" maxlength="30" class="input_employee" placeholder="Emergency Name"></br>
				<input  value="<?php echo $keluarindata['EMERGENCY_NO']?>" type="text"	name="emergency_no" maxlength="30" class="input_employee" placeholder="Emergency Number"></br>
				<input  value="<?php echo $keluarindata['RELATION']?>" type="text"	name="relation" maxlength="30" class="input_employee" placeholder="Relation"></br>
				<input  value="<?php echo $keluarindata['OLD_EMPNO']?>" type="text"	name="old_empno" maxlength="30" class="input_employee" placeholder="Old Employee Number"></br>
			</div>
			<div class="contentemployee" style="vertical-align:top;">
					<input  value="<?php echo $keluarindata['CURR']?>" type="text"	name="curr" maxlength="30" class="input_employee" placeholder="Curr" style="width:48%;float:left;margin-right:0;">
				<input  value="<?php echo $keluarindata['RE_AMT']?>" type="text"	name="re_amt" maxlength="30" class="input_employee" placeholder="Re Amt" style="width:47%;margin : 10px 0 10px 5px;">
				<input  value="<?php echo $keluarindata['COMP_AMT']?>" type="text"	name="comp_amt" maxlength="30" class="input_employee" placeholder="Comp Amt" style="width:48%;float:left;margin-right:0;">
				<input  value="<?php echo $keluarindata['PLE_AMT']?>" type="text"	name="ple_amt" maxlength="30" class="input_employee" placeholder="PLE Amt" style="width:47%;margin : 10px 0 10px 5px;">
				<input  value="<?php echo $keluarindata['PHP_AMT']?>" type="text"	name="php_amt" maxlength="30" class="input_employee" placeholder="PHP Amt" style="width:48%;float:left;margin-right:0;">
				<input  value="<?php echo $keluarindata['TLA_AMT']?>" type="text"	name="tla_amt" maxlength="30" class="input_employee" placeholder="TLA Amt" style="width:47%;margin : 10px 0 10px 5px;">
				<input  value="<?php echo $keluarindata['BPJS_KET_NO']?>" type="text"	name="bpjs_ket_no" maxlength="30" class="input_employee" placeholder="Number BPJS" style="width:48%;float:left;margin-right:0;">
				<input  value="<?php echo $keluarindata['BPJS_KET_DT']?>" type="text"	name="bpjs_ket_dt" maxlength="30" class="input_employee" placeholder="Date" style="width:47%;margin : 10px 0 10px 5px;">
				<input  value="<?php echo $keluarindata['TAX_AREA']?>" type="text"	name="tax_area" maxlength="30" class="input_employee" placeholder="Tax Area" style="width:47%;margin : 10px 0 10px 5px;">
				<input  value="<?php echo $keluarindata['BASIC_SAL']?>" type="text"	name="basic_sal" maxlength="30" class="input_employee" placeholder="Basic Salary" style="width:48%;float:left;margin-right:0;">
				<input  value="<?php echo $keluarindata['SPSI_FLAG']?>" type="text"	name="spsi_flag" maxlength="30" class="input_employee" placeholder="Spsi Flag" style="width:47%;margin : 10px 0 10px 5px;">
				<input  value="<?php echo $keluarindata['CO_FLAG']?>" type="text"	name="co_flag" maxlength="30" class="input_employee" placeholder="Co Flag" style="width:47%;margin : 10px 0 10px 5px;">
				<input  value="<?php echo $keluarindata['PENS_FLAG']?>" type="text"	name="pens_flag" maxlength="30" class="input_employee" placeholder="Pens Frag" style="width:48%;float:left;margin-right:0;">
				<input  value="<?php echo $keluarindata['BPJS_KES_FLAG']?>" type="text"	name="bpjs_kes_flag" maxlength="30" class="input_employee" placeholder="BPJS Kesehatan Flag" style="width:47%;margin : 10px 0 10px 5px;">
				<input  value="<?php echo $keluarindata['BPJS_KET_FLAG']?>" type="text"	name="bpjs_ket_flag" maxlength="30" class="input_employee" placeholder="BPJS Keterangan Flag" style="width:48%;float:left;margin-right:0;">
				<input  value="<?php echo $keluarindata['CUSTOM_4']?>" type="text"	name="custom_4" maxlength="30" class="input_employee" placeholder="Custom 4" style="width:47%;margin : 10px 0 10px 5px;">
				<input  value="<?php echo $keluarindata['CUSTOM_5']?>" type="text"	name="custom_5" maxlength="30" class="input_employee" placeholder="Custom 5" style="width:48%;float:left;margin-right:0;">
				</div>	
	</div>

