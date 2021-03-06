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
                margin-right: 4%;
                padding: 2%;
                padding-bottom: 2%;
            }
            input{
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
            <div id="1" style="float:left;"><img src="img/tenant.jpg" alt="signup" hspace="35" width="200%" height="450"></div>
        <div class="form" id="2" style="float:right;">
            <center>
            <h3>SIGN UP</h3>
			<form method="post" enctype="multipart/form-data">
            <table cellspacing="20">
                <tr>
                    <td>Enter Name : </td>
                    <td><input type="text" name="n1" placeholder="Enter your name" required></td>
                </tr>
                <tr>
                    <td>Email Id : </td>
                    <td><input type="email" name="email" placeholder="Ex:xyz@gmail.com" required></td>
                </tr>
                <tr>
                    <td>Set Username : </td>
                    <td><input type="text" name="username" placeholder="Enter username" required></td>
                </tr>
                <tr>
                    <td>Set Password : </td>
                    <td><input type="password" name="password" placeholder="Enter password" required></td>
                </tr>
                <tr>
                    <td>Re-enter Password : </td>
                    <td><input type="password" name="re-password" placeholder="Enter password" required></td>
                </tr>
            </table>
            <button class="btn" name="Register"><b>Register</b></button>
            </form>
            </center>
        </div>
        </div>
    </body>
</html>

<?php
if(isset($_POST['Register'])){
	$name=$_POST['n1'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$repassword=$_POST['re-password'];
	$pwd=md5($password);
	$repwd=md5($password);
	/*echo"$name";
	echo"$mobileno";
	echo"$city";
	echo"$state";
	echo"$country";
	echo"$username";
	echo"$password";
	echo"$repassword";*/
	if($password!=$repassword)
	{
		echo '<script>alert("Your Password and Confirm Password not match")</script>';
	}
	else
	{
		$q="insert into tenantregistration (name,email,username,password,repassword) values('$name','$email','$username','$pwd','$repwd')";
		$runq=mysqli_query($con,$q);
		if($runq){
			//header("location:eventtype.php");
					$_SESSION['username']=$username;
					$_SESSION['password']=$password;
					
					echo '<script>alert("Registration successfull. It automaticcaly refreshes to home page")</script>';
					header("refresh:0; url=hometenant.php");
		}
	}
}
?>