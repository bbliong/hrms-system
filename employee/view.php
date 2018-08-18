					<?php
					if (isset($_SESSION['validasi'])){
					if (isset($_GET['pesan'])){
						if ($_GET['pesan'] == 'berhasil'){
							echo "	 <div class='alert alert-success alert-dismissable' role='alert'>
		                	<button class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
		                    <strong>Berhasil Hapus Karyawan</strong> </div>";}
						else  {
							echo "	<div class='alert alert-danger alert-dismissable' role='alert'>
		                	<button class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
		                    <strong>Gagal Hapus Karyawan</strong></div>";}
						}
							$n1 = "adm";
							$n2 = "H-p";	
							$cek1 = $_SESSION['module'];
							if($cek1 == $n1 || $cek1 == $n2  ){
							echo "<div class='bg_employee' >
							<div style='width:100%;height :80px;' >
								<div class='left_employee' style='width : 49%; float:;left;' >
								<a href='index.php?module=employee' class='btn btn-primary' style ='margin:3% 3% 2% 	10%;'><span class='glyphicon glyphicon-plus' ></span>add employee</a></div>
							
							</div>

							";}
							$perpage = 10;
							$page  = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
							$start = ($page > 1) ? ($page * $perpage ) - $perpage : 0 ;

							$employee2 = $konek ->query("select EMP_NO, EMP_NAME,JOB_DESC, GRADE , USER_ID from mdl_tgemp order by emp_no desc limit $start,$perpage ");
							$employee  = $konek -> query("select emp_no, emp_name,job_desc, grade from mdl_tgemp");
							$jumlah    = $employee -> num_rows;

							$pages	   = ceil($jumlah/$perpage);

							echo "<div class='table-responsive'>";
							echo "<table class='table table-hover' style='background-color:rgba(255,255,255,.9);width:90%; margin-left :5%;'>

								<thead class='thead-inverse'>
									<tr>
										<th align=center> No </th>
										<th align=center> Emp Number </th>
										<th align=center> Emp Name </th>
										<th align=center> User Id </th>
										<th align=center> Job Description </th>
										<th align=center> Grade </th>
										<th align=center> Action </th>
									</tr>
								</thead>
								<tbody>";
									$i = $start;
									while($ambil = $employee2 -> fetch_array()){
									$i = $i +1;
										echo "<tr>";
										echo "<th align=center>". $i."</th>";
										echo "<th align=center>". $ambil['EMP_NO']."</th>";
										echo "<th align=center>". $ambil['EMP_NAME']."</th>";
										echo "<th align=center>". $ambil['USER_ID']."</th>";
										echo "<th align=center>". $ambil['JOB_DESC']."</th>";
										echo "<th align=center>". $ambil['GRADE']."</th>";
										$emp = $ambil['EMP_NO'];
										echo "<th align=center> <a href='employee.php?emp_no=$emp' class='btn btn-success'><span class='glyphicon glyphicon-edit'>&nbspEdit</span></a>&nbsp<a  href='employee/delete_employee.php?emp_no=$emp' class='btn btn-danger'><span class='glyphicon glyphicon-trash'>&nbspDelete</span></a>"."</th>";
										echo "</tr>";

									}
							
							echo "</tbody></table></div>";
							echo "<ul class='pagination' style='float:right; margin-right: 40;'>";
										$a = 1;
										$b = (int)$_GET['halaman'] =1 ?1 :(int)$_GET['halaman'] -1;
										$c = (int)$_GET['halaman'] =$pages? $pages:(int)$_GET['halaman']+1;
										echo"<li><a href ='?halaman=$b'>&laquo;</a></li>";
										for ($a; $a<=$pages; $a++){
										echo " <li><a href='?halaman=$a'> $a</a></li>";}
										echo"<li><a href ='?halaman=$c'>&raquo;</a></li>";
							echo "</ul></div>";
						 } //tutup if validasi
						 else {
						 	header("location:../	index.php");
						 }
					?>

					