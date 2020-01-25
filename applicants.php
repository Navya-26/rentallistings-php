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
                background-image: linear-gradient(rgba(255,0,0,0), rgba(0,0,255,0.5));
                
            }
            
            .container{
                margin: 2%;
                padding: 1%;
                padding-left: 0.5%;
                padding-bottom: 5.5%;
                padding-right: 8%;
                width: fit-content;
                background-color: #eee;
            }
            .column{
                width: 33%;
            }
            #1,#2,#3{
                display: inline-block;
            }
            .w3-light-grey{
                color:#000!important;background-color:#f1f1f1!important
            }
            .w3-round{border-radius:8px}
            .w3-blue{color:#fff!important;background-color:#2196F3!important}
            .w3-container{padding:0.01em 16px}
        </style>
    </head>
    <body>
        <div class="header">
            <img src="img\logo.png" alt="logo" class="logo" width="110" height="60" border="2">
            <b class="title"><a href="index.php" style="text-decoration: none;">Housing Management</a></b>
            <ul class="icon">
                <li><a href="homelandlord.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                <li><a href="mylistings.php"><span class="glyphicon glyphicon-home"></span>Listings</a></li>
                <li><a href="addproperty.php"><span class="glyphicon glyphicon-home"></span>Add Property</a></li>
                <li><a href="applicants.php"><span class="glyphicon glyphicon-home"></span>Applicants</a></li>
                <li><a href="payment.php"><span class="glyphicon glyphicon-home"></span>Payment</a></li>
                <li><a href="landlordprofile.php"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
            </ul>
        </div>
    <center>
        <div class="applicants">
        <div class="container">
            <div id="1" class="column" style="float: left;"><img src="img/l1.jpg" alt="l1" height="60" width="60"></div>
            <div id="2" class="column" style="float: left;"><input type="text" value="3 BHK Apartment, Bachupally, Hyderabad" size="50" style="padding: 5.3%;"></div>
            <div class="w3-light-grey w3-round column" id="3" style="float:left;margin: 1%;">
                <div class="w3-container w3-blue w3-round" style="width:5%;float: left;">5</div>No. of Applicants
            </div>
        </div>
        <div class="container">
            <div id="1" class="column" style="float: left;"><img src="img/l2.jpg" alt="l1" height="60" width="60"></div>
            <div id="2" class="column" style="float: left;"><input type="text" value="2 BHK Flat, Gachibowli, Hyderabad" size="50" style="padding: 5.3%;"></div>
            <div class="w3-light-grey w3-round column" id="3" style="float:left;margin: 1%;">
                <div class="w3-container w3-blue w3-round" style="width:2%;float: left;">2</div>No. of Applicants
            </div>
        </div>
        <div class="container">
            <div id="1" class="column" style="float: left;"><img src="img/list1.jpg" alt="l1" height="60" width="60"></div>
            <div id="2" class="column" style="float: left;"><input type="text" value="2 BHK Individual Flat, Kukatally, Hyderabad" size="50" style="padding: 5.3%;"></div>
            <div class="w3-light-grey w3-round column" id="3" style="float:left;margin: 1%;">
                <div class="w3-container w3-blue w3-round" style="width:1%;float: left;">1</div>No. of Applicants
            </div>
        </div>
            <div class="container">
            <div id="1" class="column" style="float: left;"><img src="img/list2.jpg" alt="l1" height="60" width="60"></div>
            <div id="2" class="column" style="float: left;"><input type="text" value="Individual House, Manikonda, Hyderabad" size="50" style="padding: 5.3%;"></div>
            <div class="w3-light-grey w3-round column" id="3" style="float:left;margin: 1%;">
                <div class="w3-container w3-blue w3-round" style="width:3%;float: left;">3</div>No. of Applicants
            </div>
            </div>
            <div class="container">
            <div id="1" class="column" style="float: left;"><img src="img/list3.jpg" alt="l1" height="60" width="60"></div>
            <div id="2" class="column" style="float: left;"><input type="text" value="Flat No.: 203, Shaikpet, Hyderabad" size="50" style="padding: 5.3%;"></div>
            <div class="w3-light-grey w3-round column" id="3" style="float:left;margin: 1%;">
                <div class="w3-container w3-blue w3-round" style="width:6%;float: left;">6</div>No. of Applicants
            </div>
            </div>
        </div>
    </center>
    </body>
</html>

