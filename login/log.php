
<?php
	//check username and pass wordwrap
	  if(isset($_POST['login-submit'])){
		  
    include_once '../includes/dbh.php';

	  $username = mysqli_real_escape_string($conn, $_POST['username']);
	  $password = mysqli_real_escape_string($conn, $_POST['password']);
	  
	  //first check if the usernam is in the database
		$sql = "SELECT * FROM user WHERE username='$username'";
  			$result = mysqli_query($conn, $sql);
			
  			$resultCheck = mysqli_num_rows($result); //contains the number of rows returned from the query
			
			if ($resultCheck == 0) {
				echo "user name not found <br>";
			} else {
				//while ($row = myqli_fetch_array($result))
				{
					//$pass = $row['password']; 
				}//
				
				//we have the datbase password $pass
				// and the user entered password $password
				//now compare and see if they are the same
			//if ($password == $pass){
				//echo "you are logged in";
			//}
			//else {
				//echo "the password is not correct <br>";
			}
			}

 
     header("location: ../book1.php?uploaded=success");
	 
	 //}
?>


<!DOCTYPE html>
<html>
 <head>
 <title>SAMMY OKE AKOMBI</title>
  </script>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <script src="jquery.js"></script>
  <script src="index.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
 </head>

<body style='background:slategrey'>
 <div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="log.php" method="POST" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" action="../includes/user_reg.php" method="POST" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>