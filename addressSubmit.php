<?php  
require_once("db.php");

	$address=$_GET['address'];
	if(!mysqli_query($connection,"INSERT into location VALUES('','$address',now())")){
		die(mysqli_error($connection));
	}

?>