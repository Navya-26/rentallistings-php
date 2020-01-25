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
                <li><a href="hometenant.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
                <li><a href="listing.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Listings</a></li>
                <li><a href="tenantprofile.php"><span class="glyphicon glyphicon-user"></span>&nbsp;My Profile</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>
            </ul>
        </div>
        <center>
            <div class="profile">
			<?php
			$username=$_SESSION['username'];
			$password=$_SESSION['password'];
			$q="select * from tenantregistration where username='$username' and password='$password'";
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
				<tr><td>Email Id :</td><td>'; echo"{$row['email']}"; echo'</td></tr>
				
				
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

