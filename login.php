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
        <label class="logo">APPSMIRROR</label>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="apps.php">APPS</a></li>
            <li><a href="games.php">GAMES</a></li>
            <li><a href="categories.php">CATEGORIES</a></li>
			<li><a class="active"  href="login.php?msg=">LOGIN</a></li>
        </ul>
     </nav>
</header>
<br>

<div class="wrapper">
  <div class="title">
     <font size="6">LOGIN</font>
  </div> 
  <div class="form">
      
      
<form name="insert-form" id="contact-form"  action="includes/login.php" method="POST">     
	<br>

	<br>
	    <?php $msg=$_GET['msg'];?>

		
		<div class="inputfield">
		  <label>Email</label>
		  <input type="text" name="email" class="input" placeholder="" required>
		</div>    	
		<div class="inputfield">
		  <label>Password</label>
		  <input type="password" name="password" class="input" placeholder="" required>
		</div>	 
		<font color="red">-<?php echo $msg ?></font>
		
		<br><br>
		<div class="inputfield">
		<input type="submit" name="submit" value="Login" class="btn">
		</div>
		<div class="inputfield">    
		<input type="button" value="Cancel" class="btn" onclick="window.location.href = 'index.php';">   
		</div>

		
		
		<p>Not a Member? <a href="reg.php">Sign up</a></p>
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
