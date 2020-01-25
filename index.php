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
            body{
                background-image: url(img/bg-01.jpg);
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
        <center>
            <div class="jumbotron">
                
                <h2><u>HOUSING MANAGEMENT</u></h2>
                <pre>                       ....A choice of Smart Landlords and Tenants</pre>
                <br>
                <p>Housing Management application is "Trusted by both Landlords and Tenants".</p>
                <p>Whats more? You can work at your convenience!</p>
                <p>Login and Continue.</p>
                <br>
            </div>
        </center>
    </body>
</html>
