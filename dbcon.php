<?php 
$con = mysqli_connect('localhost','root','');
$db = mysqli_select_db($con,'e-insurance')or die(mysqli_error());
?>