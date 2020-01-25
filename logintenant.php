<?php
require"config.php";
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Rental Listings</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet">
        <style>
            .container{
                margin-top: 5%;
            }
            .form{
                background-color: rgba(0,0,0,0.6);
                color: white;
                width: fit-content;
                margin-right: 2%;
                padding: 2%;
                padding-bottom: 2%;
            }
            input[type=text]{
                padding: 8px 15px;
                border-radius: 25px;
            }
            input[type=password]{
                padding: 8px 15px;
                border-radius: 25px;
            }
            
            #1, #2 { 
                display: inline-block; 
            }
        </style>
    </head>
    <body>
        <div class="header">
            <img src="img\logo.png" alt="logo" class="logo" width="110" height="60" border="2">
            <b class="title"><a href="index.php" style="text-decoration: none;">Housing Management</a></b>
            <ul class="icon">
                <div class="dropdown"><li><a href="#"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;Sign In<span class="glyphicon glyphicon-menu-down"></span></a></li>
				<div class="dropdown-content">
                        <a href="loginlandlord.php">Login as Landlord</a>
                        <a href="logintenant.php">Login as Tenant</a>
                </div>
                </div>
                <div class="dropdown"><li><a href="#" class="dropbtn">&nbsp;Sign Up<span class="glyphicon glyphicon-menu-down"></span></a></li>
                    <div class="dropdown-content">
                        <a href="signupLandlord.php">Register as Landlord</a>
                        <a href="signupTenant.php">Register as Tenant</a>
                </div>
                </div>
            </ul>
        </div>
        <div class="container">
            <div id="1" style="float:left;"><img src="img/signin.jpg" alt="signin" hspace="35"></div>
        <div class="form" id="2" style="float:right;">
            <center>
            <h3>SIGN IN</h3>
			<form method="post" enctype="multipart/form-data">
            <table cellspacing="20">
                <tr>
                    <td>Username : </td>
                    <td><input type="text" name="username" placeholder="Enter username" required></td>
                </tr>
                <tr>
                    <td>Password : </td>
                    <td><input type="password" name="password" placeholder="Enter password" required></td>
                </tr>
            </table>
            <button class="btn" name="login"><b>Sign In</b></button>
			</form>
            <br><br>
            <a href="#" name="forgot">Forgot Password?</a>
            <br><br><br>
            New User : <button class="btn"><b>Sign Up</b></button>
            <br><br>
            </center>
        </div>
        </div>
    </body>
</html>


<?php
if(isset($_POST['login'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$password=md5($password);
	$q="select * from tenantregistration where username='$username' and password='$password'";
	$runq=mysqli_query($con,$q);
	if(mysqli_num_rows($runq)==1){
                $_SESSION['username']=$username;
                $_SESSION['password']=$password;
				//echo'<script>alert("Logged In")</script>';
				header("location:hometenant.php");
	}
}
?>
