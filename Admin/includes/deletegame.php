

<?php
	session_start();
	$conn = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($conn,'test');
	
	
	$id=$_GET['id'];
	$appid=intval($_GET['appid']);	
	
	$query = "SELECT * FROM `application` WHERE id = '$id'";	 
	$query_run = mysqli_query($conn,$query);



	while($row = mysqli_fetch_array($query_run))
	{
		
		unlink("../../Uploadapplications/".$row['File']);
		
		$sql = "DELETE FROM `application` WHERE `id` = $id";
		
			if(mysqli_query($conn,$sql)){
							
					$sql2 = "DELETE  FROM `review` WHERE `Appid` = $appid";
					
					if(mysqli_query($conn,$sql2)){
						
						header("Location: ../games.php?msg=Succes");
					}
					else{
						header("Location: ../games.php?msg=Error");
			        }				
					
			}
			else{
				echo "Error";
			}		
		
	}
	
	
?>