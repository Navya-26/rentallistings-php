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
                <li><a href="applicants.php"><span class="glyphicon glyphicon-home"></span>Applicants</a></li>
                <li><a href="payment.php"><span class="glyphicon glyphicon-home"></span>Payment</a></li>
                <li><a href="landlordprofile.php"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
            </ul>
        </div>
    <center>
        <div class="form">
        <h2>Add a Property</h2>
		<form method="post" enctype="multipart/form-data">
        <table cellpadding="10px">
            <tr>
                <td>Upload photo of the House* : </td>
                <td><input name="photo" type="file" required></td>
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
	$photo=$_FILES['photo']['tmp_name'];
	$img=addslashes(file_get_contents($photo));
	$q="insert into example(photo) values ('$img')";
	$runq=mysqli_query($con,$q);
		if($runq){
					echo '<script>alert("Registration successfull. It automatically refreshes to home page")</script>';
		}
}
?>
