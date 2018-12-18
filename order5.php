



<?php

include_once 'header.php';

?>

<section style="background-image: url(pic2.jpg)">
<div class="container" style="margin-top: 80px;" >

        <h1 class="title">Place Your Order</h1>
        
       <section class="col-md-5">
        <form method="POST" class="form-light" action="includes/order_list.php">
        
          <div class="row line-item">
                <div class="col-md-7">
                  <div class="book-cover right">
                    <div class="book-badges">   
					   <img src="img7.jpg" class="col-md-12"></img>					   
                    </div>
                  </div>
                </div>
				
				
                <div class="small-5 column">
                  <div class="book-info left">
                    <a class="book-title" href="book7.php">THE WOMAN WHO ATE THE PYTHON</a><br />
                    <span class="book-author" style='color:black'>by <a class="book-author" href="about.php">Sammy Oke Akombi</a></span><br />
                    <span class="book-publisher" style='color:black'><a href="#">Langaa RPCIG</a>, Cameroon</span>
					
		<div class="cart-line-details small-12 medium-5 column">
              
                <div class="selecter-term-detail">
                  <label for="" style='color:black'>Quantity</label>
                  <select name="quantity">
                     <option selected="selected" value="1" style='color:black'>1: 10,000(fcfa)</option>
                    <option value="2">2: 20,000(fcfa)</option>
                    <option value="3">3: 30,000(fcfa)</option>
                    <option value="4">4: 40,000(fcfa)</option>
                    <option value="5">5: 50.000(fcfa)</option>
                    <option value="6">10: 100,000(fcfa)</option>
                    <option value="7">50: 500,000(fcfa)</option>
                    <option value="8">100: 1,000,000(fcfa)</option>
                    <option value="9">1000: 10.000.000(fcfa)</option>
                  </select>
                </div>
              
              
            </div>
           </div>
          </div>
         </div>
			
        </section>
		  
   
   <section class="col-md-4">
     <div>
          <div class="row">
            <div class="small-12 medium-5 column right">
             <div class="form-group">
    <label for="exampleFormControlTextarea1" style='color:black'>Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Precise describtion  of your order" name="description"></textarea>
  </div>
            </div>
          </div>
          
          <div class="row">
              <div class="small-12 medium-7 column">
            
          <div id="currency-details">
            <label style='color:black'>Quantity of books to be order</label>
             <input type="text" name="quantity" class="form-control" placeholder="Precise quantity">
          </div>
          </div>
		  
		   <div class="small-12 medium-7 column">
            
          <div id="currency-details">
            <label style='color:black'>Total Price</label>
             <input type="text" name="tprice" class="form-control" placeholder="Total Price" disabled>
          </div>
          </div>
           

            </div>
          </div>
  </section>
		  
   
  <section class="col-md-3">
    

<div class="col-md-6">
          <div class="row">
            <div class="small-12 medium-5 column right">
              <h2 class="title title-underline-light"style='color:white'>Shipping</h2>
            </div>
          </div>
          <div class="row">
            <div class="small-12 medium-7 column">
        <div id="postage">
  
  
       <p style='color:black'>
        <strong>United Kingdom:</strong><br />
          £3.00<br />
          + 50p each additional book<br />
           + £2.25 tracked
       </p>
  
  
  
  </div>
      </div>

            <div class="small-12 medium-5 column" style='color:black'>
              <div  style='color:white' class="shipping">
                <div>
                  <label for="shipping-region"style='color:white'>Ship to</label>
                  <select id="shipping-region" name="shipping_r">
                    <option value="NA">USA or Canada</option>
                    <option value="UK" selected="selected">United Kingdom</option>
                    <option value="EU">Europe</option>
                    <option value="OTHER">Outside North America &amp; Europe</option>
                  </select>
                </div>

                <ul class="parsley-errors-list"></ul>
                <div class="selecter-term-detail">

                  <label for="shipping-method" style='color:white'>Shipping cost</label>
                  <select id="shipping-method" name="shipping_m" style='color:black'>
                    <option value="Standard" selected="selected">Standard: £3.00</option>
                    <option value="Premium">Premium (trackable): £5.25</option>
                  </select>
                </div>

              </div>
              <div id="shopping-cart-actions">
                <input type="submit" value="Update" class="submit" 
                    name="submit" />
              </div>
              
            </div>
          </div>
        

        </form>
	   </div>
	


		
  </section>
    

</div>

</div>
</section>



<?php

include_once 'footer.php';

?>
