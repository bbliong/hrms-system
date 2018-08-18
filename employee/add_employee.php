<?php
include("koneksi.php");
$n1 = "adm";
$n2 = "H-p";
$cek1 = $_SESSION['module'];
if (isset($_GET['module'])) {
if($cek1 == $n1 || $cek1 == $n2  ){
?>
<div class="add_employee">
		<ul class="tab">
		  <li><a href="#" class="tablinks" onclick="menu(event, 'Employee Data')">Employee Data</a></li>
		  <li><a href="#" class="tablinks" onclick="menu(event, 'Personal Data')">Personal Data</a></li>
		  <li><a href="#" class="tablinks" onclick="menu(event, 'Family Data')">Family Data</a></li>
		  <li><a href="#" class="tablinks" onclick="menu(event, 'Important Number')">Important Number</a></li>
			</ul>
		<form action="employee/employee_proses.php" method="POST" enctype="multipart/form-data" >
			<div id="Employee Data" class="tabcontent"  style="display:block;">
					<div class="contentemployee">
						<input type="text"	name="emp_no" maxlength="30" class="input_employee" placeholder="Employee Number"></br>
						<input type="text"	name="emp_name" maxlength="30" class="input_employee" placeholder="Employeee Name"></br>
						<input type="text"	name="job_desc" maxlength="30" class="input_employee" placeholder="Job Description"></br>
						<input type="text"	name="lvl_cd" maxlength="30" class="input_employee" placeholder="Level Common Code"></br>
								<select class="input_employee" name="grade">
										<option value="S">S-Super </option>
										<option value="H">H-Personal </option>
										<option value="D">D-Departement </option>
										<option value="O">Staff </option>
								</select>

					<input type="text"	name="dept" maxlength="30" class="input_employee" placeholder="Departement"></br>				
					<input type="text"	name="obu" maxlength="30" class="input_employee" placeholder="Objective business unit code"></br>
					<input type="text"	name="location" maxlength="30" class="input_employee" placeholder="Location"></br>
					<input type="text"	name="recruitment" maxlength="30" class="input_employee" placeholder="Recruitment"></br>
					<input type="text"	name="working_area" maxlength="30" class="input_employee" placeholder="Working Area"></br>
				</div>
				<div class="contentemployee" style="vertical-align:top;">
					<input type="text"	name="ent_dt" maxlength="30" class="input_employee tanggal" placeholder="Ent Date"></br>
					<input type="text"	name="retire_dt" maxlength="30" class="input_employee tanggal" placeholder="Retire Date"></br>
					<input type="text"	name="status" maxlength="30" class="input_employee" placeholder="Status"></br>
					<input type="text"	name="emp_type" maxlength="30" class="input_employee" placeholder="Employee Type"></br>
					<input type="text"	name="from_dt" maxlength="30" class="input_employee tanggal" placeholder="From Date"></br>
					<input type="text"  name="end_dt" maxlength="30" class="input_employee tanggal" placeholder="End Date"></br><input type="text"	name="promo_dt" maxlength="30" class="input_employee tanggal" placeholder="Promo Date"></br>
				<div class="input-group" style="margin-left:10px;">
	                <label class="input-group-btn" style="float:left;margin-left : 25%;">
	                      <img src="img/button_upload.png" style="width : 200px; height:100px;display:block;cursor:pointer;"> <input type="file" style="display: none;" name="gambar" multiple accept="image/*">
	                </label>
	                <input type="text" class="form-control" style="color:#222;display:block;" placeholder="Upload your photo" name="foto" readonly>
	            </div>
        		</div>	

  		 <input type="submit" class="btn btn-success" name="submit" style="margin-top:10px;width:100%;height:60px;">
		</div>
		<div id="Personal Data" class="tabcontent" >
				<div class="contentemployee" >
				<input type="text"	name="user_id" maxlength="30" class="input_employee" placeholder="User ID"></br>
				<input type="text"	name="place_birth" maxlength="30" class="input_employee" placeholder="Place Birth" style="width:60%;float:left;margin-right:0;">
					<input type="text"	name="birth_dt" maxlength="30" class="input_employee tanggal"  placeholder="Birth Date" style="width:35%;margin : 10px 0 10px 5px;">
					<select class="input_employee" name="sex">
							<option value="Laki-Laki" selected="selected">Laki-Laki </option>
							<option value="Perempuan">Perempuan </option>
					</select>
					<input type="text"	name="id_no" maxlength="30" class="input_employee" placeholder="ID Number"></br>
					<input type="text"	name="ethnic" maxlength="30" class="input_employee" placeholder="Ethnic"></br>			
					<input type="text"	name="blood_type" maxlength="30" class="input_employee" placeholder="Blood Type"></br>
					<input type="text"	name="uniform" maxlength="30" class="input_employee" placeholder="Uniform"></br>
					<input type="text"	name="shoes_no" maxlength="30" class="input_employee" placeholder="Shoes Number"></br>
						<input type="text"	name="phone_number" maxlength="30" class="input_employee" placeholder="Phone Number" style="width:49%;margin-right:0;float:left;">
						<input type="text"	name="celuler" maxlength="30" class="input_employee" placeholder="Celuler" style="width:47%;margin-left:2px;margin-right:0;float:right;position:relative;"></br>
					<input type="text"	name="email" maxlength="30" class="input_employee" placeholder="Email"></br>
					<input type="text"	name="religion" maxlength="30" class="input_employee" placeholder="Religion"></br>
					<input type="text"	name="schooling" maxlength="30" class="input_employee" placeholder="Schooling"></br>
					<input type="text"	name="school_name" maxlength="30" class="input_employee" placeholder="School Name"></br>
				</div>
				<div class="contentemployee" style="vertical-align:top;">
				<input type="text"	name="major" maxlength="30" class="input_employee" placeholder="Major"></br>
				<input type="text"	name="wedd_dt" maxlength="30" class="input_employee tanggal"  placeholder="Wedd Date" ></br>
				<fieldset class="scheduler-border">
    					<legend class="scheduler-border">Current</legend>
					<input type="text"	name="add_curr" maxlength="30" class="input_employee" style="margin-top:2px;margin-bottom:2px;" placeholder="Add"></br>
					<input type="text"	name="village_curr" maxlength="30" class="input_employee" style="margin-top:2px;margin-bottom:2px;" placeholder="Village"></br>
					<input type="text"	name="district_curr" maxlength="30" class="input_employee" style="margin-top:2px;margin-bottom:2px;" placeholder="District"></br>
					<input type="text"	name="city_curr" maxlength="30" class="input_employee" style="margin-top:2px;margin-bottom:2px;" placeholder="City"></br>
					<input type="text"	name="prov_curr" maxlength="30" class="input_employee" style="margin-top:2px;margin-bottom:2px;" placeholder="Province"></br>
					<input type="text"	name="zip_curr" maxlength="30" class="input_employee" style="margin-top:2px;margin-bottom:2px;" placeholder="Zip "></br>
					

				</fieldset>	
				<fieldset class="scheduler-border" >
    					<legend class="scheduler-border">On ID</legend>
					<input type="text"	name="add_id" maxlength="30" class="input_employee" style="margin-top:2px;margin-bottom:2px;" placeholder="Add"></br>
					<input type="text"	name="village_id" maxlength="30" class="input_employee" style="margin-top:2px;margin-bottom:2px;" placeholder="Village"></br>
					<input type="text"	name="district_id" maxlength="30" class="input_employee" style="margin-top:2px;margin-bottom:2px;" placeholder="District"></br>
					<input type="text"	name="city_id" maxlength="30" class="input_employee" style="margin-top:2px;margin-bottom:2px;" placeholder="City"></br>
					<input type="text"	name="prov_id" maxlength="30" class="input_employee" style="margin-top:2px;margin-bottom:2px;" placeholder="Province"></br>
					<input type="text"	name="zip_id" maxlength="30" class="input_employee" style="margin-top:2px;margin-bottom:2px;" placeholder="Zip "></br>
				</fieldset>	
				</div>
				
			</div>

		<div id="Family Data" class="tabcontent">
		<a href="javascript:add_keluarga();" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>add to record</a>
				<fieldset class="scheduler-border" class=contentemployee"">
					<legend class="scheduler-border">Family <?php?></legend>	
				 		<div class="contentemployee">
		    				<input type="text"	name="name_family[]" maxlength="30" class="input_employee" style="margin-top:2px;margin-bottom:2px;" placeholder="Name "></br>
							<select class="input_employee" name="relation_family[]">
									<option value="F" selected="selected">Father </option>
									<option value="M">Mother </option>
									<option value="S">Sister </option>
									<option value="B">Brother </option>
									<option value="C">Children </option>
									<option value="P">Parent </option>
							</select>
							<select class="input_employee" name="sex_family[]">
									<option value="Laki-Laki" selected="selected">Laki-Laki </option>
									<option value="Perempuan">Perempuan </option>
							</select>
							<input type="text"	name="place_birth_family[]" maxlength="30" class="input_employee" placeholder="Place Birth" style="width:60%;float:left;margin-right:0;">
							<input type="text"	name="birth_dt_family[]" maxlength="30" class="input_employee tanggal" placeholder="Birth Date" style="width:35%;margin : 10px 0 10px 5px;">
							<input type="text"	name="schooling_family[]" maxlength="30" class="input_employee" placeholder="Schooling"></br>
							<input type="text"	name="job_desc_family[]" maxlength="30" class="input_employee"  placeholder="Job Description"></br>
							<h4 style="display:inline-block;margin-left:10px;"> Deduction Flag : </h4> 
							<select class="input_employee" name="deduction_flag[]" style="width:55%";>
									<option value="Y" selected="selected">Yes </option>
									<option value="N">NO </option>
							</select>
						</div>
						<div class="contentemployee" style="vertical-align:top;margin-top:-8px;">
							<input type="text"	name="living_status[]" maxlength="30" class="input_employee" placeholder="Living Status"></br>
							<input type="text"	name="reimburse_status[]" maxlength="30" class="input_employee" placeholder="Reimburse Status"></br>
							<input type="text"	name="allow_status[]" maxlength="30" class="input_employee" placeholder="Allowance Status"></br>
							<input type="text"	name="ins_status[]" maxlength="30" class="input_employee" placeholder="Insurance Status"></br>
							<input type="text"	name="fam_desc[]" maxlength="30" class="input_employee" placeholder="Family Description"></br>
							<input type="text"	name="fam_certif_no[]" maxlength="30" class="input_employee" placeholder="Family certificate Number"></br>
						</div>
				
              <div id="record" class="contentemployee"></div> 
             <div id="records" class="contentemployee" style="vertical-align:top;padding-bottom:30px; "></div>
    			</fieldset>	
    		</div>	

		<div id="Important Number" class="tabcontent">
			<div class="contentemployee" >
				<input type="text"	name="bank_name" maxlength="30" class="input_employee" placeholder="Bank Name" style="width:49%;float:left;margin-right:0;">
				<input type="text"	name="bank_add" maxlength="30" class="input_employee" placeholder="Bank Add" style="width:47%;margin : 10px 0 10px 5px;">
				<input type="text"	name="bank_acct" maxlength="30" class="input_employee" placeholder="Bank Acct" style="width:49%;float:left;margin-right:0;">
				<input type="text"	name="tax_status" maxlength="30" class="input_employee" placeholder="Tax Status" style="width:47%;margin : 10px 0 10px 5px;">
				<input type="text"	name="npwp" maxlength="30" class="input_employee" placeholder="Npwp" style="width:49%;float:left;margin-right:0;">
				<input type="text"	name="jst_area" maxlength="30" class="input_employee" placeholder="Area" style="width:47%;margin : 10px 0 10px 5px;">
				<input type="text"	name="bpjs_ket_no" maxlength="30" class="input_employee" placeholder="Number BPJS" style="width:49%;float:left;margin-right:0;">
				<input type="text"	name="bpjs_ket_dt" maxlength="30" class="input_employee tanggal" placeholder="Date" style="width:47%;margin : 10px 0 10px 5px;">
				<input type="text"	name="bpjs_kes_no" maxlength="30" class="input_employee" placeholder="Number BPJS" style="width:49%;float:left;margin-right:0;">
				<input type="text"	name="bpjs_kes_dt" maxlength="30" class="input_employee tanggal" placeholder="Date" style="width:47%;
				margin : 10px 0 10px 5px;">
				<input type="text"	name="emergency_name" maxlength="30" class="input_employee" placeholder="Emergency Name"></br>
				<input type="text"	name="emergency_no" maxlength="30" class="input_employee" placeholder="Emergency Number"></br>
				<input type="text"	name="relation" maxlength="30" class="input_employee" placeholder="Relation"></br>
				<input type="text"	name="old_empno" maxlength="30" class="input_employee" placeholder="Old Employee Number"></br>
			</div>
			<div class="contentemployee" style="vertical-align:top;">
					<input type="text"	name="curr" maxlength="30" class="input_employee" placeholder="Curr" style="width:49%;float:left;margin-right:0;">
				<input type="text"	name="re_amt" maxlength="30" class="input_employee" placeholder="Re Amt" style="width:47%;margin : 10px 0 10px 5px;">
				<input type="text"	name="comp_amt" maxlength="30" class="input_employee" placeholder="Comp Amt" style="width:49%;float:left;margin-right:0;">
				<input type="text"	name="ple_amt" maxlength="30" class="input_employee" placeholder="PLE Amt" style="width:47%;margin : 10px 0 10px 5px;">
				<input type="text"	name="php_amt" maxlength="30" class="input_employee" placeholder="PHP Amt" style="width:49%;float:left;margin-right:0;">
				<input type="text"	name="tla_amt" maxlength="30" class="input_employee" placeholder="TLA Amt" style="width:47%;margin : 10px 0 10px 5px;">
				<input type="text"	name="bpjs_ket_no" maxlength="30" class="input_employee" placeholder="Number BPJS" style="width:49%;float:left;margin-right:0;">
				<input type="text"	name="bpjs_ket_dt" maxlength="30" class="input_employee tanggal" placeholder="Date" style="width:47%;margin : 10px 0 10px 5px;">
				<input type="text"	name="tax_area" maxlength="30" class="input_employee" placeholder="Tax Area" style="width:47%;margin : 10px 0 10px 5px;">
				<input type="text"	name="basic_sal" maxlength="30" class="input_employee" placeholder="Basic Salary" style="width:49%;float:left;margin-right:0;">
				<input type="text"	name="spsi_flag" maxlength="30" class="input_employee" placeholder="Spsi Flag" style="width:47%;margin : 10px 0 10px 5px;">
				<input type="text"	name="co_flag" maxlength="30" class="input_employee" placeholder="Co Flag" style="width:47%;margin : 10px 0 10px 5px;">
				<input type="text"	name="pens_flag" maxlength="30" class="input_employee" placeholder="Pens Frag" style="width:49%;float:left;margin-right:0;">
				<input type="text"	name="bpjs_kes_flag" maxlength="30" class="input_employee" placeholder="BPJS Kesehatan Flag" style="width:47%;margin : 10px 0 10px 5px;">
				<input type="text"	name="bpjs_ket_flag" maxlength="30" class="input_employee" placeholder="BPJS Keterangan Flag" style="width:49%;float:left;margin-right:0;">
				<input type="text"	name="custom_4" maxlength="30" class="input_employee" placeholder="Custom 4" style="width:47%;margin : 10px 0 10px 5px;">
				<input type="text"	name="custom_5" maxlength="30" class="input_employee" placeholder="Custom 5" style="width:49%;float:left;margin-right:0;">
			</div>	
	</div>


<?php }
else {
	header("location:index.php");
}}
else {
	header("location:index.php");
}
?>