<?php
require"config.php";
session_start();
?>

<?php 
require_once('pytconfig.php'); 
?>
<html>
  <head>
    <title> RazorPay </title>
    <meta name="viewport" content="width=device-width">
    <style>
      .razorpay-payment-button {
        color: #ffffff !important;
        background-color: #7266ba;
        border-color: #7266ba;
        font-size: 14px;
        padding: 10px;
      }
	  form{
		  padding : 5%;
	  }
    </style>
  </head>
  <body>
  <?php
    $id=$_REQUEST['id'];
	//echo $id;
	$q="select price from addproperty where id='$id'";
	$rq=mysqli_query($con,$q) or die("Query failed1");
	if($rq)
	{
		$row=mysqli_fetch_array($rq);
		$p=$row[0];
		//echo $p;
	}
	?>
  <center>
    <form action="charge.php" method="POST">
    <!-- Note that the amount is in paise = 50 INR -->
    <script
        src="https://checkout.razorpay.com/v1/checkout.js"
        data-key="<?php echo $razor_api_key; ?>"
        data-amount="<?php echo $p*100; ?>"
        data-buttontext="Pay your rent with Razorpay"
        data-name="rentallistings.com"
        data-description="Txn with RazorPay"
        data-image="#"
        data-prefill.name="Ex : name"
        data-prefill.email="support@razorpay.com"
        data-theme.color="#F37254"
    ></script>
    <input type="hidden" value="Hidden Element" name="hidden">
    </form>
	</center>
  </body>
</html>