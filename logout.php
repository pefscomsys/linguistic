<?php
session_start();
include "db.inc.php";
$email = $_SESSION['email'];
$sql = "DELETE FROM login  WHERE email = '$email'";
$result = mysqli_query($con,$sql);
if(!mysqli_query($con,$sql))
{
	echo "failed";
}
else
{
	echo "<script>alert('LOGING OUT. Please Click on OK')</script>";
	header("refresh:0 url=index.php");
}



?>