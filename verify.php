<?php 
/* Verifies registered user email, the link to this page
   is included in the register.php email message 
*/
require 'db.inc.php';
session_start();


    $email  =$_GET['email'];
    $username = $_GET['username'];
    
    $password =$_GET['password'];
   
    $sql1= "SELECT * FROM regis WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($con,$sql1);
    $resultcheck = mysqli_num_rows($result);
    
    if ($resultcheck > 0){
        echo "<script>alert('User already exist!.Please Register with a different Email or Phone Number')</script>";
        header("refresh:0; url = login.php");

    }
    else
    {


                       $sql = "INSERT INTO regis(username,email,password)
                                         VALUES ('$username','$email','$password');";

                            

                       if (!mysqli_query($con,$sql))//insert $sql2 into login table of same database
                                    
                                {
                                    echo "<script>alert('User Account Not ACTIVATED, please try again')</script>";
                                    header("refresh:0; url = login.php");

                                }
                                
                                else{
                                     echo "<script>alert('Activation Successful')</script>";
                                     echo "<script>alert('Powered By Midnight')</script>";
                                     header("refresh:0; url = login.php");
        
    }
}

     
?>