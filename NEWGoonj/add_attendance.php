<?php 
session_start();
if(!$_SESSION['name'])
{
header("location:login.php");
}

include 'conn.php';

if(isset($_POST['done']))
{   
	

	
    
    $id=$_GET['id'];
    //$day = $_POST['day'];
   // $name = $_POST['name'];
    //$month = $_POST['month'];
    //$year = $_POST['year'];
	//$date1 = "$day-$month-$year";
	//$dob = date("Y-m-d",strtotime($date1));

	//$date_of = $dob;
	$time_i1= $_POST['date'];
    $time_i2 = $_POST['st'];
    
 
	
	
	
	$time_o1= $_POST['et'];
    $time_o2= $_POST['tt'];
    
	
	
	

	$q="INSERT INTO `date` (`id`, `date`, `st`, `et` ,`tt`) VALUES('$id', '$time_i1', '$time_i2', '$time_o1', '$time_o2') ";

     $query = mysqli_query($conn,$q);
     if(!$query){echo "hello";}

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
				<h1 class="text-white text-center">ADD  Employee ATTENDANCE</h1>
			</div><br>
			
             
            <div class="row">
                
			<div class="col-lg-12 m-auto"><label>date</label><br><br><input type="date" name="date" class="form-control" placeholder="date" 
        title="this field accepts only numbers  and two characters"></div><br>
                <br>
                
			<div class="col-lg-12 m-auto"><label>starting time</label><br><br><input type="time" name="st" class="form-control" placeholder="12:00:00"
        title="this field accepts only numbers  and two characters"></div>
                
                <br>
                
			<div class="col-lg-12 m-auto"><label>ending time</label><br><br><input type="time" name="et" class="form-control" placeholder="12:00:00" title="this field accepts only numbers  and 4 characters"></div><br> 
                <br>
                
        <div class="col-lg-12 m-auto"><label>total time</label><br>
                    <br><input type="int" name="tt" class="form-control" placeholder="4"   title="this field accepts only numbers  and 4 characters"></div><br>
         

			

                <br></div><br>
          <div  class="row m-auto">
			<div class="col-md-4"><button class="btn btn-success col-lg-12" name="done">Add</button>
			</div>
			<div class="col-md-4"><a href="display_dept_head_details.php"><input type="button" name="" value="Back to records" class="btn btn-danger col-lg-12"></a></div>
              
			</div>
        </div>
	</form>
</div>
</body>
</html>