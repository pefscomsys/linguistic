<?php
    include_once 'dbh.php';

  $description = mysqli_real_escape_string($conn, $_POST['description']);
  $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
  $uprice = mysqli_real_escape_string($conn, $_POST['uprice']);
  $tprice = mysqli_real_escape_string($conn, $_POST['tprice']);
  $shipping_r = mysqli_real_escape_string($conn, $_POST['shipping_r']);
  $shipping_m = mysqli_real_escape_string($conn, $_POST['shipping_m']);

  $sql = "INSERT INTO order_list (Description, Quantity, Unit_price, Total_Price, Ship_to, Shipping_cost) VALUES ('$description', '$quantity', '$uprice', '$tprice', ' $shipping_r', ' $shipping_m');";
     mysqli_query($conn, $sql)
	 or die("could not query" . mysqli_error($conn));
	
     header("location: ../index.php?uploaded=success");
  ?> 