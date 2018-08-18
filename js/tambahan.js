$(function() {

  // We can attach the `fileselect` event to all file inputs on the page
  $('#berkas1').on('change', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
  });

  // We can watch for our custom `fileselect` event like this
  $(document).ready( function() {
      $('#berkas1').on('fileselect', function(event, numFiles, label) {

          var input = $(this).parents('.input-group').find(':text'),
              log = numFiles > 1 ? numFiles + ' files selected' : label;

          if( input.length ) {
              input.val(log);
          } else {
              if( log ) alert(log);
          }

      });
  });
  
});
function menu(evt, menuname) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(menuname).style.display = "block";
    evt.currentTarget.className += " active";
}

function add_keluarga() {
  var content = '';
   var contents = '';
                 content +='<fieldset class="schedulers-border" class="contentemployee" >';
              contents +='<fieldset class="schedulers-border" class="contentemployee" style="padding-bottom:41px;">';

               content +='<input type="text" name="name_family[]" maxlength="30" class="input_employee" style="margin-bottom:2px;" placeholder="Name"></br>';
               content +='<select class="input_employee" name="relation_family[]">';
                  content +='<option value="F" selected="selected">Father </option>';
                  content +='<option value="M">Mother </option>';
                  content +='<option value="S">Sister </option>';
                  content +='<option value="B">Brother </option>';
                  content +='<option value="C">Children </option>';
                  content +='<option value="P">Parent </option>';
              content +='</select>';
              content +='<select class="input_employee" name="sex_family[]">';
                   content +='<option value="Laki-Laki" selected="selected">Laki-Laki </option>';
                  content +='<option value="Perempuan">Perempuan </option>';
              content +='</select>';
              content +='<input type="text" name="placeholder1 ace_birth_family[]" maxlength="30" class="input_employee" placeholder="Place Birth" style="width:60%;float:left;margin-right:0;">';
              content +='<input type="text" name="birth_dt_family[]" maxlength="30" class="input_employee tanggal" placeholder="Birth Date" style="width:35%;margin : 10px 0 10px 5px;">';
              content +='<input type="text" name="schooling_family[]" maxlength="30" class="input_employee" placeholder="Schooling"></br>';
              content +='<input type="text" name="job_desc_family[]" maxlength="30" class="input_employee"  placeholder="Job Description"></br>';
              content +='<h4 style="display:inline-block;margin-left:10px;"> Deduction Flag : </h4> ';
               content +='<select class="input_employee" name="deduction_flag[]" style="width:53%";> ';
                   content +='<option value="Y" selected="selected">Yes </option>';
                  content +='<option value="N">No </option>';
              content +='</select>';
              contents +='<input type="text" name="living_status[]" maxlength="30" class="input_employee" placeholder="Living Status"></br>';
              contents +='<input type="text" name="reimburse_status[]" maxlength="30" class="input_employee" placeholder="Reimburse Status"></br>';
              contents +='<input type="text" name="allow_status[]" maxlength="30" class="input_employee" placeholder="Allowance Status"></br>';
              contents +='<input type="text" name="ins_status[]" maxlength="30" class="input_employee" placeholder="Insurance Status"></br>';
              contents +='<input type="text" name="fam_desc[]" maxlength="30" class="input_employee" placeholder="Family Description"></br>';
              contents +='<input type="text" name="fam_certif_no[]" maxlength="30" class="input_employee" placeholder="Family certificate Number"></br>';
              
              contents +='</fieldset';
              content +='</fieldset>';

  var x = document.createElement('div');  
  var y = document.createElement('div');
  x.innerHTML = content;
  y.innerHTML = contents;
  document.getElementById('record').appendChild(x);
  document.getElementById('records').appendChild(y);
 }

 function hapus(element) {
  var x = document.getElementById('record');
  var y = document.getElementById('records');
  x.removeChild(element.parentNode);
  y.removeChild(element.parentNode);
 }

