<?php

include("koneksi.php");

$query = "update mdl_tsautho set grant_by='admin' where user_id=?";
$stmt = $konek ->prepare($query);
$stmt -> bind_param("s", $_POST['user']);
$stmt_ex = $stmt -> execute();

if ($stmt_ex){
	echo "1";
} 
else {
	echo "-1";
}
?>