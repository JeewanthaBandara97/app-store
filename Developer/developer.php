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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Apps Mirror -  Developer</title>
    <!-- Font -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- Font -->
    <!-- CSS -->
    <link rel="stylesheet" href="CSS/style.css" />
	<link rel="stylesheet" href="CSS/header.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="CSS/dc.css" />
	<link rel="stylesheet" href="CSS/tble.css" />	
    <link rel="stylesheet" href="CSS/form.css" />	
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
        <ul>
        </ul>
     </nav>
</header>

<div class="container">

<table align="center" border="0" width="100%">
    <tr>      
        <th class="LO"><a href="includes/logout.php">Log Out</a></th> <!-- <a href="logout.php"> -->
    </tr>
</table>  
	
 
<style>

</style>

<div class="cc" id="">
		 <div class="row">
		  <div class="leftcolumn">
			<div class="card" style="overflow-x:auto;">
			            <h3><i class="fa fa-cog fa-spin fa-1x fa-fw"></i><span class="sr-only">Loading...</span>Your Apps</h3>
                        <table class="table table-striped table-bordered table-hover" width="100%" id="table-id">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>App Name</th>
                                    <th>Discription</th>
                                    <th>Version</th>
                                    <th>Platform</th>									
									<th>Type</th>
									<th>Category</th>									
									<th align="center"> <font color="red">Upload Icon</font></th>
									<th align="center"> <font color="red">Option </font></th>	
                                </tr>
                            </thead>
                            <tbody>
										<?php
										$did = $_SESSION['user_data']['id']; 
										$qury=mysqli_query($con,"SELECT * FROM application WHERE Type='App' AND Did='$did' ");
										while($resalt=mysqli_fetch_array($qury)){
										?>							
                                <tr>
                                    <td><?php echo $resalt['id']; ?></td>
									<td><?php echo $resalt['Name']; ?></td>
									<td><?php echo $resalt['Discription']; ?></td>
									<td><?php echo $resalt['Version']; ?></td>
									<td><?php echo $resalt['Platform']; ?></td>
									<td><?php echo $resalt['Type']; ?></td>
									<td><?php echo $resalt['Category']; ?></td>	
									
                                    <td align="center">	
                                         <a href="iconupload.php?id=<?php echo $resalt['id']; ?>">Select</a>									
								    </td>									
                                    <td align="center">	
                                         <a href="includes/delete2.php?id=<?php echo $resalt['id']; ?>&File=<?php echo $resalt['File']; ?>&appid=<?php echo $resalt['id']; ?>">Remove</a>									
								    </td>									
                                </tr>                               					
                            </tbody>
										<?php
										}
										?>
                        </table>		  		  			  
			</div>
			<div class="card" style="overflow-x:auto;">
			            <h3><i class="fa fa-cog fa-spin fa-1x fa-fw"></i><span class="sr-only">Loading...</span>Your Games</h3>
                        <table class="table table-striped table-bordered table-hover" width="100%" id="table-id">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>App Name</th>
                                    <th>Discription</th>
                                    <th>Version</th>
                                    <th>Platform</th>									
									<th>Type</th>
									<th>Category</th>										
									<th align="center"> <font color="red">Upload Icon</font></th>
									<th align="center"> <font color="red">Option </font></th>	
                                </tr>
                            </thead>
                            <tbody>
										<?php
										$did = $_SESSION['user_data']['id']; 
										$qury=mysqli_query($con,"SELECT * FROM application WHERE Type='Game' AND Did='$did' ");
										while($resalt=mysqli_fetch_array($qury)){
										?>								
                                <tr>
                                    <td><?php echo $resalt['id']; ?></td>
									<td><?php echo $resalt['Name']; ?></td>
									<td><?php echo $resalt['Discription']; ?></td>
									<td><?php echo $resalt['Version']; ?></td>
									<td><?php echo $resalt['Platform']; ?></td>
									<td><?php echo $resalt['Type']; ?></td>
									<td><?php echo $resalt['Category']; ?></td>										
                                    <td align="center">	
                                         <a href="iconupload.php?id=<?php echo $resalt['id']; ?>">Select</a>									
								    </td>									
                                    <td align="center">								     
                                         <a href="includes/delete2.php?id=<?php echo $resalt['id']; ?>&File=<?php echo $resalt['File']; ?>">Remove</a>		
								    </td>									
                                </tr>  
										<?php
										}
										?>								
                            </tbody>
                        </table>				  




			</div>
			<div class="card">
			 <h3><i class="fa fa-cog fa-spin fa-1x fa-fw"></i><span class="sr-only">Loading...</span>Upload New Application</h3>
			    <center>
				
				  <div class="wrapper">
                  <div class="form">
				  							  					  
                  <form name="insert-form" id="contact-form" action="includes/upload.php" method="POST" enctype="multipart/form-data">
				  
	
					
				    <div class="inputfield">
					  <label>Name:</label><br>
					  <input type="text" id="" name="name" value="" class="input" placeholder="Whatsapp" required><br>
					</div> 
				    <div class="inputfield">
					  <label>Discription:</label><br>
					  <input type="textarea" id="" name="discription" value="" class="input" placeholder="FREE messaging app" required><br>
					</div> 
				    <div class="inputfield">
					  <label>Version:</label><br>
					  <input type="text" id="" name="version" value="" class="input" placeholder="1.0" required><br>
					</div> 
					<div class="inputfield">
					  <label>Platform</label>
					  <div class="custom_select">
						<select id="select1" name="platform" required>
						  <option selected disabled>Select</option>
						  <option value="android">Android</option>
						  <option value="ios">ios</option>
						</select>
					  </div>
				   </div> 
					<div class="inputfield">
					  <label>Type</label>
					  <div class="custom_select">
						<select id="select2" name="type" required>
						  <option selected disabled>Select</option>
						  <option value="App">Application</option>
						  <option value="Game">Game</option>
						</select>
					  </div>
				   </div>
				   
					<div class="inputfield">
					  <label>Category</label>
					  <div class="custom_select">
						<select id="select3" name="cat" required>
						  <option selected disabled>Select</option>

						  
						  <option value="Action">Action</option>
						  <option value="Adventure">Adventure</option>
						  <option value="Arcade">Arcade</option>
						  <option value="Antivirus">Antivirus</option>
						  <option value="RPG">Board</option>
						  <option value="Simulation">Books</option>
						  <option value="Casual">Casual</option>
						   <option value="Sports">Casino</option>
						   <option value="Social">Dating</option>
						  <option value="Education">Education</option>
						  <option value="Strategy">Fashion</option>
						  <option value="Lifestyle">Lifestyle</option>
						  <option value="Media/Video">Media & Video</option>
						  <option value="Music/Audio">Music & Audio</option>
						  <option value="News">News</option>
						  <option value="Personalization">Personalization</option>
						  <option value="Photography">Photography</option>
						  <option value="Productivity">Productivity</option>
						  <option value="Puzzle">Puzzle</option>
						  <option value="Racing">Racing</option>
						  <option value="RPG">RPG</option>
						  <option value="Sports">Sports</option>
						  <option value="Simulation">Simulation</option>
						  <option value="Strategy">Strategy</option>
						  <option value="Social">Social</option>
						  <option value="Tools">Tools</option>	
						  
					 
						
						 
						 						  
						 						  
						  
						</select>
					  </div>
				   </div> 	

				   
				    <div class="inputfield">
					  <label>Select File:</label><br>
					  <input type="file" id="" name="file" value="" class="input" required><br>
					</div> 
 			
					
				    <div class="inputfield">
 
					  <input type="hidden" id="" name="dname" value=" <?php echo $_SESSION['user_data']['name']; ?>" class="input"><br>
					</div> 
				    <div class="inputfield">
 
					  <input type="hidden" id="" name="did" value=" <?php echo $_SESSION['user_data']['id']; ?>" class="input"><br>
					</div> 

					
                         <br>					               
					  <div class="inputfield">
						<input type="submit" name="submit" value="Upload"  class="btn">
					  </div>				  
				  </form>
			      </div>
				  </div>
				  
				  
				  
				</center>	
			</div>			
		  </div>
		  
		  <div class="rightcolumn">
			<div class="card">
			  <h2>Your Details</h2>
			  <!--<div class="fakeimg" style="height:100px;">Image</div>-->
			  <p>Name : <?php echo $_SESSION['user_data']['name']; ?></p>
			  <p>Email : <?php echo $_SESSION['user_data']['email']; ?></p>
			  
			  <p><a href="chngpw.php?id=<?php echo $_SESSION['user_data']['id']; ?> & email=<?php echo $_SESSION['user_data']['email']; ?>">Change Password</a></p>
			  
				<?php	
				  $did = $_SESSION['user_data']['id']; 
				  $sql = "SELECT COUNT(`name`) AS name FROM `application` WHERE Did='$did'";
				  $result = mysqli_query($con, $sql);
				  $row = mysqli_fetch_object($result) ;
				  echo "Total Number of Application You Uploaded : " . $row->name;
				  mysqli_close($con);
				  ?>	  	  
			</div>

		  </div>
		</div>
</div>	






</div>

  <!-- JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- JS -->

  
</body>
</html>
