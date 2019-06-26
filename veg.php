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

        
        <div class ="productCard">
        <h3 class="text-center">Fresh Vegetable</h3>
        <div class="row" >
          
          <!--product list -->
          <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Veg/big-potato.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="big-potato">Big-potato 1kg</h4>
                <h6 class="text-danger" data-price = "25">25 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>


          <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Veg/big-lemon.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="big-lemon">Big-lemon 4 pieces</h4>
                <h6 class="text-danger" data-price = "30">30 tk </h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Veg/bittergourd-local.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="bittergourd-local">Bittergourd-local 500g</h4>
                <h6 class="text-danger" data-price = "28">28 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>


           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Veg/bittergourd-net.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="bittergourd">Bittergourd 500g</h4>
                <h6 class="text-danger" data-price = "25">25 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Veg/garlic-big-.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info"data-text="garlic-big" data-text="">Garlic-big 250g</h4>
                <h6 class="text-danger" data-price = "38">38 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Veg/garliclocal-small.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="garliclocal-small">Garliclocal-small 250g</h4>
                <h6 class="text-danger" data-price = "32">32 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Veg/gingerindian.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="gingerindian">Ginger-indian 250g</h4>
                <h6 class="text-danger" data-price = "40">40 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Veg/gourd.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="gourd">Gourd 1 piece</h4>
                <h6 class="text-danger" data-price = "45">45 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Veg/greenchili.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="greenchili">Greenchili 200g</h4>
                <h6 class="text-danger" data-price = "16">16 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Veg/kochur-loti-30.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="kochur-loti">Kochur-loti 500g</h4>
                <h6 class="text-danger" data-price = "25">25 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Veg/kochurmukhi.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="kochurmukhi">Kochurmukhi 5oog</h4>
                <h6 class="text-danger" data-price = "35">35 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Veg/ladies-finger.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="ladies-finger">Ladies-finger 500g</h4>
                <h6 class="text-danger" data-price = "30">30 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Veg/long-bean.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="long-bean">Long-bean 500g </h4>
                <h6 class="text-danger" data-price = "25">25 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Veg/long-brinjal.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="long-brinjal">Long-brinjal 500g</h4>
                <h6 class="text-danger" data-price = "26">26 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Veg/onion-deshi.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="onion-deshi">Onion-deshi 1kg</h4>
                <h6 class="text-danger" data-price = "32">32 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Veg/onion-indian.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="onion-indian">Onion-indian 1kg</h4>
                <h6 class="text-danger" data-price = "35">35 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Veg/papaya.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="papaya">Papaya 1kg</h4>
                <h6 class="text-danger" data-price = "32">32 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Veg/potol.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="potol">Potol 500g</h4>
                <h6 class="text-danger" data-price = "32">32 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Veg/red-spinach.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="red-spinach">Red-spinach 200g </h4>
                <h6 class="text-danger" data-price = "10">10 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Veg/ridge-gourd.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="ridge-gourd">Ridge-gourd 500g</h4>
                <h6 class="text-danger" data-price = "20">20 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Veg/round-brinjals (2).jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="round-brinjals">Round-brinjals white 700g</h4>
                <h6 class="text-danger" data-price = "42">42 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Veg/round-brinjals.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="round-brinjals">round-brinjals 700g</h4>
                <h6 class="text-danger" data-price = "42">42 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Veg/round-lemon.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="round-lemon">Round-lemon 4 piece</h4>
                <h6 class="text-danger" data-price = "32">32 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Veg/snake-gourd.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="snake-gourd">Snake-gourd 500g</h4>
                <h6 class="text-danger" data-price = "20">20 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Veg/sponge-gourd.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="sponge-gourd">Sponge-gourd 500g</h4>
                <h6 class="text-danger" data-price = "20">20 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Veg/sweet-pumpkin.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="sweet-pumpkin">Sweet-pumpkin 1 piece</h4>
                <h6 class="text-danger" data-price = "75">75 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/Veg/thankoni.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="thankoni">Thankoni 1 ati</h4>
                <h6 class="text-danger" data-price = "6">6 tk</h6>
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