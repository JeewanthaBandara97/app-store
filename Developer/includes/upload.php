

<?php
session_start();
$con=mysqli_connect("localhost","root","","test");

if (isset($_POST["submit"]))
 {
	 #retrieve file title
		$dname = $_POST["dname"];
		$did = $_POST["did"];		
		$name = $_POST["name"];
		$discription = $_POST["discription"];
		$version = $_POST["version"];
		$platform = $_POST["platform"];
		$type = $_POST["type"];
		$cat = $_POST["cat"];		
		
	#file name with a random number so that similar dont get replaced
	 $pname = rand(1000000000000000,100000000000000000)."-".$_FILES["file"]["name"];
 
	#temporary file name to store file
	$tname = $_FILES["file"]["tmp_name"];
   
	 #upload directory path
	$uploads_dir = '../../Uploadapplications';
	#TO move the uploaded file to specific location
	move_uploaded_file($tname, $uploads_dir.'/'.$pname);
 
	#sql query to insert into database
	$sql = "INSERT into application(Name,Discription,Version,Platform,Type,Category,File,DeveloperName,Did,Icon) VALUES('$name','$discription','$version','$platform','$type','$cat','$pname','$dname','$did','default.jpg')";
 
	if(mysqli_query($con,$sql)){
		
			echo "File Sucessfully uploaded";
			  echo '<script language="javascript">';
               echo 'window.location.href=" ../developer.php";';
	          echo '</script>';
	}
	else{
		echo "Error";
	}
}
?>