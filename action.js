
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
