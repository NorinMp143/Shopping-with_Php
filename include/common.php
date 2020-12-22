<?php
$con = mysqli_connect("localhost","root","Toor@143","shopify") or die(mysqli_error($con));
if(!isset($_SESSION['email'])){
	session_start();
}
?>
