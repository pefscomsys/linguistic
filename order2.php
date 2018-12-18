
<?php

include_once 'header.php';

?>

<section style="background-image: url(pic2.jpg)">
<div class="container" style="margin-top: 70px;">

        <h1 class="title">Place Your Order</h1>
        
       <section class="col-md-5">
       <form method="POST" class="form-light" action="includes/order_list.php">
        
          <div class="row line-item">
                <div class="col-md-7">
                  <div class="book-cover right">
                    <div class="book-badges">   
					   <img src="img4.jpg" class="col-md-12"></img>					   
                    </div>
                  </div>
                </div>
				
				
                <div class="small-5 column">
                  <div class="book-info left">
                    <a class="book-title" href="book2.php">THE WAGES OF CORRUPTION</a><br />
                    <span class="book-author">by <a class="book-author" href="about.php">Sammy Oke Akombi</a></span><br />
                    <span class="book-publisher"><a href="#">Langaa RPCIG</a>, Cameroon</span>
					
		<div class="cart-line-details small-12 medium-5 column">
              
                <div class="selecter-term-detail">
                  <label for="quantity">Unit Price</label>
                  <select name="quantity">
                     <option selected="selected" value="1" name="uprice" disabled> 10,000(fcfa)</option>
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
              <h2 class="title title-underline-light" style='color:white'>Shipping</h2>
            </div>
          </div>
          <div class="row">
            <div class="small-12 medium-7 column">
        <div id="postage">
  
  
       <p style='color:black'>
        <strong >United Kingdom:</strong><br />
          £3.00<br />
          + 50p each additional book<br />
           + £2.25 tracked
       </p>
  
  
  
  </div>
      </div>

            <div class="small-12 medium-5 column">
              <div class="shipping">
                <div>
                  <label for="shipping-region" style='color:white'>Ship to</label>
                  <select id="shipping-region" name="shipping_r">
                    <option value="NA" style='color:black'>USA or Canada</option>
                    <option value="UK" selected="selected" style='color:blue'>United Kingdom</option>
                    <option value="EU" style='color:black'>Europe</option>
                    <option value="OTHER" style='color:black'>Outside North America &amp; Europe</option>
                  </select>
                </div>

                <ul class="parsley-errors-list"></ul>
                <div class="selecter-term-detail">

                  <label for="shipping-method" style='color:white'>Shipping cost</label>
                  <select id="shipping-method" name="shipping_m">
                    <option value="Standard" selected="selected" style='color:black'>Standard: £3.00</option>
                    <option value="Premium" style='color:black'>Premium (trackable): £5.25</option>
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
