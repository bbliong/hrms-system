<div class="modal fade" id="deptview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Departement</h4>
      </div>
      <div class="modal-body">
      <form method="post" action="dept_select.php">
          <input type="text" name="dept_code" maxlenth="11" placeholder="Departement Code" class="input_departement">
          <input type="text" name="dept_name"  maxlenth="50" placeholder="Departement Name"  class="input_departement">        
           <select name="upper_dept"  placeholder="Upper Departement"  class="input_departement" ><!-- onchange="select(this.value)" -->
              <option value="">Choose upper Departement</option>
                    <?php
                    $query = "select * from mdl_tgdept_menu where grade='1' or grade='2'";
                    $querys = $konek -> query($query);
                    $jumlah = $querys -> num_rows;
                    if ($jumlah == true){
                     while($ambil = $querys -> fetch_array()){
                      echo "<option value='".$ambil['dept_name']."'>".$ambil['dept_name'] ."</option>";
                     }
                    }
                    else { 
                      echo "<option value='Top Depart'>Top Departement</option>";
                    }


                   ?>
            </select>
           <!--  <div id="grade" >
            </div> -->
          <input type="submit" name="submit" value="Add"  class="input_departement" style="background-color:#222;color:#fff;">
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
        </form>
      </div>
      </div>

    </div>	
  </div>
</div>

<script>
/* buat referensi penggunaan select dynamic
function select(val){

  $.ajax ({
    type : "post",
    url  : "dept_select.php",
    data : {
            dept_name : val},
    success : function(get){
        document.getElementById("grade").innerHTML=get;
    }
  })
}
*/
</script>