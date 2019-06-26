<?php include "server.php"; ?>
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
			  <a href="login.php" > Login <i class="fa fa-user"></i> </a>

			</div>
			<!--topnav end-->
		</div>
        
		<div id="content">
		
				<!--main content started-->
	   <div class="regForm"  > 
        <h1> Registration </h1>
        <form method="post" >
          <div class="form-group  has-feedback">
            <label >Name</label>
            <input type="text" class="form-control" placeholder="Name" name="name"  required>
          </div>

          <div class="form-group  has-feedback">
            <label>Email</label>
            <input type="text" class="form-control"  placeholder="Enter your Email" name="email" required>
          </div>

          <div class="form-group  has-feedback">
            <label>Address</label>
            <input type="text" class="form-control"  placeholder="Enter your address" name="address" required>
          </div>
           
           <div class="form-group  has-feedback">
            <label>Phone No.</label>
            <input type="text" class="form-control" id="phone" placeholder="Enter your Phone No" name="phone"  required>
          </div>

          <div class="form-group  has-feedback">
            <label >Password</label>
            <input type="Password" class="form-control" id="email" placeholder="Enter Password" name="password_1" required>
          </div>    
          <div class="form-group  has-feedback">
            <label > Confirm Password</label>
            <input type="Password" class="form-control" id="email" placeholder="Enter Password" name="password_2" required>
            
          </div>    
          <button type="submit" name="regBtn" class="btn btn-danger btn-block">Create Account</button>
          <p>Already have an account? <a href="login.php" class="text text-danger" style="text-decoration:none;">Click here to login. </a></p>
        </form> 
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


