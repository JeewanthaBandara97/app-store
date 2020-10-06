

<?php
	session_start();
	$conn=mysqli_connect("localhost","root","");
	$db = mysqli_select_db($conn,'test');
	
	
	$id=$_GET['id'];
	 
	 
	$query = "SELECT * FROM `application` WHERE Did = '$id'";	
	$query_run = mysqli_query($conn,$query);
	
	while($row = mysqli_fetch_array($query_run))
	{	 
	 
	unlink("../../Uploadapplications/".$row['File']);
	
		$sql1 = "DELETE FROM `application` WHERE `Did` = $id" ;
		$sql2 = "DELETE FROM `user` WHERE `id` = $id" ;
		$sql3 = "DELETE FROM `review` WHERE `Did` = $id" ;
		
		if(mysqli_query($conn,$sql1)){
			
			if(mysqli_query($conn,$sql2)){
				
					if(mysqli_query($conn,$sql3)){
						
					header("Location: ../developers.php?msg=succes");
					
					}
					else{
						header("Location: ../developers.php?msg=Error");
					}					
		
			}
			else{
				header("Location: ../developers.php?msg=Error");
			}			
		}
		else{
			header("Location: ../developers.php?msg=Error");
		}
		
	}
	
?>