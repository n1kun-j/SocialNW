<?php

$conn=mysqli_connect("localhost","root","","test");
$db="test";

if (!$conn)
{
	die('Connect Error('.mysqli_connect_errno().')').mysqli_connect_error();
}

else
{
	session_start();
	if ($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$user_name=$_POST['login'];
		$password=$_POST['password'];	
		$sel="select * from tb_01 where u_id='$user_name' AND psswd='$password'";
		$exec=mysqli_query($conn,$sel);
		if (!$exec)
		{
			echo ("QUERY FAILED".mysqli_error($conn));		
		}
		else
		{
			$arr=mysqli_fetch_array($exec,MYSQLI_ASSOC);
			$num=mysqli_num_rows($exec);
			
			if ($num==0)
			{
				echo'<script language="javascript">alert("Invalid Input.Check Username or Password");</script>';
			}
			else
			{
				$_SESSION['user_id']=$user_name;
				header("location:home.php");
			}			
		}		
	}
}
?>


<html>
<head>
	<link rel="stylesheet" type="text/css" href="login_2.css">
	<title>Login Page Layout</title>
</head>
<body>

	<!-- Header Section -->
	<header> 
        <div class="head1">Campus Connect</div> 
        <div class="head2">where socializing meets growth</div> 
    </header> 


	<div class="container">
	  <div class="login">
	    <h1>Login</h1>
	    <form method="post" action="">
	      <p><input type="text" name="login" value="" placeholder="Username or Email"></p>
	      <p><input type="password" name="password" value="" placeholder="Password"></p>
	      <p class="remember_me">
	        <label>
	          <input type="checkbox" name="remember_me" id="remember_me">
	          Remember me on this computer
	        </label>
	      </p>
	      <p class="submit"><input type="submit" name="commit" value="Login"></p>
	    </form>
	  </div>
	 
	  <div class="login-help">
	    <p>Forgot your password? <a href="http://localhost/campus_connect/password_forgot.php">Click here to reset it</a>.</p><br>
		<p>New to Campus Connect? <a href="http://localhost/campus_connect/test_login_03.php">Click here to Register</a></p>
	  </div>
	</div>

     <!-- Footer Section -->
    <footer>Campus Connect inc.</footer> 
    



</body>
</html>