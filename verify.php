<?php
	
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
		$u_id=$_SESSION['u_id'];
		$f_name=$_SESSION['f_name'];
		$l_name=$_SESSION['l_name'];
		$email=$_SESSION['email_id'];
		$psswd=$_SESSION['psswd'];
        if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			
			$ins="insert into tb_01(f_name,l_name,email,u_id,psswd) values('$f_name','$l_name','$email','$u_id','$psswd')";
			$exec=mysqli_query($conn,$ins);
			if (!$exec)
			{
				echo '<script language="javascript">alert("Server Issues. Sorry");</script>';
			}
			else
			{
				echo '<script language="javascript">alert("Verification Done!!");</script>';	
				header ("location: Login_2.php");
			}	
		}
	}	

?>


<html>
<head>
	<link rel="stylesheet" type="text/css" href="Verify.css">
	<title>Verify Page</title>
    <script>
    function myFunction() 
	{
    <!-- jamal, do the needful -->    
		
			
			
			
			
		
    }
    </script>
</head>
<body>

	<!-- Header Section -->
	<header> 
        <div class="head1">Campus Connect</div> 
        <div class="head2">where socializing meets growth</div> 
    </header> 
	<form method="POST" action="">
    <!-- button -->
    <button id='b1' type="submit">Verify Email</button>
	</form>
    <!-- Footer Section -->
    <footer>Campus Connect inc.</footer> 
    



</body>
</html>