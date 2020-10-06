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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
    <!-- Font -->
    <!-- CSS -->
    <link rel="stylesheet" href="CSS/style.css" />
	<link rel="stylesheet" href="CSS/header.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
            <li><a class="active" href="index.php">HOME</a></li>
            <li><a href="apps.php">APPS</a></li>
            <li><a href="games.php">GAMES</a></li>
            <li><a href="categories.php">CATEGORIES</a></li>
			<li><a href="login.php?msg=">LOGIN</a></li>
			<li><a href="search.php"> <i class="fa fa-search" aria-hidden="true"></a></i>
        </ul>
     </nav>
</header>

<br>

 <!-- BANNER Start -->

<body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">
    <script src="js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 16,
                $SpacingY: 16
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Orientation: 2,
                $NoDrag: true
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            var MAX_WIDTH = 850;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        };
    </script>
    <style>
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        .jssorb131 {position:absolute;}
        .jssorb131 .i {position:absolute;cursor:pointer;}
        .jssorb131 .i .b {fill:#000;fill-opacity:0.6;stroke:#fff;stroke-width:2000;stroke-miterlimit:10;stroke-opacity:0.7;}
        .jssorb131 .i:hover .b {fill:#fff;fill-opacity:.5;stroke:#000;stroke-width:2000;stroke-opacity:0.7;}
        .jssorb131 .iav .b {fill:#fff;stroke:#000;stroke-width:2000;fill-opacity:1;stroke-opacity:1;}
        .jssorb131 .i.idn {opacity:0.3;}
		
        .jssora092 {display:block;position:absolute;cursor:pointer;}
        .jssora092 .c {fill:#000;fill-opacity:0.5;}
        .jssora092 .a {fill:#ddd;}
        .jssora092:hover {opacity:.8;}
        .jssora092.jssora092dn {opacity:.5;}
        .jssora092.jssora092ds {opacity:.3;pointer-events:none;}
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:850px;height:175px;overflow:hidden;visibility:hidden;">
       
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="bannerimg/spin.svg" />
        </div>
		
	    <?php
		$query = $db_handle->runQuery("SELECT * FROM banner  ORDER BY id DESC");
				
		if (! empty($query)) {
			foreach ($query as $key => $value) {
				?>
	
		
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:850px;height:175px;overflow:hidden;">
            <div>
                <img data-u="image" src="bannerimg/<?php echo $query[$key]["Image1"] ; ?>" />
                <div data-u="thumb">
                    <center><strong><font size="5"><a href="">DOWNLOAD</a></font></strong>
                        <center></center>
                    </center>
                </div>
            </div>
            <div>
                <img data-u="image" src="bannerimg/<?php echo $query[$key]["Image2"] ; ?>" />
                <div data-u="thumb">
                    <center><strong><font size="5"><a href="">DOWNLOAD</a></font></strong>
                        <center></center>
                    </center>
                </div>
            </div>
            <div>
                <img data-u="image" src="bannerimg/<?php echo $query[$key]["Image3"] ; ?>" />
                <div data-u="thumb">
                    <center><strong><font size="5"><a href="">DOWNLOAD</a></font></strong>
                        <center></center>
                    </center>
                </div>
            </div>
            <div>
                <img data-u="image" src="bannerimg/<?php echo $query[$key]["Image4"] ; ?>" />
                <div data-u="thumb">
                    <center><strong><font size="5"><a href="">DOWNLOAD</a></font></strong>
                        <center></center>
                    </center>
                </div>
            </div>
        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">web design</a>
		
		<?php
			}
		}
		?>			
		
		
        <div u="thumbnavigator" style="position:absolute;bottom:15px;right:35px;width:160px;height:35px;color:#FFF;overflow:hidden;cursor:default;background-color:rgba(135,175,235,0.86);">
            <div u="slides">
                <div u="prototype" style="position:absolute;top:0;left:0;width:160px;height:50px;">
                    <div u="thumbnailtemplate" style="position:absolute;top:0;left:0;width:100%;height:100%;font-family:arial,helvetica,verdana;font-weight:normal;line-height:50px;font-size:16px;padding-left:10px;box-sizing:border-box;"></div>
                </div>
            </div>
        </div>
        <div data-u="navigator" class="jssorb131" style="position:absolute;bottom:5px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:11px;height:11px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <div data-u="arrowleft" class="jssora092" style="width:24px;height:40px;top:0px;left:-1px;" data-autocenter="2" data-scale="0.75" data-scale-left="0">
            <svg viewbox="-199 -3000 9600 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="c" d="M-199-2428.1C317.2-2538.7,851.8-2600,1401-2600c4197.3,0,7600,3402.7,7600,7600 s-3402.7,7600-7600,7600c-549.2,0-1083.8-61.3-1600-171.9V-2428.1z"></path>
                <polygon class="a" points="4806.7,1528.5 4806.7,1528.5 4806.7,2707.8 2691.1,5000 4806.7,7292.2 4806.7,8471.5 4806.7,8471.5 1602,5000 "></polygon>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora092" style="width:24px;height:40px;top:0px;right:-1px;" data-autocenter="2" data-scale="0.75" data-scale-right="0">
            <svg viewbox="-199 -3000 9600 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="c" d="M9401,12428.1c-516.2,110.6-1050.8,171.9-1600,171.9c-4197.3,0-7600-3402.7-7600-7600 s3402.7-7600,7600-7600c549.2,0,1083.8,61.3,1600,171.9V12428.1z"></path>
                <polygon class="a" points="7401,5000 4196.3,8471.5 4196.3,8471.5 4196.3,7292.2 6311.9,5000 4196.3,2707.8 4196.3,1528.5 4196.3,1528.5 "></polygon>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();
    </script>
</body>
	 <!-- BANNER End -->
	 
<br>
 
  	<div class="container">
	    <br>
    		<div class="row">
			
		<?php
		$query = $db_handle->runQuery("SELECT * FROM application  ORDER BY id DESC");
				
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
										<p> <?php echo $query[$key]["Category"] ; ?></p> <br> 
										
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
									
                                    <a href="details.php?file_id=<?php echo $query[$key]["id"];?>&page=index" class="btn btn-secondary py-2 ml-1">Details</a>

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





<div class="container">

<br><br>


<br><br>
</div>

  <!-- JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- JS -->

  
</body>
</html>
