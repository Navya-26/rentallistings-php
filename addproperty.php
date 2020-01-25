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
            .form{
                background-color: #eee;
                margin-left: 24%;
                margin-right: 25%;
                padding: 2%;
            }
            input{
                padding: 8px 15px;
                border-radius: 25px;
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
        <div class="form">
        <h2>Add a Property</h2>
		<form method="post" enctype="multipart/form-data">
        <table cellpadding="10px">
            <tr>
                <td>Name of the Apartment/House* : </td>
                <td><input name="name" type="text" placeholder="Ex: Sri Sai Residency" required></td>
            </tr>
            <tr>
                <td>Upload photo of the House* : </td>
                <td><input name="photo" type="file" required></td>
            </tr>
            <tr>
                <td>Address* : </td>
                <td><input name="address" type="text" required></td>
            </tr>
            <tr>
                <td>Price* : </td>
                <td><input name="price" type="number" placeholder="Enter price in Rs." required></td>
            </tr>
            <tr>
                <td>Area* : </td>
                <td><input name="area" type="number" placeholder="Enter area in Sqrt." required></td>
            </tr>
            <tr>
                <td>Status* : </td>
                <td><input name="status" type="text" placeholder="Ex: Semi-Furnished" required></td>
            </tr>
            <tr>
                <td>More Information about property: </td>
                <td><input name="moreinfo" type="text"></td>
            </tr>
            <tr>
                <td>Upload Interior Photos : </td>
                <td><input name="photo1" type="file" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input name="photo2" type="file" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input name="photo3" type="file" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input name="photo4" type="file" required></td>
            </tr>
        </table>
        <br>
        <button style="background-color: #24a0ed;padding: 1%;width:15%;font-size: 25px;" name="add">Add</button>
		</form>
        </div>
    </center>
    </body>
</html>
<?php
if(isset($_POST['add']))
{
	$username=$_SESSION['username'];
	$password=$_SESSION['password'];
	//$password=md5($password);
	$name=$_POST['name'];
	$photo=$_FILES['photo']['tmp_name'];
	$img=addslashes(file_get_contents($photo));
	$address=$_POST['address'];
	$price=$_POST['price'];
	$area=$_POST['area'];
	$status=$_POST['status'];
	$moreinfo=$_POST['moreinfo'];
	$photo1=addslashes(file_get_contents($_FILES['photo1']['tmp_name']));
	$photo2=addslashes(file_get_contents($_FILES['photo2']['tmp_name']));
	$photo3=addslashes(file_get_contents($_FILES['photo3']['tmp_name']));
	$photo4=addslashes(file_get_contents($_FILES['photo4']['tmp_name']));
	/*echo"$username<br>";
	echo"$password<br>";
	echo"$name<br>";
	echo"{$photo}";
	echo"$address<br>";
	echo"$price<br>";
	echo"$area<br>";
	echo"$status<br>";
	echo"$moreinfo<br>";*/
	/*echo"$photo1";
	echo"$photo2";
	echo"$photo3";
	echo"$photo4";*/
	$q="insert into addproperty (username,password,name,photo,address,price,area,status,moreinfo,photo1,photo2,photo3,photo4) values ('$username','$password','$name','$img','$address','$price','$area','$status','$moreinfo','$photo1','$photo2','$photo3','$photo4')";
	$runq=mysqli_query($con,$q);
		if($runq){
					$_SESSION['username']=$username;
					$_SESSION['password']=$password;
					
					echo '<script>alert("Property Added Successfully")</script>';
		}
}
?>
