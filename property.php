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
            .profile{
                background-image: linear-gradient(90deg, rgba(255,0,0,0), rgba(255,0,0,0.5));
            }

            .bigimage{
                margin: 2%;
                padding: 4%;
                width: fit-content;
            }
            .column{
                width:47.5%;
                float: left;
            }
            .column1{
                width:2%;
                float: left;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <img src="img\logo.png" alt="logo" class="logo" width="110" height="60" border="2">
            <b class="title"><a href="index.php" style="text-decoration: none;">Housing Management</a></b>
            <ul class="icon">
                <li><a href="hometenant.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
                <li><a href="listing.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Listings</a></li>
                <li><a href="tenantprofile.php"><span class="glyphicon glyphicon-user"></span>&nbsp;My Profile</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>
            </ul>
        </div>
    <center>
        <div class="bigimage" style="width: 650;">
            <img src="img/l1.jpg" alt="building" width="650">
            <br>
            <br>
            <p style="float: left"><b>Address</b> : H.No: 11-143/8 & 9, Flat No.203 <br>Sai Priya Residencies, <br>Bachupally, Hyderabad.<br><br><span style="float:left"><b>Pin Code </b>: 500090</span></p>
            <!--https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_modal_img-->
            <img src="img/map.jpg" alt="map" style="float: right" height="100px">
            <br><br><br><br><br><br>
            <button style="float: right;background-color: #2196F3;width: 100px;">See Map</button>
            <br><br>
            <div class="column"><img src="img/p1.jpg" alt="p1" width="300" height="200"></div>
            <div class="column1"><img src="img/white.png" alt="white" width="20" height="200"></div>
            <div class="column"><img src="img/p2.jpg" alt="p2" width="300" height="200"></div>
            <div></div>
            <div class="column"><img src="img/p3.jpg" alt="p3" width="300" height="200"></div>
            <div class="column1"><img src="img/white.png" alt="white" width="20" height="200"></div>
            <div class="column"><img src="img/p4.jpg" alt="p4" width="300" height="200"></div>
        </div> 
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <span style="float:inherit"><button style="background-color: #2196F3;width:150px;height: 50px;font-size: 20px;"><a href="agreement.php" style="text-decoration: none;color: black;">Book for Rent</a></button></span>
        </center>
    </body>
</html>

