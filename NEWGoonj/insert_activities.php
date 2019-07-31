<?php 
session_start();
if(!$_SESSION['name'])
{
header("location:login.php");
}

include 'conn.php';

if(isset($_POST['done']))
{
	$aname  = ucfirst($_POST['aname']);
	
	$noe = ($_POST['noe']);
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
	$date = "$day-$month-$year";
	$day1 = $_POST['day1'];
    $month1 = $_POST['month1'];
    $year1 = $_POST['year1'];
	$date1 = "$day1-$month1-$year1";
	$tsa = date("Y-m-d",strtotime($date));
	$tea = date("Y-m-d",strtotime($date1));
	$date_of_birth = $tsa;
	$date_of_join = $tea;
	$mon = ($_POST['mon']);
    $yer = $_POST['yer'];
    $q="select * from sactivity where acname='$aname'";
    $query=mysqli_query($conn,$q);
    if(mysqli_num_rows($query)==0){
        echo "hello";
        $q="INSERT INTO sactivity VALUES ('$aname')";
        $query=mysqli_query($conn,$q);
    }

	$q="INSERT INTO `activity`( `aname`, `tsa`, `tea`,`ac`,`ta`,  `noe`) VALUES ('$aname','$tsa','$tea','$mon','$yer','$noe')";

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
				<h1 class="text-white text-center">Insert ACTIVITY  Details</h1>
			</div><br>


			<label>act Name</label>
			<input type="text" name="aname" class="form-control" required><br>

			<label>act completed</label>
			<input type="text" name="mon" class="form-control" required><br>
			<label>total activity</label>
			<input type="text" name="yer" class="form-control" required><br>

			<label>NO of emp</label>
			<input type="text" name="noe" class="form-control" required><br>

            <label>start of activitity</label>
            <div class="row">
			<div class="col-md-3"><input type="text" name="day" class="form-control" placeholder="date" required pattern="[0-9]{1,2}"
        title="this field accepts only numbers  and two characters"></div>-

			<div class="col-md-3"><input type="text" name="month" class="form-control" placeholder="month" required pattern="[0-9]{1,2}"
        title="this field accepts only numbers  and two characters"></div>-

			<div class="col-md-3"><input type="text" name="year" class="form-control" placeholder="year" required pattern="[0-9]{4,4}"
        title="this field accepts only numbers  and 4 characters"></div><br>
            </div>

			<label>end of activity</label>
			<div class="row">
			<div class="col-md-3"><input type="text" name="day1" class="form-control" placeholder="date" required pattern="[0-9]{1,2}"
        title="this field accepts only numbers  and two characters"></div>-

			<div class="col-md-3"><input type="text" name="month1" class="form-control" placeholder="month" required pattern="[0-9]{1,2}"
        title="this field accepts only numbers  and two characters"></div>-

			<div class="col-md-3"><input type="text" name="year1" class="form-control" placeholder="year" required pattern="[0-9]{4,4}"
        title="this field accepts only numbers  and 4 characters"></div><br>
            </div> <br>
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