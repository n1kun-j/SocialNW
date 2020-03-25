<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
					<meta charset="utf-8">
  					<meta name="viewport" content="width=device-width, initial-scale=1">
  					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 					<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</head>
<style>

.loader {
	position: center;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background:  50% 50% no-repeat rgb(249,249,249);
}
body{
		overflow-x: hidden;
	}
	.main-content {
	  width: 50%;
	  height: 40%;
	  margin: 10px auto;
	  background-color: #fff;
	  
	  padding: 40px 50px;
	}
	.well{
		top: 20px;
		top: 20px;
		background-color: #228fd4;
		padding-top: 15px;
		padding-bottom: 15px
	}
	
	}
	#signup{
		width: 60%;
		border-radius: 30px;
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
		<div class="col-sm-12">
			<div class="main-content">
				<div class="header">
					<h3 style="text-align:center;"><strong>Join Campus Connect</strong></h3>
				</div>

				<div class="l-part">
					<form method="post" action="">
						<div class="input-group">
							<span class="input-group-addon"><i clas="glyphicon glyphicon-pencil"></i></span>
							<input type="text" class="form-control" placeholder="First Name" name="first_name" required="required"> 
						</div><br>

						<div class="input-group">
							<span class="input-group-addon"><i clas="glyphicon glyphicon-pencil"></i></span>
							<input type="text" class="form-control" placeholder="Last Name" name="last_name" required="required"> 
						</div><br>

						<div class="input-group">
							<span class="input-group-addon"><i clas="glyphicon glyphicon-lock"></i></span>
							<input type="password" class="form-control" placeholder="Password" name="u_pass" required="required"> 
						</div><br>

						<div class="input-group">
							<span class="input-group-addon"><i clas="glyphicon glyphicon-user"></i></span>
							<input type="email" class="form-control" placeholder="Email Id" name="u_email" required="required"> 
						</div><br>

						<div class="input-group">
							<span class="input-group-addon"><i clas="glyphicon glyphicon-chavron-down"></i></span>
							<select class="form-control iput-md" name="u_gender" required="required">
								<option disabled>Select Your Gender</option>
								<option>Male</option>
								<option>Female</option>
							</select>
						</div><br>

						<div class="input-group">
							<span class="input-group-addon"><i clas="glyphicon glyphicon-calendar"></i></span><a>Date Of Birth  </a>
							<input type="date" class="form-control iput-md" placeholder="Birthday" name="u_birthday" required="required"> 
						</div><br>

						<a style="text-decoration:none;float:right; color:#228fd4;" data-toggle="tooltip" title="Signin" href="signin.php"></a><br><br>

						<center>
							<button id="signup" class="btn btn-info btn-lg" name="sign_up">Sign Up</button>
						</center>
						<?php include("insert_user.php"); ?>

					</form>
				</div>

			</div>
		</div>
	</div>

</body>
</html>