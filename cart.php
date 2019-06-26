<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script

  src="https://code.jquery.com/jquery-1.11.3.js"
  integrity="sha256-IGWuzKD7mwVnNY01LtXxq3L84Tm/RJtNCYBfXZw3Je0="
  crossorigin="anonymous"></script>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
</head>
<body>

<h1>Shopping cart</h1>

<div>
	<ul>
		<li><a class ="add" href="#" data-name ="Apple" data-price = "1.22"> Apple $1.2</a></li>
		<li><a class ="add" href="#" data-name ="banana" data-price = "0.2"> banana $0.2</a></li>
		<li><a class ="add" href="#" data-name ="shoe" data-price = "22"> Shoe 22</a></li>
	</ul>
	<a href="finalcart.html" id="clear">Clear Cart</a>
</div>

<div>
	<ul id="show">
		
	</ul>
</div>

<div class="row" >
	
  <div class="col-sm-2">
    <div class="card" style="text-align: center; margin: 5px;">
      <div class="card-body">
      	<img src="img/onion.jpg" class="img-fluid" alt="Responsive image">
        <h4 class="text-info">Onion   </h4>
        <h6 class="text-danger" data-price = "1.22">30  </h6>
        <input type="text" name="count" class="form-control" >
        <a href="#" class="btn btn-success" style="margin-top: 5px;">Add to Cart</a>
      </div>
    </div>
   </div>

    <div class="col-sm-2">
    <div class="card" style="text-align: center; margin: 5px;">
      <div class="card-body">
      	<img src="img/onion.jpg" class="img-fluid" alt="Responsive image">
        <h4 class="text-info">bit   </h4>
        <h6 class="text-danger" >30   tk</h6>
        <input type="text" name="count" class="form-control" >
        <a href="#"  class="btn btn-success" style="margin-top: 5px;">Add to Cart</a>
      </div>
    </div>
  </div>
</div>






<script type="text/javascript">
	
     $(".btn").click(function(event){
     	event.preventDefault();
     	var name = $(this).siblings(".text-info").text();
     	var price = $(this).siblings(".text-danger").attr("data-price");
     	var cnt = Number($(this).siblings(".form-control").val());
     	
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

</body>
</html>