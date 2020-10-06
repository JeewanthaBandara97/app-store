<?php
session_start();
$con=mysqli_connect("localhost","root","","test");
if(!$con){
	die("Failed to Establish Database Connection");

}

if(isset($_SESSION['user_data'])){
	if($_SESSION['user_data']['usertype']!=1){
		header("Location: developer.php");
	}
}
else{
	header("Location: login.php?error=unauthorized access");
}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apps Mirror -  Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   
   <link rel="icon" type="image/ico" href="assets/img/favicon2.ico" />	
     <link rel="stylesheet" href="assets/css/form.css">    
   
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="admin.php">
                        <img src="assets/img/logo2.png" width="50"/>
                    </a>
                </div>
              
                 <span class="logout-spn" >
                  <a href="#" style="color:#fff;"></a>  
                </span>
            </div>
        </div>
		
		
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				
                    <li>
                        <a href="admin.php"><i class="fa fa-desktop "></i> Dashboard </a>
                    </li>
                    <li>
                        <a href="developers.php"><i class="fa fa-user"></i>Developers</a>
                    </li>					
                    <li>
                        <a href="apps.php" ><i class="fa fa-table "></i>Apps</a>
                    </li>
                    <li>
                        <a href="games.php" ><i class="fa fa-table "></i>Games</a>
                    </li> 
                    <li class="active-link">
                        <a href="other.php" ><i class="fa fa-tasks "></i>Other</a>
                    </li>
  					<br>					
					<center>
                        <a href="includes/logout.php" >LOGOUT</a>
                    </li>
                </ul>
            </div>
        </nav>
		
		
		
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Other Task </h2> 



<div class="wrapper">
  <div class="title">
	 <font size="6">Upload Image</font>
  </div>
  
  <div class="form">
							  
<?php $image=$_GET['image']; ?>								  
			

<form name="insert-form" id="contact-form"  action="includes/banner-upload.php?image=<?php echo $image ?>" method="POST" enctype="multipart/form-data">     
	<br>
		<?php $id=intval($_GET['id']); ?>
		<?php $image=$_GET['image']; ?>

					<?php
		            $image=$_GET['image']; 
					
					$qury=mysqli_query($con,"SELECT $image FROM banner ");
					while($resalt=mysqli_fetch_array($qury)){
					?>	

					<center>					 
					  <img src="../bannerimg/<?php echo $resalt['$image']; ?>" width="300" height="200" style="border:solid 1px #000" class="input">
					</center>					
                   
				   
					<?php
					}
					?>		
		
		
		
 		<div class="inputfield">
		  <input type="hidden" name="id" class="input" value="<?php echo $id ?>" placeholder="" required>
		</div> 
		
		<div class="inputfield">
		  <input type="hidden" name="id" class="input" value="<?php echo $id ?>" >
		</div>
		
		
 		<div class="inputfield">
		  <input type="hidden" name="image" class="input" value="<?php echo $image ?>" placeholder="" required>
		</div> 
		
		<div class="inputfield">
		  <input type="hidden" name="image" class="input" value="<?php echo $image ?>" >
		</div>


		
		<div class="inputfield">
		  <label>Select Image:</label><br>
		  <input type="file" id="" name="file" value="" class="input"><br>
		</div> 	


		
		<div class="inputfield">
		<input type="submit" name="submit" value="Upload" class="btn">
		</div>
		<div class="inputfield">    
		<input type="button" value="Cancel" class="btn" onclick="window.location.href = 'other.php';">   
		</div>

</form>
		
	
	  </div>
</div>
						
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
				 						
                 <!-- /. ROW  -->           
             </div>
             <!-- /. PAGE INNER  -->
         </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12" >
                    &copy;  2020  | Design by: <a href="" style="color:#fff;"  target="_blank">www.NSBM.com</a>
                </div>
        </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
