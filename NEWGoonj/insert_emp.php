<?php 
session_start();
if(!$_SESSION['name'])
{
header("location:login.php");
}

include 'conn.php';

if(isset($_POST['done']))
{   $aid=$_POST['aid'];
	
	$name  = ucfirst($_POST['name']);
	$age = $_POST['age'];
	$salary = $_POST['salary'];
	//$qualification = ucfirst($_POST['qualification']);
    //$day = $_POST['day'];
    //$month = $_POST['month'];
    //$year = $_POST['year'];
	//$date = "$day-$month-$year";
	//$day1 = $_POST['day1'];
    //$month1 = $_POST['month1'];
    //$year1 = $_POST['year1'];
	//$date1 = "$day1-$month1-$year1";
	//$dob = date("Y-m-d",strtotime($date));
	//$doj = date("Y-m-d",strtotime($date1));
	//$date_of_birth = $dob;
	//$date_of_join = $doj;

	$q="INSERT INTO `employee` ( `aid`, `name`, `age`, `salary`) VALUES( '$aid', '$name', '$age', '$salary')";

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
				<h1 class="text-white text-center">Insert Employee Details</h1>
			</div><br>
            
			<label>aid</label>
			
			<input type="text" name="aid" class="form-control" required><br>

			<label>Name</label>
			<input type="text" name="name" class="form-control" required><br>

			<label>age</label>
			<input type="text" name="age" class="form-control" required pattern="[0-9]{1,15}"
        title="this field accepts only numbers"><br>

			<label>salary</label>
			<input type="text" name="salary" class="form-control" required pattern="[0-9]{1,15}"
        title="this field accepts only numbers"><br>

			
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