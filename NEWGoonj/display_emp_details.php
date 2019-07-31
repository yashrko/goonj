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

</head>
<body style="background-color:#d4d6d8;">

<div class="container">
	<div class="col-lg-12"><br>
		<div class="row">
		<h3 class="col-lg-6">Displaying Records</h3>
        <a href="insert_emp.php"><button class="btn btn-success">Add</button></a><span style="margin-right:150px"></span> <a href="logout.php" ><button class="btn btn-success" name="logout">logout</button></a>
    </div><br>
		<table class="table table-stripped table-hover table-bordered">
			<tr class="text-dark">
				<th><h5>ID</h5></th>
				<th><h5>AID</h5></th>
				<th><h5>Name</h5></th>
				<th><h5>Age</h5></th>
				<th><h5>Salary</h5></th>


			</tr>

			
			<?php
include 'conn.php';
	
$aid=$_GET['aid'];
$q="select * from employee where aid=$aid";

$query = mysqli_query($conn,$q);

while ($res = mysqli_fetch_array($query)) {
?>

			<tr>
				<th><?php echo $res['id'] ?></th>
				<th><?php echo $res['aid'] ?></th>
				<th><?php echo $res['name'] ?></th>
				<th><?php echo $res['age'] ?></th>
				<th><?php echo $res['salary'] ?></th>

				<th><a  href="emp_update.php?id=<?php echo $res['id']; ?>" class="text-white"><button class="btn btn-success">UPDATE</button></th>
				</a>
			<th><a  href="attendance.php?id=<?php echo $res['id']; ?>" class="text-white"><button class="btn btn-success" name="view">attendance</button></a></th>
			</tr>
<?php }
?>

		</table>
	</div>
</div>
</body>
</html>