<?php
class DBController {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "test";
	private $conn;
	
        function __construct() {
        $this->conn = $this->connectDB();
	}	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
    function runQuery($query) {
                $result = mysqli_query($this->conn,$query);
                while($row=mysqli_fetch_assoc($result)) {
                $resultset[] = $row;
                }		
                if(!empty($resultset))
                return $resultset;
	}
}
?>


<?php
$db_handle = new DBController();
?>

<html>
<head>
<title>Apps Mirror</title>
    <!-- Font -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
    <!-- Font -->
    <!-- CSS -->
    <link rel="stylesheet" href="CSS/style.css" />
	<link rel="stylesheet" href="CSS/header.css" />
	<link rel="stylesheet" href="CSS/allpost.css" />
	
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
            <li><a class="active" href="apps.php">APPS</a></li>
            <li><a href="games.php">GAMES</a></li>
            <li><a href="categories.php">CATEGORIES</a></li>
			<li><a href="login.php?msg=">LOGIN</a></li>
			<li><a href="search.php"> <i class="fa fa-search" aria-hidden="true"></a></i>
        </ul>
     </nav>
</header>

<br>

  	<div class="container">
	    <br>
    		<div class="row">
			
		<?php
		$query = $db_handle->runQuery("SELECT * FROM application WHERE Type='App' ORDER BY id DESC");
		if (! empty($query)) {
			foreach ($query as $key => $value) {
				?>

						<div class="col-md-4">
							<div class="car-wrap rounded ">
								<div class="img rounded d-flex align-items-end" style="background-image: url(Uploadicons/<?php echo $query[$key]["Icon"] ; ?>);">
								</div>
								<div class="text">
									<h2 class="mb-0"><a href="#"> <?php echo $query[$key]["Name"] ; ?> </a></h2>
									<div class="d-flex mb-3">
										<span class="cat"> </span>
										<p> <?php echo $query[$key]["Discription"] ; ?> <br> </p>
										
										<p>( <?php 
										$B = $query[$key]['Platform']; 
										
										if($B=="ios"){
											$os = "IOS";
										}
										else if($B=="android"){
											$os = "Android";
										}
										echo $os ;																				
										 
										?> )</p>
										
									</div>
									<p class="d-flex mb-0 d-block">							 

                                    <a href="details.php?file_id=<?php echo $query[$key]["id"];?>&page=apps" class="btn btn-secondary py-2 ml-1">Details</a>
									</p>
								</div>
							</div>
						</div>
		<?php
			}
		}
		?>
			
				
			</div>			
	</div>		

 



<!-- JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- JS -->

<!--jquery cdn link-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!--isotope js link-->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="JAVA/java.js"></script>
  
</body>
</html>
