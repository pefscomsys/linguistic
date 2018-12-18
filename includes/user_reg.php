
<?php
    include_once 'dbh.php';

  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);

  $sql = "INSERT INTO user (username, password, email) VALUES ('$username', '$password', '$email');";
     mysqli_query($conn, $sql)
	  or die ("error" . mysqli_error($conn));
	
     header("location: ../index.php?uploaded=success");
	 exit();
  ?> 