<?php
function popup(){	

include ("config/koneksi.php");
$query = "select * from mdl_tsautho where grant_by='' ";
$query2 = "select * from mdl_tsautho";
$query = $konek -> query($query);
$query2 = $konek -> query($query2);
$jumlah = $query -> num_rows;
$jumlah2 = $query2 -> num_rows;
if ($jumlah > 0 )
  {
  echo "<a data-toggle='modal' data-target='#contact' class='notif'>  <span class='glyphicon glyphicon-bell white' style='position:relative;top:8px;left:8px;z-index:111;'></span> <p style='background-color : #d9534f;border-radius: 5px;display:inline;padding :4px 12px;position:absolute;bottom:5px;color:#fff;'>$jumlah </p></a>  "  ;
  }
  else {
    echo "<a data-toggle='modal' data-target='#contact' class='notif'>  <span class='glyphicon glyphicon-bell white' style='position:relative;top:8px;left:8px;'></span> </a>  ";
}
 ?>



<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">User Report</h4>
      </div>
      <div class="modal-body">
      <div class="table-responsive scroll">
      <table class="table table-striped">
        <tr>
            <td> No </td>
            <td> User id </td>
            <td> Status </td>
        </tr>
         <?php
         $i = 1;
         $k = 0;
        while ($ambil2 = $query2 -> fetch_array()) {
                $user  = $ambil2['USER_ID'];
                echo "<tr><td> $i </td> <td >$user</td>";
              if (empty($ambil2['GRANT_BY'])){
                  ?>  
               <td><a class="status"  id="<?php echo $user;?>"> Pending </a></td> </form>
              <?php
              } 
              else {
                echo "<td><a class='success status'>Active</a></td> ";
              } 
              $i++;
         }
        ?>
      </table>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</div>
    </div>	
  </div>
</div>
<script type="text/javascript">
$('.status').on('click', function(){
    var user_id = ($(this).attr('id'));

  $.ajax ({
    method : "POST",
    url    : "config/insertautho.php",
    data   : { user : user_id},
    success : function(masuk){
        if(masuk == "1"){
            document.getElementById(user_id).style.backgroundColor='5cb85c';
            document.getElementById(user_id).style.padding= '8px 14px'; 
            document.getElementById(user_id).innerHTML = 'Active';
         }
         else {
            alert("gagal");
         }
    }
  });
});


/*function jadi(ke, nilai){
  
  }*/
</script>

<?php
} ?>

