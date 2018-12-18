

<?php

include_once 'headerlog.php';

?><br><br>



<section class="contact-sec" id="contact">
  <div class="container">
   <form method="POST" class="form-light" action="includes/users.php" method="POST">
    <h2>Get in Touch <small>My work is the presentation of my Capabilities.</small> </h2>
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleName">Name</label>
          <input type="text" class="form-control" aria-describedby="emailHelp" name="name">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="examplePhone">Phone Number</label>
          <input type="text" class="form-control" aria-describedby="emailHelp" name="tel">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          <small id="emailHelp" class="form-text text-muted">I'll never share your email with anyone else.</small> </div>
      </div>
      <div class="col-md-12">
        <label for="exampleTextarea">Enter your Message</label>
        <textarea class="form-control" id="exampleTextarea" rows="3" name="msg"></textarea>
      </div>
        <div class="col-md-12 text-xs-center action-block"><input type="submit" value="Update" class="submit btn btn-capsul btn-aqua" name="submit" />
    </div>
   </form>
  </div>
</section>




<?php

include_once 'footerlog.php';

?>