<?php
include 'conn.php';
session_start();

//echo $_SESSION['name'];
if(!$_SESSION['name'])
{
header("location:login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js" integrity="sha384-u/bQvRA/1bobcXlcEYpsEdFVK/vJs3+T+nXLsBYJthmdBuavHvAW6UsmqO2Gd/F9" crossorigin="anonymous"></script>
    <!--<link rel="stylesheet" type="text/css" href="style.css">-->

</head>
<body style="background-color:#d4d6d8;">

<div class="container">
	<div class="col-lg-12"><br>
		<div class="row">
		<h3 class="col-lg-6">Displaying Records</h3>
        <a href="insert_activities.php" class="" style="margin-right:150px;"><button class="btn btn-success">Add</button></a>
				<a href="logout.php" class="" style="margin-right:150px;"><button class="btn btn-success " name="logout">logout</button></a>
				<a href="mymail.php" class=""><button class="btn btn-success " name="Mail">Mail</button></a>
    </div><br>
		<table class="table table-stripped table-hover table-bordered">
			<tr class="text-dark">
				<th><h5>Act ID</h5></th>
				<th><h5>Activity Name</h5></th>
				<th><h5>Time of Commencement</h5></th>
				<th><h5>Time of Completion</h5></th>
				<th><h5>Activity completed</h5></th>
				<th><h5>Total Activity</h5></th>
				<th><h5>No of Emp</h5></th>
				<th><h5>View</h5></th>
				<th><h5>Resource</h5></th>
				<th><h5>Employee</h5></th>


			</tr>


			<?php
include 'conn.php';


$q="select * from activity";

$query = mysqli_query($conn,$q);

while ($res = mysqli_fetch_array($query)) {
?>

			<tr>
				<th><?php echo $res['aid'] ?></th>
				<th><?php echo $res['aname'] ?></th>
				<th><?php echo $res['tsa'] ?></th>
				<th><?php echo $res['tea'] ?></th>
				<th><?php echo $res['ac'] ?></th>
				<th><?php echo $res['ta'] ?></th>
				<th><?php echo $res['noe'] ?></th>

				<th><a  href="update_activities.php?aid=<?php echo $res['aid']; ?>" class="text-white"><button class="btn btn-success">VIEW</button></a></th>
				<th><a  href="resource_display.php?aid=<?php echo $res['aid']; ?>" class="text-white"><button class="btn btn-success">RESOURCE</button></a></th>
				<th><a  href="display_emp_details.php?aid=<?php echo $res['aid']; ?>" class="text-white"><button class="btn btn-success">EMP DETAILS</button></a></th>
			</tr>
<?php }
?>

		</table>
	</div>
	<div align="center">
		<form action="generate.php" method="post">
			<input name="" value="generate report" class="btn btn-success" type="submit"/>
		</form>
	</div>
</div>
</body>
</html>
