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
            <div class="profile">
			<?php
			$username=$_SESSION['username'];
			$password=$_SESSION['password'];
			$q="select * from landlordregistration where username='$username' and password='$password'";
			$rq=mysqli_query($con,$q) or die("Query failed");
			while($row=mysqli_fetch_array($rq))
			{
				echo '<h3>Hi '; echo"{$row['name']}";echo'..!</h3>
				<br><br>
				<img src="img/user.png" height="80" width="80" hspace="50">
				<h4>Manage your Profile</h4>
				<table  cellspacing="20">
				<tr><td>
				Name :</td><td> '; echo"{$row['name']}";echo'</td></tr>
				<tr><td>Email Id :</td><td>'; echo"{$row['username']}"; echo'</td></tr>
				<tr><td>Mobile No.  :</td><td>'; echo"{$row['mobileno']}"; echo'</td></tr>
				<tr><td>City  :</td><td>'; echo"{$row['city']}"; echo'</td></tr>
				<tr><td>State  :</td><td>'; echo"{$row['state']}"; echo'</td></tr>
				<tr><td>Country  :</td><td>'; echo"{$row['country']}"; echo'</td></tr>
				</table>';
			}
			?>
        <!--<h3>Hi User..!</h3>
        <br><br>
        <img src="img/user.png" height="80" width="80" hspace="50">
        <h4>Manage your Profile</h4>
        <table  cellspacing="20">
        <tr><td>
        Name :</td><td> USER</td></tr>
        <tr><td>Email Id :</td><td> user123@gmail.com</td></tr>
        <tr><td>Mobile No.  :</td><td> +91 9999999999</td></tr>
        <tr><td>Location  :</td><td> Hyderabad</td></tr>
        </table>-->
            </div>
        </center>
    </body>
</html>

