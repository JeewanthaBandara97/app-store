<?php
session_start();
$con=mysqli_connect("localhost","root","","test");
$id=intval($_GET['file_id']);
$page=$_GET['page'];


$qury=mysqli_query($con,"SELECT * FROM application WHERE id='$id' ");

while($resalt=mysqli_fetch_array($qury)){
	
?>
Page=From <?php echo $page; ?>
<br><br>

Appname=<?php echo $resalt['Name']; ?>
<br>
Version=<?php echo $resalt['Version']; ?>
<br>
Discription=<?php echo $resalt['Discription']; ?>
<br>
<a href="../Uploadapplications/<?php echo $resalt['File']; ?>" target="_blank" download>Download</a>
<br>
<a href="../<?php echo $page; ?>.php">Back</a>
<br>


<?php
}
?>



