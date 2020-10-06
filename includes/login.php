<?php
session_start();
$con=mysqli_connect("localhost","root","","test");
if(!$con){
	die("Failed to Establish Database Connection");
}

if(isset($_REQUEST['email']) && isset($_REQUEST['password'])){

	//mysqli real escape prevent from sql injection which filter the user input
	$email=mysqli_real_escape_string($con,$_REQUEST['email']);
	$password=mysqli_real_escape_string($con,$_REQUEST['password']);
	
	$qr=mysqli_query($con,"select * from user where email='".$email."' and password='".$password."' and Status='".Enable."' ");
	
	if(mysqli_num_rows($qr)>0){
		$data=mysqli_fetch_assoc($qr);
		$_SESSION['user_data']=$data;
		if($data['usertype']==1){
			header("Location: ../Admin/admin.php?msg=success");	
		}
		else{
			header("Location: ../Developer/developer.php?msg=success");
		}

	}
	else{
		//header("Location: ../login.php?error=Invalid Login Details");	
		header("Location: ../login.php?msg= Invalid Login Credentials or Account Not Activate Yet");				
	}
}
else{
	//header("Location: ../login.php?error=Please Enter Email and Password");
	header("Location: ../login.php?msg=Invalid Login Credentials");
}

?>