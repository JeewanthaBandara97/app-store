
<?php

$con=mysqli_connect("localhost","root","","test");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST["submit"]))
 {
	 #retrieve file title
		$email = $_POST["email"];
		$name = $_POST["name"];		
		$review = $_POST["review"];
		$appid = $_POST["appid"];
        $date = date('Y-m-d');		
		$did = $_POST["did"];
 
	#sql query to insert into database
	$sql = "INSERT into review(Email,Name,Review,Appid,Date,Did) VALUES('$email','$name','$review','$appid','$date','$did' )";
 
	if(mysqli_query($con,$sql)){

		header("Location: ../index.php?msg=succes");
		
	}
	else{
		echo "Error";
	}
}
?>