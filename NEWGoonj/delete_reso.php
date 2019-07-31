<?php
session_start();
if(!$_SESSION['name'])
{
header("location:login.php");
}

include 'conn.php';

$rid = $_SESSION['rid'] ;
//echo $id;
$q = " DELETE FROM res WHERE rid = '$rid' ";

mysqli_query($conn,$q);

header("location:display_dept_head_details_delhi1.php");
?>