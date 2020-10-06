



<?php
 
$link = mysqli_connect("localhost", "root", "", "test");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt update query execution
   $newpassword = $_POST['newpassword'];
   $id = $_POST['id'];   
   
   $sql = " UPDATE user SET Password='$newpassword' WHERE id='$id' ";
   
if(mysqli_query($link, $sql)){
	
	header("Location: ../developer.php?msg=succes-Records-were-updated-successfully");

} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>