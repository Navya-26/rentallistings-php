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
            a{
                color: blue;
                text-decoration: none;
                font-size: 20px;
            }
            a:hover{
                color: red;
                background-color: lightblue;
                padding: 4%;
            }
            a:active{
                background-color: lightgray;
            }
        </style>
    </head>
    <body style="background-color:lavenderblush;">
        <center>
            <div class="hyperlinks">
                <br><br><br><br>
                <a href="#">Home</a>
                <br><br><br><br>
                <a href="listing.php" target="_blank">Listings</a>
                <br><br><br><br>
                <a href="tenantprofile.php" target="_blank">My Profile</a>
                <br><br><br><br>
                <a href="logout.php" target="_blank">Logout</a>
                <br><br>
            </div>
        </center>
    </body>
</html>
