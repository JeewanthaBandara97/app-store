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
				
                    <li>
                        <a href="admin.php"><i class="fa fa-desktop "></i> Dashboard </a>
                    </li>
                    <li class="active-link" >
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
                     <h2>Developers </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
				  
                  <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h5>Developers</h5>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr><center>
                                    <th>#</th>
                                    <th><center>Name</th>
                                    <th><center>Email</th>
                                    <th><center>Account Create Date</th>
                                    <th><center>Role</th>
                                    <th><center>Account Status</th>									
                                    <th align="center"> <center><font color="red">Option </font></th></center>									
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
										<?php
										$qury=mysqli_query($con,"SELECT * FROM user WHERE usertype ='2' ");	
										
										while($resalt=mysqli_fetch_array($qury)){
										if($resalt['usertype']== 1){
											$type = 'Admin' ;
										}											
										if($resalt['usertype']== 2){
											$type = 'Developer' ;
										}
										if($resalt['usertype']== 3){
											$type = 'User' ;
										} 
										
										?>
										
                                <tr>
                                    <td><?php echo $resalt['id']; ?></td>
									<td><?php echo $resalt['name']; ?></td>
									<td><?php echo $resalt['email']; ?></td>
									<td><?php echo $resalt['created_at']; ?></td>
									<td><?php echo $type; ?></td>
									
                                    <td align="center">	
                                         <b><?php echo $resalt['Status']; ?></b>									
								    </td>										
                                    <td align="center">	
									     <a href="includes/enable.php?id=<?php echo $resalt['id']; ?>">Enable</a><br>
									     <a href="includes/disable.php?id=<?php echo $resalt['id']; ?>">Disable</a><br>
                                         <a href="includes/deleteuser.php?id=<?php echo $resalt['id']; ?>&appid=<?php echo $resalt['id']; ?>">Remove</a>									
										 
								    </td>									
                                </tr>                               					
                            </tbody>
										<?php
										}
										?>
                        </table>
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
