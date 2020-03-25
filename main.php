<!DOCTYPE html>
<html>
<head>
	<title>Campus Connect Home</title>
					<meta charset="utf-8">
  					<meta name="viewport" content="width=device-width, initial-scale=1">
  					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 					<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- http://localhost/campus_connect/main.php  

<script type='text/javascript'>
                $(window).load(function(){
     			$('.loader').fadeOut();
				});
            </script>



            <div class="loader" id="mydiv">
		<img src="images/progress.gif">
	</div> 

	
    
    <script type="text/javascript">(function(){
    var myDiv = document.getElementById("myDiv"),

      show = function(){
        myDiv.style.display = "block";
        setTimeout(hide, 50); // 5 seconds
      },

      hide = function(){
        myDiv.style.display = "none";
      };

    show();
  })();

</script>;


border: 2px solid #e6e6e6;

 -->
</head>

<style >
	body{
		overflow-x:hidden; 
	}
	#centered1{
		position: absolute;
		font-size: 10vw;
		top: 30%;
		left:30%;
		transform:translate(-50%, -50%);
	}

	#centered2{
		position: absolute;
		font-size: 10vw;
		top: 50%;
		left:30%;
		transform:translate(-50%, -50%);
	}
	#centered3{
		position: absolute;
		font-size: 10vw;
		top: 70%;
		left:30%;
		transform:translate(-50%, -50%);
	}
	#signup{
		width: 60%;
		border-radius: 30px;
	}
	#signup:hover{
		width: 60%;
		border-radius: 30px;
		
		border: 2px solid #1da1f2;
		color: #1da1f2;	
	}
	#login{
		width: 60%;
		border-radius: 30px;
		background-color: #fff;
		border: 1px solid #1da1f2;
		color: #1da1f2;	
	}
	#login:hover{
		width: 60%;
		border-radius: 30px;
		background-color: #fff;
		border: 2px solid #1da1f2;
		color: #1da1f2;	
	}
	.well{
		top: 20px;
		top: 20px;
		background-color: #228fd4;
		padding-top: 15px;
		padding-bottom: 15px
	}



</style>

<body>
	<div class="row">
		<div class="col-sm-12">
			<div class="well">
				<center><h1>Campus Connect</h1></center>
					
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6" style="left:0.5%">
			<img src="images/campusconnect.png" class="img-rounded" title="Campus connect" width="700px" height="510px">
			<div id="centered1" class="centered">
				<h3 style="color:#340078;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>No Peer Pressure</strong></h3>
			</div>

			<div id="centered2" class="centered">
				<h3 style="color:#340078;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>See Everyone's Ideas</strong></h3>
			</div>

			<div id="centered3" class="centered">
				<h3 style="color:#340078;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Join Now</strong></h3>
			</div>
		</div>

		<div class="col-sm-6" style="left:8%;">
			<img src="images/campusconnect.png" class="img-rounded" title="Campus connect" width="80px" height="80px">
			<h2><strong>See What's Being <br> Created Around You</strong></h2><br>
			<h4><strong>Join Campus Connect Today!!</strong></h4><br>

			<form method="post" action="">
				<button id="signup" class="btn btn-info btn-lg" name="signup">Sign Up</button><br><br>
				<?php
				if(isset($_POST['signup'])){
					echo "<script>window.open('signup.php','_self')</script>";
				}
				?>

				<button id="login" class="btn btn-info btn-lg" name="login">Log In</button><br>
				<?php
				if(isset($_POST['login'])){
					echo "<script>window.open('signin.php','_self')</script>";
				}
				?>

			</form>

		</div>



	</div>


</body>
</html>