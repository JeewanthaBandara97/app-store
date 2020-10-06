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
				
                    <li class="active-link">
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
                    <li>
                        <a href="other.php" ><i class="fa fa-tasks "></i>Other</a>
                    </li>					
					<br>
					<center>
					<li>
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
                     <h2></h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                 <div class="row">
				 
				 
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Welcome <?php echo $_SESSION['user_data']['name']; ?>! </strong> Total Summery...<i class="fa fa fa-hand-o-down fa-1x"></i>
                        </div>                      
                    </div>
					
                    <div class="col-md-3 col-sm-3 col-xs-6">
					

                        <h5>Developers </h5>
                        <div class="alert alert-info text-center">
                            <i class="fa fa-users fa-5x"></i>
                            <h3>
 							
							  <?php	
							  $sql = "SELECT COUNT(`id`) AS id FROM `user` WHERE usertype='2'";
							  $result = mysqli_query($con, $sql);
							  $row = mysqli_fetch_object($result) ;
							  echo $row->id;							   
							  ?>							
							</h3>
                             
                        </div>
                    </div>						
	                <div class="col-md-3 col-sm-3 col-xs-6">
                        <h5>All Apps</h5>
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                            <div class="panel-body">
                                <i class="fa fa-bar-chart-o fa-5x"></i>
                                <h3>
								
							  <?php	
							  $sql = "SELECT COUNT(`id`) AS id FROM `application` WHERE Type='App'";
							  $result = mysqli_query($con, $sql);
							  $row = mysqli_fetch_object($result) ;
							  echo $row->id;
							  ?>
							  
								</h3>
                            </div>
                            <div class="panel-footer back-footer-blue">
                                                           
                            </div>
                        </div>
                    </div>
	                <div class="col-md-3 col-sm-3 col-xs-6">
                        <h5>All Games</h5>
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                            <div class="panel-body">
                                <i class="fa fa-bar-chart-o fa-5x"></i>
                                <h3>
								
							  <?php	
							  $sql = "SELECT COUNT(`id`) AS id FROM `application` WHERE Type='Game'";
							  $result = mysqli_query($con, $sql);
							  $row = mysqli_fetch_object($result) ;
							  echo $row->id;
						 
							  ?>
							  
							    </h3>
                            </div>
                            <div class="panel-footer back-footer-blue">
                                                        
                            </div>
                        </div>
                    </div>			
	                <div class="col-md-3 col-sm-3 col-xs-6">
                        <h5>All Android Applications</h5>
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                            <div class="panel-body">
                                <i class="fa fa fa-android fa-5x"></i>
                                <h3>
								
							  <?php	
							  $sql = "SELECT COUNT(`id`) AS id FROM `application` WHERE Platform='android'";
							  $result = mysqli_query($con, $sql);
							  $row = mysqli_fetch_object($result) ;
							  echo $row->id;
							  ?>
							  
							    </h3>
                            </div>
                            <div class="panel-footer back-footer-blue">
                                                          
                            </div>
                        </div>
                    </div>						
	                <div class="col-md-3 col-sm-3 col-xs-6">
                        <h5>All ios Applications</h5>
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                            <div class="panel-body">
                                <i class="fa fa fa-apple fa-5x"></i>
                                <h3>
								
							  <?php	
							  $sql = "SELECT COUNT(`id`) AS id FROM `application` WHERE Platform='ios'";
							  $result = mysqli_query($con, $sql);
							  $row = mysqli_fetch_object($result) ;
							  echo $row->id;
							  mysqli_close($con);
							  ?>
							  
							    </h3>
                            </div>
                            <div class="panel-footer back-footer-blue">
                                                          
                            </div>
                        </div>
                    </div>									
                </div>




				
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
