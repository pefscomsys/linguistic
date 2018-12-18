<?php
include "db.inc.php";
include "landlogin.php";

session_start();
$_SESSION['message'] = '';
$_SESSION['message1'] = '';
$_SESSION['message2'] = '';
$_SESSION['message3'] = '';
$_SESSION['message4'] = '';


if($_POST['submit1'] )
{
		$_SESSION['email'] = $_POST['email1'];
		
		$extend = $_SESSION['email'];
		
		

		if (empty($_POST['email1']) || empty($_POST['password1'])) 
		{
			$_SESSION['message'] = "<label> BOTH FIELDS ARE REQUIRED</label>";
		}

		else
		{	
			$email = $_POST['email1'];
			$password = $_POST['password1'];

			$email = stripcslashes($email);
			$password = stripcslashes($password);
			$email = mysqli_real_escape_string($con,$email);
			$password = mysqli_real_escape_string($con,$password);
			
			$password1 = sha1($password);


			if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
			$_SESSION['message1'] = 'Invalid Email';
			



			}
			else
			{
				$sql = "SELECT * FROM regis WHERE email = '$email' AND password = '$password1' ";
				$result = mysqli_query($con,$sql);
				$row = mysqli_fetch_array($result);
				if ($row['email'] == $email && $row['password'] == $password1)
				{	
					  $lastactivity = date("Y-m-d H:i:s", STRTOTIME(date('h:i:sa')));
					  $status = "ONLINE";

					  $sql3 = "INSERT INTO login(email,password,lastactivity,status) VALUES ('$email' , '$password1' , '$lastactivity','$status')";
					  $result8 = mysqli_query($con, $sql3);
					  
					    if(!$result8)
					  {
					  	$_SESSION['message'] = 'LOGIN FAILED !! Admistrator Is currently Updating this Website . Please try again Later';
					  	header("refresh:0; url = index.php");
					  }
					  else
					  {

					  
					  header("refresh:0 url= books.php?email=".$email);
					}
				
				}
				else
				{
				
				$sql5 = ("SELECT * FROM admin WHERE email = '$email' AND password= '$password1'");
				$result5 = mysqli_query($con,$sql5);
				$row5 = mysqli_fetch_array($result5);
				if ($row5['email'] == $email && $row5['password'] == $password1){
				  	$lastactivity = date("Y-m-d H:i:s", STRTOTIME(date('h:i:sa')));
					  $status = "ONLINE";

					  $sql6 = "INSERT INTO admin(email,password,lastactivity,status) VALUES ('$email' , '$password1' , '$lastactivity','$status')";
					  $result6 = mysqli_query($con, $sql6);
					  
					  if(!$result6)
					  {
					  	$_SESSION['message'] = 'LOGIN FAILED !! Admistrator Is currently Updating this Website . Please try again Later';
					  	header("refresh:0; url = index.php");
					  }
					  else
					  {
					  	header("refresh:0 url= student.php?email=".$email);
					  }
		            	
		       		 }
		        else{
				$_SESSION['message'] ='LOGIN FAILED !! Wrong Email or Password. Please Retry';
		           
		        }
			}
}

			
}


	
}


?>
<div class="form">
<form action="login.php" method="POST" autocomplete="ON">
	<div class="login-wrap">
	<div class="login-html">
		<h1>Please Log In to Continue!</h1>
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		
		<div class="login-form">
			
			<div class="sign-in-htm">
				<div class="alert alert-error"><?= $_SESSION['message'] ?></div>
				<div class="group">
					<label for="user" class="label">Email</label>
					<input id="user" type="text" class="input" name="email1" placeholder="Enter your Email" required/>
					<div class="alert alert-error"><?= $_SESSION['message1'] ?></div>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" name="password1" placeholder="Enter password" data-type="password" required/>
					<div class="alert alert-error"><?= $_SESSION['message2'] ?></div>
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon" ></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" name="submit1" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="forget.php">Forgot Password?</a>
				</div>
			</div>
		</form>
		<form action="register.php" method="POST" autocomplete="ON">
			<div class="sign-up-htm">
				<div class="alert alert-error"><?= $_SESSION['message4'] ?></div>
				<div class="group">
					<label for="user" class="label">UserName</label>
					<input id="user" type="text" name="username" placeholder="Enter your Name" class="input" required/>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" name="password" placeholder="Enter Password" data-type="password" required/>
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" type="password" class="input" name="cpassword" placeholder="Re-enter Password" data-type="password" required/>
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="text" name="email" placeholder="Enetr your email" class="input" required/>
				</div>
				<div class="group">
					<input type="submit" name="submit2" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
				
			</div>
		</div>
	</div>
</div>
</form>
</div>
<style>
	body {
		font-family: Arial, Helvetica, sans-serif; position:static;
		overflow: auto; /* Enable scroll if needed */
		color:#6a6f8c;
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: -20%;
	}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
input[type=submit]{
	color: white;
}
h1{
	font-family: sans-serif;
	font-size: 20px;
	color: black;
	margin-top: -12%;
}
.alert {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 4px 20px 4px 20px;
  font-size: 13px;
  line-height: 20px;
  margin-bottom: 20px;
  text-shadow: none;
  position: relative;
  background-color: #272e3b;
  color: rgba(255, 255, 255, 0.7);
  border: 1px solid #000;
  box-shadow: 0 0 0 1px #363d49 inset, 0 5px 10px rgba(0, 0, 0, 0.75);
}
.alert-error {
  color: #f00;
  background-color: #360e10;
  box-shadow: 0 0 0 1px #551e21 inset, 0 5px 10px rgba(0, 0, 0, 0.75);
}
.alert:empty{
    display: none;
}
.alert-success {
  color: #21ec0c;
  background-color: #15360e;
  box-shadow: 0 0 0 1px #2a551e inset, 0 5px 10px rgba(0, 0, 0, 0.75);
}
.form{
	margin-top: 2%;
	height: 100%;
}
.label{
	color: white;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:black;text-decoration:none}

.login-wrap{
	margin-top: -10%;
	width:100%;
	margin:auto;
	max-width:525px;
	min-height:670px;
	position:relative;
	
	
}
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:90px 70px 50px 70px;
	
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	transform:rotateY(180deg);
	backface-visibility:hidden;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}

.login-html .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
	color:#fff;
	border-color:black;
}
.login-form{
	min-height:345px;
	position:relative;
	perspective:1000px;
	transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color:#fff;
	display:block;
}
.login-form .group .input{
	color:black;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
}
.login-form .group .button{
	color: white;
}
.login-form .group .button:hover{
	background-color: dodgerblue;
}
.login-form .group input[data-type="password"]{
	text-security:circle;
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:black;
	font-size:20px;
	font-family: sans-serif;
}
.login-form .group .button{
	background:#1161ee;
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	transform:scale(0) rotate(0);
}

.login-form .group .check:checked + label{
	color:black;
}
.login-form .group .check:checked + label .icon{
	background:black;
}
.login-form .group .check:checked + label .icon:before{
	transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
	transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
	transform:rotate(0);
}

.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}

</style>

<?php

include "footer.php";
?>