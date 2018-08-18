<!DOCTYPE html>
<html>
<head>
<title>MULTIPLE INSERT</title>
<script src="add_keluarga.js"></script>
<!--<script type="text/javascript">
 function add_keluarga() {
  var content = '';
content +='<fieldset class="scheduler-border" class=contentemployee"">';
content +='<legend class="scheduler-border">Family <?php?></legend> ';
               content +='<input type="text" name="nama_family" maxlength="30" class="input_employee" style="margin-top:2px;margin-bottom:2px;" placeholder="Add"></br>';
              content +='<select class="input_employee" name="relation_family">';
                  content +='<option value="" disabled="disabled" selected="selected">Your Relation </option>';
                  content +='<option value="F">Father </option>';
                  content +='<option value="M">Mother </option>';
                  content +='<option value="S">Sister </option>';
                  content +='<option value="B">Brother </option>';
                  content +='<option value="C">Children </option>';
                  content +='<option value="P">Parent </option>';
              content +='</select>';
              content +='<select class="input_employee" name="sex_family">';
                  content +='<option value="" disabled="disabled" selected="selected">Sex </option>';
                  content +='<option value="Laki-Laki">Laki-Laki </option>';
                  content +='<option value="Perempuan">Perempuan </option>';
              content +='</select>';
              content +='<input type="text" name="place_birth" maxlength="30" class="input_employee" placeholder="Place Birth" style="width:60%;float:left;margin-right:0;">';
              content +='<input type="text" name="birth_dt" maxlength="30" class="input_employee" placeholder="Birth Date" style="width:35%;margin : 10px 0 10px 5px;">';
              content +='<input type="text" name="schooling" maxlength="30" class="input_employee" placeholder="Schooling"></br>';
              content +='<input type="text" name="job_desc" maxlength="30" class="input_employee"  placeholder="Job Description"></br>';
              content +='<h4 style="display:inline-block;margin-left:10px;"> Deduction Flag : </h4> ';
              content +='<label for="flag_y">';
                content +='<input type="radio" name="deduction_flag" value="Y" id="flag_y">Y';
              content +='</label>';
              content +='<label for="flag_n">';
                content +='<input type="radio" name="deduction_flag" value="N" id="flag_n">N';
              content +='</label>';
              content +='<input type="text" name="living_status" maxlength="30" class="input_employee" placeholder="Living Status"></br>';
              content +='<input type="text" name="reimburse_status" maxlength="30" class="input_employee" placeholder="Reimburse Status"></br>';
              content +='<input type="text" name="allow_status" maxlength="30" class="input_employee" placeholder="Allowance Status"></br>';
              content +='<input type="text" name="ins_status" maxlength="30" class="input_employee" placeholder="Insurance Status"></br>';
              content +='<input type="text" name="fam_desc" maxlength="30" class="input_employee" placeholder="Family Description"></br>';
              content +='<input type="text" name="fam_certif_no" maxlength="30" class="input_employee" placeholder="Family certificate Number"></br>';
          content +='</fieldset>   ';


  var x = document.createElement('div');
  x.innerHTML = content;
  x.setAttribute ("style", "width :45%;display:inline-block;margin-right : 2%;");
  document.getElementById('record').appendChild(x);
 }

 function hapus(element) {
  var x = document.getElementById('record');
  x.removeChild(element.parentNode);
 }
</script>-->
</head>
<body>
TAMBAH DATA
<hr/>
<?php
include("coba.php");
?>
<br />
<form action="aksi.php" method="POST">
<pre>
Nama : <input type="text" name="name[]">
Address : <textarea name="address[]"></textarea>
<hr />
<div id="record"></div>
</pre>
<button>TAMBAH DATA</button>
</form>
</body>
</html>
