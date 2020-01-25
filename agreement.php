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
				background-color : lightyellow;
			}
			form{
				background-color : lightgrey;
				width : fit-content;
				margin : 3%;
				padding : 3%;
				padding-top :1%;
			}
			input{
				height : 25px;
				border-radius :10px;
			}
			button{
				background-color : #24e0ad;
				/*height : 30px;*/
				font-size : 20px;
				padding : 2%;
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
                <li><a href="agreement.php"><span class="glyphicon glyphicon-home"></span>Agreement</a></li>
                <!--<li><a href="payment.php"><span class="glyphicon glyphicon-home"></span>Payment</a></li>-->
                <li><a href="landlordprofile.php"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
            </ul>
		</div>
		<center>
		<form method="post" action="agreementprint.php">
		<h2>Form for Agreement</h2>
		<table cellpadding=10>
		<tr><td>Name of the Landlord to be there on the agreement:</td>
		<td><input type="text" name="lname" required></td></tr>
		<tr><td>Name of the Tenant to be there on the agreement:</td>
		<td><input type="text" name="tname" required></td></tr>
		<tr><td>Property Name : </td>
		<td><input type="text" name="pname" required></td></tr>
		<tr><td>Complete Address : </td>
		<td><input type="text" name="address" required></td></tr>
		</table><br>
		<button name="generate">Generate Agreement</button>
		</form>
		</center>
	</body>
</html>

