<?php
require"config.php";
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Rental Listings</title>
    </head>
    <frameset rows="20%,*">
        <frame name="f1" src="headertenant.php"/>
        <frameset cols="20%,*">
            <frame name="f2" src="hyperlinkstenant.php"/>
            <frame name="f3" src="welcometenant.php"/>
        <frameset>
    </frameset>
</html>