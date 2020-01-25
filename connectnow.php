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
                <li><a href="logout.php" ><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>
            </ul>
        </div>
		<center>
    <div class="profile">
	<br><br>
	<h2>Owner Details</h2>
	<?php
		$username=$_SESSION['username'];
		$password=$_SESSION['password'];
		$id=$_REQUEST['id'];
		//echo "$id";
		$lq="select username,password from addproperty where id='$id'";
		$rq=mysqli_query($con,$lq);
		while($l=mysqli_fetch_array($rq))
		{
			$lname=$l[0];
			$lpwd=$l[1];
			/*echo $lname;
			echo $lpwd;*/
		}
		$q="select name,mobileno,city,username from landlordregistration where username='$lname' and password='$lpwd'";
		$r=mysqli_query($con,$q);
		while($row=mysqli_fetch_array($r))
		{
			echo "<table cellspacing=15>";
			echo "<tr><td>Name : </td><td>".$row[0]."</td></tr>";
			echo "<tr><td>Mobile No : </td><td>".$row[1]."</td></tr>";
			echo "<tr><td>City : </td><td>".$row[2]."</td></tr>";
			echo "<tr><td>Email : </td><td>".$row[3]."</td></tr></table>";
		}
		?>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
    </center>
    </body>
</html>

