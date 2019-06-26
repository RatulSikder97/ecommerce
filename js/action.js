
<script type="text/javascript">
  
     
      $(document).ready( function () {
 
  loadCart();
  displayCart();

});
     

     function displayCart()
     {
      var cartArray = listCart();
      var output ="<tr><th>Name</th> <th>Price</th> <th>Quantity</th> </tr>";
      for(i in cartArray)
      {     
            output +="<tr> <td >"+cartArray[i].name+"</td> <td>"+cartArray[i].price+'</td> <td><button  class="add" data-name="'+cartArray[i].name +'" >+</button>'+cartArray[i].count+'<button  class="sub" data-name="'+cartArray[i].name +'" >-</button>'+"</td> <tr>";
      }
      $(".show").html(output);
     }

     $(".show").on("click",".add",function(event){
          var name = $(this).attr("data-name");
          updateCount(name);
         location.reload();
     })
     $(".show").on("click",".sub",function(event){
          var name = $(this).attr("data-name");
          removeItemFromCart(name);
         location.reload();
     })

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
    function updateCount(name){
      for (var i in cart) {
        if(cart[i].name === name)
        {
          cart[i].count +=1;
          
        }
    }
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
