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
            
            .photo{
                margin: 2%;
                margin-top: 1%;
                padding: 4%;
                padding-top: 2%;
                width: fit-content;
            }
            .column{
                width:29%;
                float: left;
            }
            .column1{
                width:40%;
                float: left;
            }
            .column2{
                width:1%;
                float: left;
            }
            input{
                padding: 12px 20px;
                margin: 8px 0;
            }
            /*.agreement{
                margin: 8%;
                padding: 10%;
            }*/
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
        <!--
        https://signx.wondershare.com/images/templates/standard-lease-agreement-template-3.pdf
        https://www.pandadoc.com/residential-landlord-tenant-agreement-template/-->
    <center>
        <div class="photo">
            <div class="column"><br><br><img src="img/landlorduser.jpg" alt="landlordphoto" width="280" height="300"><br><br>
                <input type="text" name="landlordname" value="         <?php echo $_POST['lname']; ?>"></div>
            <div class="column2"><img src="img/white.png" alt="white" height="350" width="10"></div>
            <div class="column1"><img src="img/l1.jpg" alt="building" width="350" height="350"></div>
            <div class="column2"><img src="img/white.png" alt="white" height="350" width="10"></div>
            <div class="column"><br><br><img src="img/tenantuser.jpg" alt="tenantphoto" width="280" height="300"><br><br>
                <input type="text" name="tenantname" value="          <?php echo $_POST['tname']; ?>"></div>
            <div class="agreement">
                <b>AGREEMENT</b>
                <br>
				<?php
				if(isset($_POST['generate']))
				{
                 echo "This Agreement is entered into by ".'<b><u>'.$_POST['lname'].'</u></b>'."(“Landlord”) AND ".'<b><u>'.$_POST['tname'].'</u></b>'." (“Tenant”) and outlines the rights and obligations of both parties relating to rental of property at the following address — ".'<b><u>'.$_POST['pname'].'</u></b>'."-".'<b><u>'.$_POST['address'].'</u></b>'." (“Rental Property”).
                    ".'<b><u>'.$_POST['lname'].'</u></b>'." and ".'<b><u>'.$_POST['tname'].'</u></b>'." are collectively referred to in this Residential Landlord-Tenant Agreement as the “Parties.”  Both Parties have had an opportunity, before signing this document, to fully review it and consult with a lawyer, if desired.  To their best understanding, this document accurately and fully describes the expectations and agreements between the Parties relating to the ".'<b><u>'.$_POST['pname'].'</u></b>'."-".'<b><u>'.$_POST['address'].'</u></b>'." for the duration of this Residential Landlord-Tenant Agreement.";
                echo '<br><br>
                <button style="background-color: #2196F3;width: 20%;padding: 2%;font-size: 20px;" onclick="f()">Print the Agreement</button>
				<script>
				function f() {
					window.print();
				}
				</script>';
				}
				?>
            </div>
        </div>
    </center>
    </body>
</html>

