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
		<h3 class="col-lg-6">Displaying resour Records</h3>
        <a href="insert_resource.php" ><button class="btn btn-success" >Add</button></a><span style="margin-right:150px"></span> <a href="logout.php" ><button class="btn btn-success" name="logout">logout</button></a>
    </div><br>
		<table class="table table-stripped table-hover table-bordered">
			<tr class="text-dark">
				<th><h5>RE ID</h5></th>
				<th><h5> RESO Name</h5></th>
				<th><h5>AID</h5></th>
				<th><h5>COST</h5></th>
				<th><h5>QuaN</h5></th>
			
			</tr>

			
			<?php
include 'conn.php';
	
$aid=$_GET['aid'];
$q="select * from res where aid=$aid";

$query = mysqli_query($conn,$q);

while ($res = mysqli_fetch_array($query)) {
?>

			<tr>
				<th><?php echo $res['rid'] ?></th>
				<th><?php echo $res['rname'] ?></th>
				<th><?php echo $res['aid'] ?></th>
				<th><?php echo $res['cost'] ?></th>
				<th><?php echo $res['rquan'] ?></th>
				
				<th><a  href="resource_update.php?rid=<?php echo $res['rid']; ?>" class="text-white"><button class="btn btn-success">UPDATE</button></a></th>
			</tr>
<?php }
?>

		</table>
	</div>
</div>
</body>
</html>