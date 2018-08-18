<?php

if (isset($_GET['update'])){
	if($_GET['update'] == "berhasil"){
							echo "	 <div class='alert alert-success alert-dismissable' role='alert'>
		                	<button class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
		                    <strong>Update Complete</strong> </div>";}
						else  {
							echo "	<div class='alert alert-danger alert-dismissable' role='alert'>
		                	<button class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
		                    <strong>Failed to Update</strong></div>";}
}
else {

}
?>