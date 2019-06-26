<?php include "server.php"?>

<?php 
 
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION["name"]);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> সারাদিনের যাবতীয় সবকিছু এখানে পাওয়া যাবে</title>
   
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

   
</head>
<body>
	<div class="wrapper-wide">
		<div id="header">
			<div id="sidebar" >
				<div class="sidebar-header">
	                <h3>Category</h3>
	            </div>
	            <!--Sidenav start-->
	            <ul class="list-unstyled components"> 
	                <li class="active">
	                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
	                    <ul class="collapse list-unstyled" id="homeSubmenu">
	                        <li>
	                            <a href="#">Home 1</a>
	                        </li>
	                        <li>
	                            <a href="#">Home 2</a>
	                        </li>
	                        <li>
	                            <a href="#">Home 3</a>
	                        </li>
	                    </ul>
	                </li>
	            </ul>
			  
			</div>
			<!--Sidenav end-->
           <!--topnav start-->
			<div class="topnav">
			  <button class="openbtn" id="sidebarCollapse">☰</button>
			  <a href=""> DAILY NEEDS</a>

			  <div class="search-container">
			    <form action="/action_page.php">
			      <input class="form-control" type="text" placeholder="Search.." name="search">
			      <button  type="submit"><i class="fa fa-search"></i></button>
			    </form>
			  </div>

			  <a href=""> Needs Help ?</a>
			  <a href="login.php" id="log"> Login <i class="fa fa-user"></i> </a>
			  <a href="#" id="user" style="display: none;"><?php echo "<a>".$_SESSION["name"]."</a>";?></a>
			  <a id="logu" href="index.php?logout='1'" name = 'logout' style="display: none;">Logout</a>
			  
			  <!--Login user subtab-->
			  <?php 
				if (isset($_SESSION["name"])) {
				$hide = 'log';
				$show = 'user';
				$show2 = 'logu';
				echo "<script type=\"text/javascript\">document.getElementById('".$hide."').style.display = 'none';</script>";
				echo "<script type=\"text/javascript\">document.getElementById('".$show."').style.display = 'block';</script>";
				echo "<script type=\"text/javascript\">document.getElementById('".$show2."').style.display = 'block';</script>";
		       }
             ?>
			 
			  <a href="finalcart.php" > Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i> </a>

			</div>
		</div>

         <!--Slide start-->
		<div id="content">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
					  <img class="d-block w-100" src="img/kb.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/kb.jpg" alt="Second slide">
					</div>
					<div class="carousel-item">
					 	<img class="d-block w-100" src="img/kb.jpg" alt="Third slide">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>	

				<!-- slide end-->
				<!--main content started-->
			<div class="category">
				<h3 class="text-center">Our Product Categories</h3>

				<div class="row">
					<!--category card start-->
					<div class="col-xs-12 col-sm-3">                  
						<a href="fruit.php">
							<div class="card">
								<div class="img-card" >
								 <img src="img/fruit.jpeg" />
								</div>
								<div class="card-content">
									<h4 class="card-title">
									   Fruit 
									</h4>
								</div>
							</div>
					    </a>
					</div>

                    <div class="col-xs-12 col-sm-3">                  
						<a href="veg.php">
							<div class="card">
								<div class="img-card" >
								 <img src="img/veg.jpg" />
								</div>
								<div class="card-content">
									<h4 class="card-title">
									   Fresh Vegetables
									</h4>
								</div>
							</div>
					    </a>
					</div>
					<div class="col-xs-12 col-sm-3">                  
						<a href="fish.php">
							<div class="card">
								<div class="img-card" >
								 <img src="img/nonveg.jpg" />
								</div>
								<div class="card-content">
									<h4 class="card-title">
									   Fish and Meat
									</h4>
								</div>
							</div>
					    </a>
					</div>

					<div class="col-xs-12 col-sm-3">                  
						<a href="grocery.php">
							<div class="card">
								<div class="img-card" >
								 <img src="img/groc.png" />
								</div>
								<div class="card-content">
									<h4 class="card-title">
									   Grocery
									</h4>
								</div>
							</div>
					    </a>
					</div>

				</div>
			</div>
			
			<!--category end-->
		</div>
			

		<div class="footer">
			<a href="#" style="background-color: aqua;float: right; text-decoration: none;">Designed by Ratul and Prosanta<i class="fa fa-copyright"></i></a>
		</div>	
	</div>

	
    



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });
        });

    </script>
</body>
</html>