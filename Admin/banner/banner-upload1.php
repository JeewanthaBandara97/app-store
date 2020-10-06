

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
	$uploads_dir = '../../bannerimg';
	#TO move the uploaded file to specific location
	move_uploaded_file($tname, $uploads_dir.'/'.$pname);
 
	#sql query to insert into database
	$sql = "UPDATE banner SET Image1='$pname' WHERE id='$id' ";
 
	if(mysqli_query($con,$sql)){
			echo "File Sucessfully uploaded";
			    echo '<script language="javascript">';
                echo 'window.location.href=" ../other.php";';
	            echo '</script>';
	}
	else{
		echo "Error";
	}
}
?>