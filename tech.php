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
			  <a href="login.html" > Login <i class="fa fa-user"></i> </a>

			</div>
		</div>

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
			<div id="category">
				<h3 class="text-center">Our Product Categories</h3>

				<div >
				    <div class="col text-center">
				        <button type="button" onclick="" style='font-size:24px'>Vegetables <i class='fas fa-pepper-hot'></i>
				     	<button type="button" onclick="" style='font-size:24px'>Fruits <i class='fas fa-pepper-hot'></i>
				     		<button type="button" onclick="" style='font-size:24px'> Grocery <i class='fas fa-pepper-hot'></i>
				    </div>
				    <div class="col text-center">
				        <button type="button" onclick="" style='font-size:24px'>Fish  <i class='fas fa-pepper-hot'></i>
				     	<button type="button" onclick="" style='font-size:24px'>Meat <i class='fas fa-pepper-hot'></i>
				    </div>
				   
				</div>


				<!-- service category-->
				<h3 class="text-center">Our Services Categories</h3>

				<div >
				    <div class="col text-center">
				     <button type="button" onclick="" style='font-size:24px; '>Technician <i  class='fas fa-pepper-hot'style='color:red'></i>
				     <button type="button" onclick="" style='font-size:24px'>Daily Worker <i class='fas fa-pepper-hot'></i>
				    </div>
				</div>				

				
			</div>
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