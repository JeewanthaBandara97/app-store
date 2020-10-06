

<?php
session_start();
$con=mysqli_connect("localhost","root","","test");

$id=intval($_GET['file_id']);
$page=$_GET['page'];



$qury=mysqli_query($con,"SELECT * FROM application WHERE id='$id' ");

while($resalt=mysqli_fetch_array($qury)){
?>

<html>
<head>
<title>Apps Mirror</title>
    <!-- Font -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
    <!-- Font -->
    <!-- CSS -->
    <link rel="stylesheet" href="CSS/style.css" />
	<link rel="stylesheet" href="CSS/header.css" />
	<link rel="stylesheet" href="CSS/details-page.css" />	
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
        <label class="logo">APPS MIRROR</label>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="apps.php">APPS</a></li>
            <li><a href="games.php">GAMES</a></li>
            <li><a href="categories.php">CATEGORIES</a></li>
			<li><a href="login.php?msg=">LOGIN</a></li>
			<li><a href="search.php"> <i class="fa fa-search" aria-hidden="true"></a></i>
        </ul>
     </nav>
</header>
<br>


 
<div class="container">
 
   <div class="product-page-main">
         <div class="container">
		 	 
            <div class="row">
               <div class="col-md-12">
                  <div class="prod-page-title">
                     <h2> 
					
                          <ul class="breadcrumb">
 

                            <li><a href="<?php echo $page; ?>.php">Home</a></li>
						
							<li><?php echo $resalt['Name']; ?></li>
                          </ul>
					  
                     </h2>
                      
                  </div>
               </div>
            </div>
					
            <div class="row">
						
              <div class="col-md-2 col-sm-4">
                  <div class="left-profile-box-m prod-page">
                     <div class="pro-img">
                         <div class="check-box"></div>
						 <h3><?php 
										$B = $resalt['Platform']; 
										
										if($B=="ios"){
											$os = "IOS";
										}
										else if($B=="android"){
											$os = "Android";
										}
										echo $os ;								 						 
						  ?></h3>
                     </div>
                     <div class="pof-text">
                       
                       
                     </div>

                  </div>
               </div>
			   
    				   
               <div class="col-md-7 col-sm-8">
                  <div class="md-prod-page">
                     <div class="md-prod-page-in">
                        <div class="page-preview">
                           <div class="preview">
                              <div class="preview-pic tab-content">							  
                                 <div class="tab-pane active" id="pic-1"><img src="Uploadicons/<?php echo $resalt['Icon']; ?>" alt="#" /></div>
							  </div>
                           </div>
                        </div>

                        <div class="btn-dit-list clearfix">
                           <div class="left-dit-p">
                              <div class="prod-btn">
							     <h1><?php echo $resalt['Name']; ?></h1>
                                
                                 <i class="fa fa-star" aria-hidden="true"></i>
								 <i class="fa fa-star" aria-hidden="true"></i>  
								 <i class="fa fa-star" aria-hidden="true"></i>  
								 <i class="fa fa-star" aria-hidden="true"></i>  
								 <i class="fa fa-star" aria-hidden="true"></i>  								 
                                 
                              </div>
                           </div>
                        </div> 
						
                     <div class="description-box">
                        <div class="dex-a">
                           <h4></h4>
                           <p><?php echo $resalt['Discription']; ?></p>
                        </div>
                     </div>
					 <hr>
			 <div class="description-box">
				<div class="dex-a">
				   <h2><b>Reviews</b></h2>                      
				</div>
			 </div>



			 
	 <div class="description-box">
		<div class="dex-a">
				
			<form  name="insert-form" id="contact-form" action="includes/addreview.php" method="POST">
			 
			 <div class="form-group">					  
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" name="email" class="form-control" id=""  value="" required >
			  </div>
			  
			  <div class="form-group">
				<label for="exampleInputEmail1">Name</label>
				<input type="text" name="name"  value="" class="form-control" id="" required >
			  </div> 
			  
			  <div class="form-group">
				<label for="exampleInputPassword1">Review</label>
				<input type="text" name="review"  value="" class="form-control" id="" required >
			  </div>
			  
			  <div class="form-group">					  
			  <input type="hidden" name="appid" class="form-control" value="<?php echo $resalt['id']; ?>" id=""> 
			  </div>
			  <div class="form-group">					  
			  <input type="hidden" name="did" class="form-control" value="<?php echo $resalt['Did']; ?>" id=""> 
			  </div>

			  
			  <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
			</form>
					
		</div>
	 </div>
	 
	 
	 
	 
	 
<br>					 
					<b><hr></b> 
					
				<?php
				
				$aid =  $resalt['id'];
				
				$qury2=mysqli_query($con,"SELECT * FROM review WHERE Appid='$aid'  ");

				while($resalt2=mysqli_fetch_array($qury2)){
				?>
	                 <div class="description-box">
                        <div class="dex-a">						  
							<h4>
							<i class="fa fa-user-circle" aria-hidden="true"></i>
							<b><?php echo $resalt2['Name']; ?></b>
							</h4>
							
							<h5><?php echo $resalt2['Date']; ?></h5>
                           <p><?php echo $resalt2['Review']; ?></p>
						   <hr>
                        </div>					
                     </div>	
				<?php
				}
				?>
					 
                     </div>
					 
					 <br><br>

                  </div> 
               </div>
  			   
               <div class="col-md-3 col-sm-12">
                  <div class="price-box-right">
                     <h4>Version: <?php echo $resalt['Version']; ?></h4>                                         
                     <a href="Uploadapplications/<?php echo $resalt['File']; ?>" target="_blank" download>Download</a>             
                  </div>
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
<?php
}
?>
