



<?php
 
$link = mysqli_connect("localhost", "root", "", "test");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


 
// Attempt update query execution
   $id=$_GET['id'];  
   
   $sql = " UPDATE user SET Status='Enable' WHERE id='$id' ";
   
if(mysqli_query($link, $sql)){
    header("Location: ../developers.php?msg=succes");

} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>