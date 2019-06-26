<?php include "server.php"?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> সারাদিনের যাবতীয় সবকিছু এখানে পাওয়া যাবে</title>
   
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <script src="https://code.jquery.com/jquery-1.11.3.js" integrity="sha256-IGWuzKD7mwVnNY01LtXxq3L84Tm/RJtNCYBfXZw3Je0=" crossorigin="anonymous"></script>

   
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
			<div class ="productCard">
        <h3 class="text-center">Fresh Fish & Meat</h3>
        <div class="row" >
          
              <!--product list -->
          <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Fish/chingri.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="Shrimp">Shrimp 5oog</h4>
                <h6 class="text-danger" data-price = "350">350 tk  </h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Fish/hilsha.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="Hilsa">Hilsa fish 1kg</h4>
                <h6 class="text-danger" data-price = "800">800 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Fish/kaski-fish.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="Casky">Casky fish 500g</h4>
                <h6 class="text-danger" data-price = "2502">250 tk </h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Fish/kf.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="Katla">Katla fish 1kg</h4>
                <h6 class="text-danger" data-price = "300">300 tk </h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Fish/koi.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="Koi">Koi fish 1kg </h4>
                <h6 class="text-danger" data-price = "325">325 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Fish/koral.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="Coral">Coral fish 1kg</h4>
                <h6 class="text-danger" data-price = "840">840 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Fish/mola.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="Mola">Mola fish 500g</h4>
                <h6 class="text-danger" data-price = "300">300300 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Fish/pabda.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="Pabda">Pabda fish 500g</h4>
                <h6 class="text-danger" data-price = "315">315 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Fish/pangas.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="Pangas">Pangas fish 1kg</h4>
                <h6 class="text-danger" data-price = "175">175 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

          

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Fish/rui.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="RUi">Rui fish 1kg</h4>
                <h6 class="text-danger" data-price = "350">350 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Fish/shing.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="Cat">Cat Fish 500g</h4>
                <h6 class="text-danger" data-price = "360">360 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>




          <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Mangso/beef-bone.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="Beef">Beef 1kg</h4>
                <h6 class="text-danger" data-price = "555">555 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Mangso/broiler-chicken.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="broiler-chicken">Broiler-chicken 1kg</h4>
                <h6 class="text-danger" data-price = "180">180 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Mangso/chickenskinonkg.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="broiler">Broiler 1kg</h4>
                <h6 class="text-danger" data-price = "200">200 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Mangso/cockchicken.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="cockchicken">Cockchicken 300g</h4>
                <h6 class="text-danger" data-price = "190">190 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Mangso/deshichickenskin.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="deshichickenskin">Deshichicken 550g</h4>
                <h6 class="text-danger" data-price = "500">500 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Mangso/mutton.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="mutton">Mutton 1kg</h4>
                <h6 class="text-danger" data-price = "755">755 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>



           <!--product list end-->
          </div>
      </div>
				
           
        </div>
</div>
    







<script type="text/javascript">
	
  $(document).ready( function () {
 
  loadCart();
  displayCart();

});
     $(".btn").click(function(event){
     	event.preventDefault();
     	var name = $(this).siblings(".text-info").text();
     	var price = $(this).siblings(".text-danger").attr("data-price");
     	var cnt = Number($(this).siblings(".form-control").val());
      if(cnt == "NAN")
      {
        return;
      }

     	
     	addItemToCart(name,price,cnt)
     	saveCart();
     	displayCart();


     })
  
     $("#clear").click(function()
     {
          var url = $(this).attr('href').attr('target','_blank');
          loadCart();
          displayCart();
     })
     
     

     function displayCart()
     {
     	var cartArray = listCart();
     	var output =""
     	for(i in cartArray)
     	{
            output +="<li>"+cartArray[i].name+" "+cartArray[i].count+" </li>";
     	}
     	$("#show").html(output);
     }

	//********************************
	//functions
	var cart = [];

	var Item = function(name,price,count){
        this.name = name
        this.price = price
        this.count = count
	};
     
    //addItemToCart()
    function addItemToCart(name, price, count)
    {
    	for (var i in cart) {
    		if(cart[i].name === name)
    		{
    			cart[i].count +=count;
    			return;
    		}
    		
    	}
    	var item = new Item(name, price, count);
    	cart.push(item);
    	saveCart();    	
    	
    }
    
    
    
    //removeItemFromCart()
    function removeItemFromCart(name)
    {
       for (var i in cart) {
    		if(cart[i].name === name)
    		{
    			cart[i].count --;
    			if (cart[i].count===0) {
    				cart.splice(i,1);
    			}
    			
    			break;
    		}
    		
    	}
    	saveCart();
    }
    

    //removeItemFromCartAll()
    function removeItemFromCartAll(name)
    {
    	for (var i in cart) {
    		if(cart[i].name === name)
    		{
    			cart.splice(i,1);
    			break;
    		}
    		
    	}
    	saveCart();
    }

    
   
   
    //clearCart()
    function clearCart()
    {
    	cart = [];
    	saveCart();
    }


    //countCart()--> return total items no
    function countCart(){
    	var totalCount =0;
    	for(var i in cart)
    	{
          totalCount += cart[i].count;   
    	}
    	return totalCount;
    }

 

    //totalCart()-->return total cost
    function totalCart(){
    	var totalCost =0;
    	for(var i in cart)
    	{
          totalCost += cart[i].count * cart[i].price;   
    	}
    	return totalCost;
    }
    
    
    //list cart --> array of all items
    function listCart()
    {
    	var cartCopy =[];
    	for(var i in cart)
    	{
    		var item = cart[i];
    		var itemCopy = {};
    		for(var p in item)
    		{
    			itemCopy[p]=item[p];
    		} 
    		cartCopy.push(itemCopy)
    	}
    	return cartCopy;
    }


    //saveCart()
    function saveCart()
    {
    	localStorage.setItem("shoppingCart",JSON.stringify(cart));
    }
   

    //loadCart()
    function loadCart()
    {
    	cart = JSON.parse(localStorage.getItem("shoppingCart"));

    }
    


		
 </script>   



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