
<?php


	require_once('PHPMailer/PHPMailerAutoload.php');
    $servername = "localhost";  
    $username = "root";  
    $password = ""; 
	$db="test";	
    $conn = mysqli_connect($servername , $username , $password, "test");
    if (!$conn)
    {
        die('Connect Error('.mysqli_connect_errno().')').mysqli_connect_error();

    }
    else
    {   
        session_start();
        if($_SERVER["REQUEST_METHOD"]=="POST")
		{

       
        $f_name=$_POST['f_name'];
        $l_name=$_POST['l_name'];
		$email=$_POST['email_id'];
        $u_id=$_POST['u_id'];
        $psswd=$_POST['psswd'];
 
       $ins="insert into tb_01(f_name,l_name,email,u_id,psswd) values('$f_name','$l_name','$email','$u_id','$psswd')";
       $sel="select * from tb_01 where u_id='$u_id'";
	   /*$stmt=$conn->prepare($ins)
       $stmt->bind_param("ssss",$f_name,$l_name,$u_id,$psswd);
       $stmt->execute();
       echo "Registration Successfully Completed!";*/
	   $exec_02=mysqli_query($conn,$sel);
	   if(!$exec_02)
	   
		   
			
			//if (!$exec_02)
		{
			echo '<script language="javascript">alert("query failed");</script>';
		}
		else
		{	
			$count=mysqli_num_rows($exec_02);
			if ($count==0)
			{
				//$exec=mysqli_query($conn,$ins);
				//if (!$exec)
				/*{
					echo'<script type="javascript">alert("WE ARE DOWN SORRY");</script>';
				}	
				else
				{*/	
					$_SESSION['u_id']=$u_id;
					$_SESSION['f_name']=$f_name;
					$_SESSION['l_name']=$l_name;
					$_SESSION['email_id']=$email;
					$_SESSION['psswd']=$psswd;
					//$_SESSION["u_id"]=$u_id;
					echo '<script language="javascript">alert("Check your email inbox to complete verification.");</script>';
					$message='<html><head></head><body>Click on the link to verify your email address<br><a href="http://localhost/Ip_Proj/verify.php"> CLICK  HERE</a></body></html>'; 
					//$headers = "MIME-Version: 1.0" . "\r\n";
					//$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

					// More headers
					//$headers .= 'From: <jkhan266@gmail.com>' . "\r\n";		
					//mail ($email,"Email Verification",$message,$headers);
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
						$mail->Subject = 'Email Verification';
						$mail->Body = "<a href='http://localhost/campus_connect/verify.php'> CLICK  HERE</a>";
						$mail->AddAddress($email);
						$mail->send();
						if (!$mail->send())
						{
							echo "$mail->ErrorInfo";
						}
						else
						{
							echo '<script language="javascript">alert("Mail Sent!!");</script>';
						}
					//header("location: Login_2.php");
			}
			else
			{
				echo '<script type="text/javascript">alert("Username already exists!!");</script>';
			}	
		}
		}}	
    /*$stmt->close();
    $conn->close();*/

/*else{
    echo"all fields are required!";
    die();*/


?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="signup_2.css">
        <title>
            SIGNUP PAGE
        </title>
        <script>
            var x=document.getElementById("f_name");
            
            function validate()
            {
                if (x=="")
                {
                    alert("Requires a valid name ")
                }

            } 
        
        </script>
    </head>

        <!-- Header Section -->
    <header> 
        <div class="head1">Campus Connect</div> 
        <div class="head2">where socializing meets growth</div> 
    </header> 

    <body>

        <div id="div_1">
            <p>
                    <strike> PEER PRESSURE</strike>.<br>GROW WITH THEM!!
            </p>

        </div>
        <div id="div_2">
            <u><b>SIGN UP DETAILS</b></u> 
        </div>
        <div id="div_3">
            <form method="POST" action="">
                <b>First Name:</b> <br>
                <input type="text" name="f_name" style="width: 230px; height: 30px;" id="f_name" required><br><br>
                <b>Last Name:</b> <br>
                <input type="text" name="l_name" style="width: 230px; height: 30px;" required><br><br>
				<b>Email ID:</b><br>
				<input type="email" name="email_id" style="width: 230px; height: 30px;" required><br><br>
                <b>User ID:</b> <br>
                <input type="text" name="u_id" style="width: 230px; height: 30px" required><br><br>
                <b>Password:</b> <br>
                <input type="password" name="psswd" style="width: 230px; height: 30px" required><br><br>
                <button type="submit" style="height: 40px; width: 200px; font-family: 'Courier New', Courier, monospace; font-size: 20px"  > <b>Join</b></button>
                
            </form>
        </div>
        <div id="div_4">
            <u><a href="Login_2.php">LOGIN</a></u>
        </div> 
        <!-- Footer Section -->
        <footer>Campus Connect inc.</footer> 
   
    </body>
</html>