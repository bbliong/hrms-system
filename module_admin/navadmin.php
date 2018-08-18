			<div id="sidebar-wrapper">
					<div class="btn-toogle">
						<div class="kiri"></div>
						<div class="kanan"><a href="#" id="menu-toggle"><img src="img/toggle.png" ></a></div>
					</div>
				<?php 
					$user = $_SESSION['username'];
					$cek1 = $konek ->query("select emp_no,seq from mdl_tgid where user_id='$user'");
					$cek2 = $cek1 -> fetch_array();
					if (empty($cek2['seq'])){
						echo "<img class='img_user' src='img/default.png'>";
					}
					else {
						?>
					<img class = "img_user" src="img/img_pic_user/<?php gambar_user(); }?>">
					<div class="user_id">
						<h3>User ID : <?php user_id() ?> </h3> 
					</div>
			<ul class="sidebar-nav">
				<li><a href="index.php">&nbsp  <span class="glyphicon glyphicon-home"></span>&nbsp  Dashboard </a></li>
				<li><a href="departement.php">&nbsp  <span class="glyphicon glyphicon-briefcase"></span>&nbsp  Departement</a></li>
				<li><a href="employee.php"> &nbsp <span class="glyphicon glyphicon-user"></span>&nbsp  Employee</a></li>
				<li><a href="#">&nbsp <span class="glyphicon glyphicon-usd"></span>&nbsp Salary</a></li>
				<li><a href="#">&nbsp <span class="glyphicon glyphicon-gift"></span>&nbsp Award</a></li>
				<li><a href="#">&nbsp  <span class="glyphicon glyphicon-modal-window"></span>&nbsp  Fasilities</a></li>
				<li><a href="#">&nbsp <span class="glyphicon glyphicon-hourglass"></span>&nbsp History</a></li>
				<li><a data-toggle="modal" data-target="#user_setting">&nbsp <span class="glyphicon glyphicon-cog"></span>&nbsp User Setting</a></li>
			</ul>
		</div>
