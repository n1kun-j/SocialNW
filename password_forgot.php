<?php

require_once('PHPMailer/PHPMailerAutoload.php');
$servername = "localhost";  
$username = "root";  
$password = ""; 
$db="test";
$conn=mysqli_connect($servername , $username , $password, "test");
 if (!$conn)
    {
        die('Connect Error('.mysqli_connect_errno().')').mysqli_connect_error();

    }
    else
    {   
        session_start();
        if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			$email_id=$_POST['forgot'];
			$sel="select psswd from tb_01 where email='$email_id'";
			$ex=mysqli_query($conn,$sel);
			if (!$ex)
			{
				echo'<script language="javascript">alert("Server Issues");</script>';
			}
			else
			{
				$val=mysqli_fetch_object($ex,MYSQLI_ASSOC);
				
				//$arr_01=mysqli_fetch_array($ex,MYSQLI_ASSOC);
				$count=mysqli_num_rows($ex);
				if ($count==0)
				{
					echo'<script language="javascript">alert("INVALID EMAIL");</script>';
				}
				else
				{
						echo '<script language="javascript">alert("Check your email inbox for password.");</script>';
						$mail = new PHPMailer();
						$mail->isSMTP();
						$mail->SMTPAuth = true;
						$mail->SMTPSecure = 'ssl';
						$mail->Host = 'smtp.gmail.com';
						$mail->Port = '465';
						$mail->isHTML();
						$mail->Username = 'jkhan266@gmail.com';
						$mail->Password = '9833412172';
						$mail->setFrom('Campus Connect');
						$mail->Subject = 'PASSWORD RETRIEVAL';
						$mail->Body = "fucku";
						$mail->AddAddress($email_id);
						$mail->send();
						if (!$mail->send())
						{
							echo "$mail->ErrorInfo";
						}
						else
						{
							echo '<script language="javascript">alert("Mail Sent!!");</script>';
						}
				}
			}
		}	



	}




?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="forgotpassword.css">
	<title>Forgot password</title>
    <script>
    function myFunction() {
    <!-- do something -->    

    }
    </script>
</head>
<body>

	<!-- Header Section -->
	<header> 
        <div class="head1">Campus Connect</div> 
        <div class="head2">where socializing meets growth</div> 
    </header> 

    <!-- forgot password -->
    <form action="/action_page.php">
        <input type='email' id='forgot' name='email' value='Enter email here'><br> 
        <input type="submit" id='button' onclick="myFunction()" value="Submit">
    </form>


    <!-- Footer Section -->
    <footer>Campus Connect inc.</footer> 
    



</body>
</html>