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
	<?php
		$username=$_SESSION['username'];
		$password=$_SESSION['password'];
		$id=$_REQUEST['id'];
		//echo "$id";
		$q="select name,photo,address,price,area,status,moreinfo,photo1,photo2,photo3,photo4 from addproperty where username='$username' and password='$password' and id='$id'";
		$r=mysqli_query($con,$q);
		while($row=mysqli_fetch_array($r))
		{
			echo '<div class="bigimage" style="width: 650;">
            <img src="data:photo/jpg;base64,'.base64_encode($row['photo']).'" alt="list1"  alt="building" width="650">
            <br><br>
            <p style="float: left"><b>Address</b> :'; echo"{$row['address']}"; echo'<br><br><br><span style="float:left"><b>Pin Code </b>: 500090</span></p>
            <img src="img/map.jpg" alt="map" style="float: right" height="100px">
            <br><br><br><br><br><br>
            <button style="float: right;background-color: #2196F3;width: 100px;">See Map</button>
            <br><br>
            <div class="column"><img src="data:photo/jpg;base64,'.base64_encode($row['photo1']).'" alt="p1" width="300" height="200"></div>
            <div class="column1"><img src="img/white.png" alt="white" width="20" height="200"></div>
            <div class="column"><img src="data:photo/jpg;base64,'.base64_encode($row['photo2']).'" alt="p2" width="300" height="200"></div>
            <div></div>
            <div class="column"><img src="data:photo/jpg;base64,'.base64_encode($row['photo3']).'" alt="p3" width="300" height="200"></div>
            <div class="column1"><img src="img/white.png" alt="white" width="20" height="200"></div>
            <div class="column"><img src="data:photo/jpg;base64,'.base64_encode($row['photo4']).'" alt="p4" width="300" height="200"></div>
			</div> 
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
			/*<span style="float:inherit"><button style="background-color: #2196F3;width:150px;height: 50px;font-size: 20px;">Book for Rent</button></span>';*/
			//echo "<a href=\"delete.php?id='$id'\">Delete</a>";
		}
	?>
    </center>
    </body>
</html>

