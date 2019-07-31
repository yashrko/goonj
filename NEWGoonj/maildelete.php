<?php 
include 'conn.php';
session_start();
$me=$_SESSION['name'];
$q="delete from eemmail where too='$me'";
$query=mysqli_query($conn,$q);
header("location:mymail.php");
?>