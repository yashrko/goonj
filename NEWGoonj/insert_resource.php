<?php 
session_start();
if(!$_SESSION['name'])
{
header("location:login.php");
}

include 'conn.php';

if(isset($_POST['done']))
{   $rid=$_POST['rid'];
	
	$aid=$_POST['aid'];
	$rname = $_POST['rname'];
	$cost = $_POST['cost'];
	$rquan = $_POST['rquan'];
	

	$q="INSERT INTO `res` ( `rid`, `aid`, `rname`, `cost`, `rquan`) VALUES( '$rid', '$aid', '$rname', '$cost', '$rquan')";

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

</head>
<body>

<div class="col-lg-6 m-auto">
	
	<form method="post">
		<br><div>
			<div class="card-header bg-dark">
				<h1 class="text-white text-center">Insert Resource Details</h1>
			</div><br>
            
			<label>REid</label>
			
			<input type="int" name="rid" class="form-control" required><br>

			<label>AID</label>
			<input type="int" name="aid" class="form-control" required><br>

			

			

			<label>resoname</label>
			<input type="text" name="rname" class="form-control" required><br>
			<label>cost</label>
			<input type="int" name="cost" class="form-control" required><br>
			<label>quantity</label>
			<input type="int" name="rquan" class="form-control" required><br>

          

			
			

			
          <div  class="row m-auto">
			<div class="col-md-5"><button class="btn btn-success col-lg-12" name="done">Add</button>
			</div>
			<div class="col-md-5"><a href="display_dept_head_details.php"><input type="button" name="" value="Back to records" class="btn btn-danger col-lg-12"></a></div>
			</div>
		   </div>
	</form>
</div>
</script>
</body>
</html>