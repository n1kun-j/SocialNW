<?php
$error=NULL;

require_once('PHPMailer/PHPMailerAutoload.php');
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    
    $password=$_POST['password'];
    $password1=$_POST['password1'];
    $email_id=$_POST['email_id'];
    $address=$_POST['address'];
    $phone_no=$_POST['phone_no'];
    if(strlen($username)<5)
    {
        echo '<script language="javascript">';
        echo 'alert("Username must be at least 5 characters long")';
        echo '</script>';
}
else if($password1!=$password)
{
    echo '<script language="javascript">';
        echo 'alert("Confirm password does not match previous password")';
        echo '</script>';
}
else
{
    $mysqli=new MySQLi('localhost','root','','sportsarena');
    $username=$mysqli->real_escape_string($username);
    $password=$mysqli->real_escape_string($password);
    $password1=$mysqli->real_escape_string($password1);
    $email_id=$mysqli->real_escape_string($email_id);
    $address=$mysqli->real_escape_string($address);
    $phone_no=$mysqli->real_escape_string($phone_no);
    $vkey=md5(time().$username);
    //echo $vkey;
    $password=md5($password);
    $check= $mysqli->query("Select email from registration where email='$email_id' ");
    if($check->num_rows>0)
    {
        //$error="<p>This email already exists </p>";
        echo '<script language="javascript">';
        echo 'alert("Someone already registered using this email")';
        echo '</script>';
    }
    else
    {
    $insert=$mysqli->query("INSERT into registration(username,password,email,address,contact,vkey) values ('$username','$password','$email_id','$address','$phone_no','$vkey')");
    if($insert)
    {
     
     $message =  "<a href='http://localhost/www/verify.php?vkey=$vkey'>Register Account</a>";
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'pmpandit31086@gmail.com';
$mail->Password = 'daalbhajiyechawal';
$mail->setFrom('sportsarena');
$mail->Subject = 'Hello World';
$mail->Body = "<a href='http://localhost/www/verify.php?vkey=$vkey'>Register Account</a>";
$mail->AddAddress($email_id);
$mail->send();
if($mail->Send())
{
    echo "succesful";
     header('location:thankyou.php');
}
else
{
    echo "so jaa chupchaap";
    echo "Mailer Error: " . $mail->ErrorInfo;
}
    



    }


    else
    {
        echo $mysqli->error;
    }


}
    
}
}
?>
<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="abc.css">



</head>

<body>

<div id="container_demo" >

        <div id="wrapper">

                <div id="signup" class="animate form">

                    <form  method="post" action="" autocomplete="on"> 

                        <h1>Sign Up</h1> 

                        <p> 

                            <label for="username" class="uname" data-icon="u" > Username </label>

                            <input id="username" name="username" required="required" type="text" placeholder="myusername"/>

                        </p>

                        <p> 

                            <label for="email_id" class="email" data-icon="e" > Email Address </label>

                            <input id="email_id" name="email_id" required="required" type="email" placeholder="myemail@gmail.com"/>

                        </p>

                        <p> 

                            <label for="password" class="youpasswd" data-icon="p"> Password </label>

                            <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 

                        </p>

                        <p> 

                            <label for="confirm_password" class="c_passwd" data-icon="cp"> Confirm Password </label>

                            <input id="password" name="password1" required="required" type="password" placeholder="eg. X8df!90EO" /> 

                        </p>

                        <p> 

                            <label for="address" class="address" data-icon="d"> Address </label>

                            <input id="address" name="address" required="required" type="text" placeholder="eg. Moon lane, Sun Apartments, Mumbai - 400001" /> 

                        </p>

                        <p> 

                            <label for="phone_no" class="phone" data-icon="pn"> Contact </label>

                            <input id="phone_no" name="phone_no" required="required" type="number" placeholder="eg. 9876543210" /> 

                        </p>



                        <p class="Sign Up button"> 

                            <input type="submit" name="submit" value="Sign Up" /> 

                        </p>

                        <p class="change_link">  

                            Already a member ?

                            <a href="sample2.html" class="to_login"> Go and log in </a>

                        </p> 

                    </form>
                <center>
                    <?php
                    
                    echo $error;
                    ?>
                </center>
                </div>



                </body>
                </html>
            