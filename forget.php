<?php
include "db.inc.php";
include "landlogin.php";
session_start();
$_SESSION['message'] = '';


?>
<div class="form">
<form action="forgot.php" method="POST" autocomplete="OFF">
	
	<input type="text" name="email" placeholder="Enter Email">
	<input type="submit" name="submit" value="Change Password">
</form>
</div>
<style>
body {font-family: Arial, Helvetica, sans-serif;
background-color:#6a6f8c; 
 position:static;}

input[type=text],input[type=submit]{
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
.form{
	margin-left: 30%;
	height: 51%;
}
input[type=submit]{
	  width: 20%;
	  margin-top: 10%;
	color: white;
	background-color: dodgerblue;
}
input[type=submit]:hover{
	background-color: deepskyblue;
}
</style>

<?php

include "footer.php";

?>