<?php
error_reporting(0);
session_start();
include "conn.php";

$name = $_POST['name'];
$password = $_POST['pass'];
$poste= $_POST['post'];
$priviledge= $_POST['priviledge'];

if(isset($_POST['signup']))
{
	$q="INSERT INTO `login`( `name`, `password`, `type`,`postt`) VALUES ('$name','$password','$priviledge','$poste')";

  $query = mysqli_query($conn,$q);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js" integrity="sha384-u/bQvRA/1bobcXlcEYpsEdFVK/vJs3+T+nXLsBYJthmdBuavHvAW6UsmqO2Gd/F9" crossorigin="anonymous"></script>
<style>
	@import url(https://fonts.googleapis.com/css?family=Roboto:300);

	.login-page {
		width: 360px;
		padding: 8% 0 0;
		margin: auto;
	}
	.form {
		position: relative;
		z-index: 1;
		background: #FFFFFF;
		max-width: 360px;
		margin: 0 auto 100px;
		padding: 45px;
		text-align: center;
		box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
	}
	.form input {
		font-family: "Roboto", sans-serif;
		outline: 0;
		background: #f2f2f2;
		width: 100%;
		border: 0;
		margin: 0 0 15px;
		padding: 15px;
		box-sizing: border-box;
		font-size: 14px;
	}
	.form button {
		font-family: "Roboto", sans-serif;
		text-transform: uppercase;
		outline: 0;
		background: #4CAF50;
		width: 100%;
		border: 0;
		padding: 15px;
		color: #FFFFFF;
		font-size: 14px;
		-webkit-transition: all 0.3 ease;
		transition: all 0.3 ease;
		cursor: pointer;
	}
	.form button:hover,.form button:active,.form button:focus {
		background: #43A047;
	}
	.form .message {
		margin: 15px 0 0;
		color: #b3b3b3;
		font-size: 12px;
	}
	.form .message a {
		color: #4CAF50;
		text-decoration: none;
	}
		.form .register-form {
		display: none;
	}
	.container {
		position: relative;
		z-index: 1;
		max-width: 300px;
		margin: 0 auto;
	}
	.container:before, .container:after {
		content: "";
		display: block;
		clear: both;
	}
	.container .info {
		margin: 50px auto;
		text-align: center;
	}
	.container .info h1 {
		margin: 0 0 15px;
		padding: 0;
		font-size: 36px;
		font-weight: 300;
		color: #1a1a1a;
	}
.container .info span {
		color: #4d4d4d;
		font-size: 12px;
	}
	.container .info span a {
		color: #000000;
		text-decoration: none;
	}
	.container .info span .fa {
		color: #EF3B3A;
	}
	body {
		background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url("images/Gd2.jpg");;
 		background-repeat: no-repeat;
		background-size: cover;
		/*background: #76b852;  fallback for old browsers
		background: -webkit-linear-gradient(right, #76b852, #8DC26F);
		background: -moz-linear-gradient(right, #76b852, #8DC26F);
		background: -o-linear-gradient(right, #76b852, #8DC26F);
		background: linear-gradient(to left, #76b852, #8DC26F);
		font-family: "Roboto", sans-serif;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;*/
	}
	#login-page{
		width:100%;
		height: 50px;
	}

</style>

</head>
<body>
<div>
<div class="login-page">
  <div class="form">

		<div id="login-page">
			<img src="images/Glogo.png" alt="logo" width="60px" height="50px">
		</div>
			<br>
    <form class="login-form" method="post">
      <input type="text" placeholder="username" name="name" required/>
      <input type="password" placeholder="password" name="pass" required/>
      <!--<input type="text" placeholder="post" name="post" required/>-->
      <select name="priviledge" required class="form-control">
            <option>sr</option>
            <option>hr</option>
            <option>admin</option>
        </select>
        <br>
      <select name="post" required class="form-control">
            <option>sman</option>
            <option>dheaddelhi1</option>
            <option>lheaddelhi</option>
            <option>dheadbanglore1</option>
        </select>
        <br>
      <button name="signup">sign up</button>
    </form>
  </div>
</div>

</div>
</body>
</html>
