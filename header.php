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
            .title{
                padding-top: 7%;
            }
            li a{
                color: blue;
            }
            li a:hover{
                background-color: lightblue;
            }
        </style>
    </head>
    <body>
        <br>
        <div class="header">
            <img src="img\logo.png" alt="logo" class="logo" width="110" height="60" border="2">
            <b class="title"><a href="index.php" style="text-decoration: none;">Housing Management</a></b>
            <ul class="icon">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                <li><a href="mylistings.php" target="_blank"><span class="glyphicon glyphicon-home"></span>Listings</a></li>
                <li><a href="addproperty.php" target="_blank"><span class="glyphicon glyphicon-home"></span>Add Property</a></li>
                <li><a href="agreement.php" target="_blank"><span class="glyphicon glyphicon-home"></span>Agreement</a></li>
                <!--<li><a href="payment.php" target="_blank"><span class="glyphicon glyphicon-home"></span>Payment</a></li>-->
                <li><a href="landlordprofile.php" target="_blank"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
                <li><a href="logout.php" target="_blank"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
            </ul>
        </div>
    </body>
</html>
