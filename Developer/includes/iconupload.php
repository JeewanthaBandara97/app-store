

<?php
session_start();
$con=mysqli_connect("localhost","root","","test");

if (isset($_POST["submit"]))
 {
	 #retrieve file title
 	$id = $_POST['id'];  	
		
	#file name with a random number so that similar dont get replaced
	 $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
	#temporary file name to store file
	$tname = $_FILES["file"]["tmp_name"];
   
	 #upload directory path
	$uploads_dir = '../../Uploadicons';
	#TO move the uploaded file to specific location
	move_uploaded_file($tname, $uploads_dir.'/'.$pname);
 
	#sql query to insert into database
	$sql = "UPDATE application SET Icon='$pname' WHERE id='$id' ";
 
	if(mysqli_query($con,$sql)){
		
		header("Location: ../developer.php?msg=succes");
		
	}
	else{
		echo "Error";
	}
}
?>