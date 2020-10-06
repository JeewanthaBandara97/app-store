<?php
session_start();
$con=mysqli_connect("localhost","root","","test");
if(!$con){
	die("Failed to Establish Database Connection");

}

if(isset($_SESSION['user_data'])){
	if($_SESSION['user_data']['usertype']!=2){
		header("Location: admin.php");
	}
}
else{
	header("Location: login.php?error=unauthorized access");
}




?>



<html>
<head>
    <title>Apps Mirror -  Developer</title>
    <!-- Font -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
    <!-- Font -->
    <!-- CSS -->
    <link rel="stylesheet" href="CSS/style.css" />
	<link rel="stylesheet" href="CSS/header.css" />
    <link rel="stylesheet" href="CSS/form.css">  	
    <!-- CSS -->
	
	<link rel="icon" type="image/ico" href="CSS/favicon2.ico" />	
	
	
</head>
<body>


<header id="header">
    <nav>
        <input type="checkbox" name="" value="" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">APPSMIRROR - DEVELOPER</label>
     </nav>
</header>
<br>

<div class="wrapper">
  <div class="title">
     <font size="6">Password Change</font>
  </div> 
  <div class="form">
      
      
<form name="insert-form" id="contact-form"  action="includes/chngpw.php?" method="POST">     
	<br>
	    <?php $id=intval($_GET['id']); ?>
	    <?php $email=$_GET['email']; ?>
		
 		<div class="inputfield">
		  <input type="hidden" name="id" class="input" value="<?php echo $id ?>" placeholder="" required>
		</div>   	
		<div class="inputfield">
		  <label>Email</label>
		  <input type="text" name="email" class="input" value="<?php echo $email ?>" placeholder="" required>
		</div>   		
		<div class="inputfield">
		  <label>Old Password</label>
		  <input type="password" name="oldpassword" class="input" placeholder="" required>
		</div>
		<div class="inputfield">
		  <label>New Password</label>
		  <input type="password" name="newpassword" class="input" placeholder="" required>
		</div>

		
		<div class="inputfield">
		<input type="submit" name="submit" value="Change" class="btn">
		</div>
		<div class="inputfield">    
		<input type="button" value="Cancel" class="btn" onclick="window.location.href = 'developer.php';">   
		</div>

</form>

      </div>
</div>
</div>


<div class="container">
</div>

  <!-- JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- JS -->

  
</body>
</html>
