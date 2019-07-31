<?php
include 'conn.php';

session_start();
echo $_SESSION['name'];
if(!$_SESSION['name'])
{
header("location:login.php");
}

$to=$_POST['to'];
$subject=$_POST['subject'];
$messege=$_POST['messege'];
$file=$_POST['file'];
$from=$_SESSION['name'];
echo $to,$subject,$messege;
$q="select * from eemmail";
$query= mysqli_query($conn,$q);
$res=mysqli_fetch_array($query);
echo $res['fromm'];
$q="insert into eemmail(fromm,too,suubject,messege,ffile) values('$from','$to','$subject','$messege','$file')";
$query = mysqli_query($conn,$q);
header("location:mymail.php");
?>