

<?php
	session_start();
	$con=mysqli_connect("localhost","root","","test");
	
	
	$id=intval($_GET['id']);
	$File=$_GET['File'];
	
    $sql = "DELETE FROM `application` WHERE `id` = $id";

	if(mysqli_query($con,$sql)){
		
		header("Location: ../developer.php?msg=succes");
		
	}
	else{
		echo "Error";
	}	
	
?>