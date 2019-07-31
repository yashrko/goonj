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
				<a href="logout.php" class="" style="margin-right:150px;"><button class="btn btn-success " name="logout">logout</button></a>
    </div><br>

    <?php
    include 'conn.php';

    $q="SELECT name, aname, date, st, et, tt FROM employee JOIN activity d ON employee.aid = d.aid JOIN date b ON b.id = employee.id order by date ASC,name ASC ,st ASC";

    $query1 = mysqli_query($conn,$q);
    //print_r($query2);
    //exit;?>
    <table class="table table-stripped table-hover table-bordered">
      <tr class="text-dark">
        <th><h5>name</h5></th>
        <th><h5>activity name</h5></th>
        <th><h5>date</h5></th>
        <th><h5>starting time</h5></th>
        <th><h5>ending time</h5></th>
        <th><h5>total time</h5></th>
      </tr>

<?php
    while($res1 = mysqli_fetch_array($query1))
    { ?>
      <tr class="text-dark">
        <td><?php echo ucfirst($res1['name']) ?></td>
        <td><?php echo $res1['aname'] ?></td>
        <td><?php echo $res1['date'] ?></td>
        <td><?php echo $res1['st'] ?></td>
        <td><?php echo $res1['et'] ?></td>
        <td><?php echo $res1['tt'] ?></td>
      </tr>
    <?php
  }
    ?>
    </table>
	</div>
</div>
</body>
</html>
