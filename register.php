 <?php
	session_start();

include "db.inc.php";
	$_SESSION['message3'] = '';
	
 if ($_SERVER["REQUEST_METHOD"] == "POST")
 {

if($_POST['password'] == $_POST['cpassword'])
{

$email	=$_POST['email'];
$username = $_POST['username'];

$password =$_POST['password'];


$email = stripcslashes($email);
$username = stripcslashes($username);

$password = stripcslashes($password);

// Protect against sql Injection
$email = mysqli_real_escape_string($con,$email);
$username = mysqli_real_escape_string($con,$username);

$password = mysqli_real_escape_string($con,$password);
if (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z\?]{8,20}$/',$password)
			)
			 {
				echo "<script>alert('Password must contain at least one lowercase character,At least one uppercase character,at least one digit,at least 8 characters')</script>"; 
				header("refresh:5; url = login.php");
			}
else
{
				$password = sha1($password);

				$_SESSION	=$_POST['email'];
				$_SESSION = $_POST['username'];

				$_SESSION =$_POST['password'];
//check for empty fields

	// check if email is valid
	if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		$_SESSION['message1'] = 'Invalid Email';
		
	}
	else
	{



					// Send registration confirmation link (verify.php)
			        $to     = $email;
			       
			        $subject = 'Account Verification ( Powered By Midnight )';
			        $message_body = '
			         A User With Credentials '.$email.', With User Name '.$username.', is Trying to Create an Account Under SAMY Website Using your email. 

			        Please click this link to activate '.$username.' account if its you:

			        
			        http://localhost/template/verify.php?email='.$email.'&username='.$username.'&password='.$password; 

			        mail( $to, $subject, $message_body,'From: zidaneorock@gmail.com');
					         if(mail( $to, $subject,$message_body,'From: zidaneorock@gmail.com')){
					        	echo "<script>alert('Registration SUCCESSFULL, A confirmation link was sent to your Email  to Verify your account before you can LOG IN ')</script>";
					        	header("refresh:0; url = login.php");
					        	}

					        else
					        {
					        	echo "<script>alert('An error occured, email NOT SENT . Check Your Connection')</script>";
					        	
					        }
					        header("refresh:0; url = login.php"); 
			}
			 
		}
	}

			}
			 
	

else
		{			
				echo "<script>alert('Two passwords not correct, Rolling back for you to  try agin retry')</script>";
				header("refresh:50; url = index.php");	
		
		}







mysqli_close($con);
?>
