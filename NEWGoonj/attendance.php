<?php
session_start();
include 'conn.php';
if(!$_SESSION['name'])
{
header("location:login.php");
}

/* $id = $_GET['id'];
$q="select * from time where id=$id";

$query = mysqli_query($conn,$q);
$res = mysqli_fetch_array($query); */
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
		<h3 class="col-lg-6">Attendance </h3>
		<!--<a href="viewhr.php?id=/*<?php $id; ?>" class="col-lg-2"><button class="btn btn-success col-lg-2" name="logout">back</button></a> -->
		
		<a href="logout.php" class="col-lg-3"><button class="btn btn-success col-lg-6" name="logout">logout</button></a>

        </div>
		<table class="table table-stripped table-hover table-bordered">
			<tr class="text-dark">
				<th><h5>id</h5></th>
				<th><h5>date</h5></th>
				<th><h5>time in</h5></th>
				<th><h5>time out</h5></th>
				<th><h5>total time</h5></th>
			</tr>

			
			<?php
include 'conn.php';
	
$id=$_GET['id'];
$q="select * from date where id=$id";

$query = mysqli_query($conn,$q);

while ($res = mysqli_fetch_array($query)) {
?>

			<tr>
				
				<th><?php echo $res['id'] ?></th>
				<th><?php echo $res['date'] ?></th>
				<th><?php echo $res['st'] ?></th>
				
				<th><?php echo $res['et'] ?></th>
				<th><?php echo $res['tt'] ?></th>
				
			
				<th><a href="add_attendance.php?id=<?php echo $res['id']; ?>"><button class="btn btn-success col-lg-8">ADD ATTENDANCE </button></a></th></tr>

<?php }

?>

		</table>
	</div>
</div>

</body>
</html>