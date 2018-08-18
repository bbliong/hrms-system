<?php
include("../config/koneksi.php");
$query = ("delete from mdl_tgemp where emp_no='".$_GET['emp_no']."'");
$delete = $konek -> query($query);

if($delete) {
	header("location:../employee.php?pesan=berhasil");
}
else {
	header("location: ../employee.php?pesan=gagal");
}
?>