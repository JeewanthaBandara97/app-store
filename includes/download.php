





<?php

$conn = mysqli_connect("localhost","root","","test");


if(isset($_GET['file_id'])){
	$id = $_GET['file_id'];
	
	$sql = "SELECT * FROM application WHERE id = $id";	
	$result = mysqli_query($conn,$sql);
	
	$file = mysqli_fetch_assoc($result);
	$filepath = '../Uploadapplications/' .$file['File'];
	
	if(file_exists($filepath))
	{
		
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');						
		header('Content-Disposition: attachment; filename='.basename($filepath));		
		header('Expires: 0');		
		header('Cache-Control: must-revalidate');		
		header('Pragma:public');		
		header('Content-Length:' .filesize('../Uploadapplications/'.$file['File']));		
		readfile('../Uploadapplications/' .$file['File']);
		
		
		$newCount = $file['Downloads'] + 1;		
		$updateQuery = "UPDATE application SET Downloads=$newCount WHERE id=$id";		
		mysqli_query($con,$updateQuery);		
		exit;		
	}
	header("Location: ../index.php");
}
?>


<a href="../index.php">Back</a>







