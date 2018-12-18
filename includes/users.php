
<?php

if(isset($Post['submit'])){
	include_once 'dbh.php';

  $Name = mysqli_real_escape_string($conn, $_POST['name']);
  $Tel = mysqli_real_escape_string($conn, $_POST['tel']);
  $Email = mysqli_real_escape_string($conn, $_POST['email']);
  $Msg = mysqli_real_escape_string($conn, $_POST['msg']);
  
  //error handler if fields are  empty
  
  if(empty($name)|| empty($Tel)||empty($Email)||empty($Msg)){
	  
	  header("location: ../index.php?uploaded=empty");
	   // die ("error" . mysqli_error($conn));
	
 exit(); 
	  
  }else{
	  //check if input characters are valid
	  if(!preg_match("/^[a-zA-Z]*$/",$Name)){
		  header("location: ../index.php?uploaded=invalid");
 exit(); 
	 }else{
		if(!filter_var($Email,FILTER_VALIDATE_EMAIL)){
			
			 header("location: ../index.php?uploaded=email");
 exit(); 
		}else{
			 $sql = "INSERT INTO contact (Name, Tel, Email, Msg) 
	  VALUES ('$Name', '$Tel', '$Email', '$Msg');";
   $result=mysqli_query($conn, $sql)
	 or die("Cannot query" . mysqli_error($conn));
   
			 header("location: ../contact.php?=success");
 exit(); 
			
		} 
		 
	 }
	  
	  
  }
	 
}else{
	
	 header("location: ../books.php?uploaded=success");
 exit();
	
}
    
     ?> 