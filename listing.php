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
                width: 50%;
                margin-top: -15%;
                padding: 3%;
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
                <li><a href="hometenant.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
                <li><a href="listing.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Listings</a></li>
                <li><a href="tenantprofile.php"><span class="glyphicon glyphicon-user"></span>&nbsp;My Profile</a></li>
                <li><a href="logout.php" ><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>
            </ul>
        </div>
        <h2 style="margin: 4%">ALL RENTAL LISTINGS</h2>
		<?php
		$username=$_SESSION['username'];
		$password=$_SESSION['password'];
		/*echo $username;
		echo $password;*/
		$q="select id,name,photo,address,price,area,status,moreinfo from addproperty";
		$r=mysqli_query($con,$q);
		if(mysqli_num_rows($r)==0)
			echo'<script>alert("No property listed")</script>';
		while($row=mysqli_fetch_array($r))
		{
            //$_SESSION['id']=$row['id'];
			//echo "{$_SESSION['id']}";
			
			echo '<div class="listing">
			<div id="1" style="float:left;"><img src="data:photo/jpg;base64,'.base64_encode($row['photo']).'" alt="list1" height="200px"></div>
				<div id="2" class="sidebox">
					<div class="name"> <u>'; echo "{$row['name']}"; echo'</u> <p style="font-size:10px;">'; echo "{$row['address']}"; echo'</p></div>
				    <br>
					<hr>
					<div id="1" style="float: left;">₹ '; echo"{$row['price']}"; echo'<hr width="1" size="50"></div>
					<div id="2"><span style="font-size:15px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Area :</span> '; echo"{$row['area']}"; echo'<span style="font-size:15px">sqft</span>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '; echo"{$row['status']}";
						echo '<hr width="1" size="50" style="margin-left:370px;">
					</div>
					<br>
					<hr>
					<span style="font-size: 10px;">'; echo "{$row['moreinfo']}"; echo'</span>
					<ul class="listbtn">
						<li>';
						echo "<a href=\"tenantproperty.php?id={$row['id']}\">More details</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
						echo "<a href=\"connectnow.php?id={$row['id']}\">Connect now</a>";
				echo '</ul>
			</div>
			</div>';
		}
		?>
        <!--<div class="listing">
            <div id="1" style="float:left;"><img src="img/l1.jpg" alt="list1" height="200px"></div>
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
                    <a href="#" style="color:red;">Connect now</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button class="b1"><a href="property.php" style="text-decoration: none;color: black;">More details</a></button>
            </ul>
        </div>
        </div>
        <div class="listing">
            <div id="1" style="float:left;"><img src="img/l2.jpg" alt="list1" height="200px" width="300px"></div>
            <div id="2" class="sidebox">
                <div class="name"> <u>2 BHK Flat</u> <p style="font-size:10px;">Gachibowli,Hyderabad</p></div>
                <br>
                <hr>
                <div id="1" style="float: left;">₹ 18,000<hr width="1" size="50"></div>
                <div id="2"><span style="font-size:15px">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Area :</span> 1200 <span style="font-size:15px">sqft</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Semi-Furnished
                    <hr width="1" size="50" style="margin-left:370px;">
                </div>
                <br>
                <hr>
                <span style="font-size: 10px;">2BHK semi-furnished flat in Gachibowli for rent only for families.Maintainance and water bills are excluded</span>
                <ul class="listbtn">
                    <li><span style="font-size:15px;"> 
                    <a href="#" style="color:red;">Connect now</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button class="b1"><a href="property.php" style="text-decoration: none;color: black;">More details</a></button>
            </ul>
            </div>
        </div>-->
    </body>
</html>

