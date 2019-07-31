<?php
session_start();
if(!$_SESSION['name'])
{
header("location:login.php");
}

include 'conn.php';

$aid = $_SESSION['aid'] ;
//echo $id;
$q = " DELETE FROM activity WHERE aid = '$aid' ";

mysqli_query($conn,$q);

header("location:display.php");
?>