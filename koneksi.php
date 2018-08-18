<?php

$username = "root";
$password = "";
$host 	  = "localhost";
$database = "hrms_system";

$konek = new mysqli($host, $username, $password, $database);
if (!$konek) {
	echo " Cek kembali database";
}

?>