<?php
require"config.php";
session_start();
?>
<?php
	$username=$_SESSION['username'];
	$password=$_SESSION['password'];
	$id=$_REQUEST['id'];
	$q="delete from addproperty where (username='$username' and password='$password') and id='$id'";
	$rq=mysqli_query($con,$q) or die("Query failed1");
	if($rq)
		header("location:mylistings.php");
?>