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
                <li><a href="#"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
                <li><a href="listing.php" target="_blank"><span class="glyphicon glyphicon-home"></span>&nbsp;Listings</a></li>
                <li><a href="tenantprofile.php" target="_blank"><span class="glyphicon glyphicon-user"></span>&nbsp;My Profile</a></li>
                <li><a href="logout.php" target="_blank"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>
            </ul>
        </div>
    </body>
</html>
