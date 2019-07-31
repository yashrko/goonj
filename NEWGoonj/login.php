<?php
error_reporting(0);
session_start();
include "conn.php";

$name = $_POST['name'];
$Password = $_POST['pass'];
$poste= $_POST['post'];
//$locate= $_POST['location'];



if (isset($_POST['Login']))
{


	$q= "select * from login where name = '$name' and password = '$Password' and postt='$poste'" ;

	$res = mysqli_query($conn,$q);
	$res1 = mysqli_num_rows($res);

    if ($res1 == 0)
    {
          header("location:login.php?user=Incorrect username or Password");
	}

    while ($row = mysqli_fetch_array($res)) {

    	if ($row['name'] == $name  &&  $row['password'] == $Password)
    	 {
    	 	$_SESSION['name'] = $name ;
    		$_SESSION['password'] = $Password ;

    		if ($row['type'] == 'admin' and $row['postt']=='dheadbanglore1')
            {
    			header("location:display_dept_head_details_banglore1.php");
            }
            if ($row['type'] == 'admin' and $row['postt']=='dheadchennai1')
            {
    			header("location:display_dept_head_details_chennai1.php");
            }
            if ($row['type'] == 'admin' and $row['postt']=='dheaddelhi1')
            {
                $_SESSION['lid']=3;
    			header("location:display_dept_head_details.php");
            }
            if ($row['type'] == 'admin' and $row['postt']=='dheadhyderabad1')
            {
    			header("location:display_dept_head_details_hyderabad1.php");
            }
            if ($row['type'] == 'admin' and $row['postt']=='dheadkolkata1')
            {
    			header("location:display_dept_head_details_kolkata1.php");
            }
            if ($row['type'] == 'admin' and $row['postt']=='dheadmumbai1')
            {
    			header("location:display_dept_head_details_mumbai1.php");
            }
            if ($row['type'] == 'admin' and $row['postt']=='dheadpatna1')
            {
    			header("location:display_dept_head_details_patna1.php");
            }
            if ($row['type'] == 'admin' and $row['postt']=='dheadrishikesh1')
            {
    			header("location:display_dept_head_details_rishikesh1.php");
            }
            if ($row['type'] == 'hr' and $row['postt']=='lheadbanglore')
    		{
    			header("location:display_location_head_banglore.php");
            }
            if ($row['type'] == 'hr' and $row['postt']=='lheadchennai')
    		{
    			header("location:display_location_head_chennai.php");
            }
            if ($row['type'] == 'hr' and $row['postt']=='lheaddelhi')
    		{
    			header("location:delhi.php");
            }
            if ($row['type'] == 'hr' and $row['postt']=='lheadhyderabad')
    		{
    			header("location:display_location_head_hyderabad.php");
            }
            if ($row['type'] == 'hr' and $row['postt']=='lheadkolkata')
    		{
    			header("location:display_location_head_kolkata.php");
            }
            if ($row['type'] == 'hr' and $row['postt']=='lheadmumbai')
    		{
    			header("location:display_location_head_mumbai.php");
            }
            if ($row['type'] == 'hr' and $row['postt']=='lheadpatna')
    		{
    			header("location:display_location_head_patna.php");
            }
            if ($row['type'] == 'hr' and $row['postt']=='lheadrishikesh')
    		{
    			header("location:display_location_head_rishikesh.php");
            }

            elseif ($row['type'] == 'sr' and $row['postt']=='sman')
    		{
    			header("location:index.php");
            }

    	}


    }



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
		z-index:0.5;
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
			<select name="post" required class="form-control">
            <option>sman</option>
            <option>dheaddelhi1</option>
            <option>lheaddelhi</option>
            <option>dheadchennai1</option>
            <option>dheadhyderabad1</option>
            <option>dheadkolkata1</option>
            <option>dheadmumbai1</option>
            <option>dheadpatna1</option>
            <option>dheadbanglore1</option>
            <option>dheadrishikesh1</option>
        </select><br>


      <button name="Login">login</button>
    </form>

		<div>
		  	<p class="text-danger"><?php echo $_GET['user']; ?></p>
		    <p><?php echo $_GET['password']; ?></p>
		    <p><?php echo $_GET['both']; ?></p>
		</div>

  </div>
</div>

</div>
</body>
</html>
