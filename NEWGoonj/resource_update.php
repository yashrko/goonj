<?php

session_start();
if(!$_SESSION['name'])
{
header("location:login.php");
}

error_reporting(0);
include 'conn.php';

$rid = $_GET['rid'];

/*$age = $_POST['tos'];
$salary = $_POST['toe'];*/


$rname = ($_POST['rname']);
$cost = ($_POST['cost']);
$rquan = ($_POST['rquan']);


$q="select * from res where rid = $rid";
$query = mysqli_query($conn,$q);
$res=mysqli_fetch_array($query);

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

<div class="col-lg-6 m-auto">
	
	<form method="post">
		<br><div>
			<div class="card-header bg-dark">
				<h1 class="text-white text-center">Displaying RESOURSES  Details</h1>
			</div><br>
            
			<label> RNAME</label>
			<input type="text" name="rname" class="form-control" value="<?php echo $res['rname']; ?>" required><br>
			<label> Rcost</label>
			<input type="text" name="cost" class="form-control" value="<?php echo $res['cost']; ?>" required><br>
			<label> Rquntity</label>
			<input type="text" name="rquan" class="form-control" value="<?php echo $res['rquan']; ?>" required><br>

	

			

            

			

			<div class="row">
				<div class="col-md-3"><button class="btn btn-success" name="done">update</button></div>
         
			    <div class="col-md-3"><input type="button" class="btn btn-danger" name="delete" value="Delete" onclick="deleteme(<?php $_SESSION['rid'] = $rid; ?>)"></div>


	<script type="text/javascript">
		
function deleteme(delid)
{
      if(confirm("Are you sure you want to delete ?"))
      {
      	window.location.href="delete_reso.php?rid=<?php echo $res['rid'];?>";
      }
}

	</script>
		    </div><br>
		    <a href="display_dept_head_details.php"><input type="button" name="" value="Back to records" class="btn btn-primary col-lg-12"></a>
		</div>
	</form>
</div>
<?php


if(isset($_POST['done']))
{
$q2="update res set rname = '$rname' ,  cost = '$cost' , rquan = '$rquan'  where rid= $rid";
mysqli_query($conn,$q2);
//header("location:display.php");
header("refresh:0");
}

if(isset($_POST['delete']))
{
	$_SESSION['id'] = $id;
	header("location:delete.php");
}

if (isset($_POST['view'])) {

$_SESSION['id'] = $id;
	header("location:attendance1.php");

}
?>
</body>
</html>