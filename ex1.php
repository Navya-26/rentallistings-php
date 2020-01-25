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
            
            #1,#2,#3{
                display: inline-block;
            }
            .listing{
                margin: 4%;
                padding: 2%;
                width: 75%;
                height: 200px;
                border: 1px solid #4CAF50;
            }
            .sidebox{
                padding-left: 35%;
                font-size: 25px;
            }
            .vl{
                border: 6px solid green;
                height: 50px;
            }
            hr{
                margin-top: -35px;
                margin-left: 130px;
            }
            .b1{
                background-color: red;
                border-radius: 25%;
                float:right;
                width: 70%;
                margin-top: -15%;
                padding: 4%;
            }
            .listbtn{
                list-style-type: none;
                float: right;
                font-size: 20px;
            }
            .ilistbtn li{
                display: inline;
            }
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
                <li><a href="payment.php" ><span class="glyphicon glyphicon-home"></span>Payment</a></li>
                <li><a href="landlordprofile.php"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
            </ul>
        </div>
        <h2 style="margin: 4%">MY LISTINGS</h2>
        <div class="listing">
		<?php
		$q="select photo from example where  id=6";
		$r=mysqli_query($con,$q);
		while($row=mysqli_fetch_array($r))
		{
            echo '<div id="1" style="float:left;"><img src="data:photo/jpg;base64,'.base64_encode($row['photo']).'" alt="list1" height="200px"></div>';
		}
		?>
            <div id="2" class="sidebox">
                <div class="name"> <u>3 BHK Apartment</u> <p style="font-size:10px;">Bachupally,Hyderabad</p></div>
                <br>
                <hr>
                <div id="1" style="float: left;">₹ 32,000<hr width="1" size="50"></div>
                <div id="2"><span style="font-size:15px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Area :</span> 1565 <span style="font-size:15px">sqft</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Semi-Furnished
                    <hr width="1" size="50" style="margin-left:370px;">
                </div>
                <br>
                <hr>
                <span style="font-size: 10px;">4BHK semi-furnished apartment in Bachupally for rent only for families.</span>
                <ul class="listbtn">
                    <li><span style="font-size:15px;"> 
                    <a href="landlordproperty.php" style="color:red;font-size: 20px;">Edit</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button class="b1">Delete</button>
            </ul>
        </div>
        </div>
    </body>
</html>

