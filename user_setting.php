<form action="config/user_setting_proses.php" method="POST" enctype="multipart/form-data">
<div class="modal fade" id="user_setting" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">User Setting</h4>
      </div>
      <div class="modal-body">
          <div style="float : left;margin-top: 20px; width : 30%;margin-left: 5%;">
      <?php 
          $user = $_SESSION['username'];
          $cek1 = $konek ->query("select emp_no,seq from mdl_tgid where user_id='$user'");
          $cek2 = $cek1 -> fetch_array();
          if ( empty($cek2['seq'])){
            echo "<img class='img_user' src='img/default.png'>";
          }
          else {
            ?>
              <img class = "img_user" src="img/img_pic_user/<?php gambar_user(); echo "\">"; }?>                
           <div class="input-group">
                       <label class="input-group-btn" style="float:left;margin-left: 25%;">
                       <h4 class="btn btn-info" style="cursor:pointer;border-radius:5px;">Change </h4> <input type="file" id="berkas1" style="display: none;" name="gambar" multiple accept="image/*">
                      </label>
                      <input type="text" class="form-control" style="color:#222;" placeholder="Upload your photo" name="foto" readonly>
                  </div>
              </div>
            </div>
                <div style="float:right;width:55%;margin-top: 100px">
                  <?php
                       $user = $_SESSION['username'];
                      $ambildata = $konek -> query("select * from mdl_tsuser where user_id='$user'");
                        $keluarindata = $ambildata -> fetch_array();
                  ?>
                  <h4 style="display: inline;" > User ID  &nbsp&nbsp&nbsp <p style="display: inline;"> :</p> 
                  <?php  echo $keluarindata['user_id']; ?></h4>
                   
                    </br></br>
                  <h4 style="display: inline;" > Password <p style="display: inline;"> : </p>************** <a onclick="pass_setting()"  class="btn btn-info"> Change </a>  </h4>
                  <input type="password"  class="input_employee pass"  name="password" maxlength="30"  style="width:300px; border : 1px solid #222;display:none;" placeholder="Password">
                  <input type="password"  class="input_employee pass"  name="repassword" maxlength="30" style="width:300px;border : 1px solid #222;display:none;" placeholder="RE-Password">
                  <input type="submit" value="SAVE" name="simpan" style="display:block" class="btn btn-success">
             </div> 

      <div class="modal-footer">
      </div>
    </div>  
  </div>
</div>
</form>