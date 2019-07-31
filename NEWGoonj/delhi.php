
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
	<link rel="shortcut icon" href="images/logo.ico">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js" integrity="sha384-u/bQvRA/1bobcXlcEYpsEdFVK/vJs3+T+nXLsBYJthmdBuavHvAW6UsmqO2Gd/F9" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<style>
    h4{
        font-family:lato;
    }
    </style>

</head>
<body>
   <header class="site-header"  style="background-color:#ffffff">
     <div class="nav-bar">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                    <div class="site-branding d-flex align-items-center">
                        <a class="d-block" href="index.html" rel="home"><img class="d-block" src="images/logo.png" alt="logo"></a>
                    </div><!-- .site-branding -->

                    <nav class="site-navigation d-flex justify-content-end align-items-center">
                        <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="logout.php">Logout</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="mymail.php">Mail</a></li>
                            <li><a href="timesheet.php">timesheet</a></li>
                            <li><a href="display_dept_head_details.php">location</a></li>
                        </ul>
                    </nav><!-- .site-navigation -->

                    <div class="hamburger-menu d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div><!-- .hamburger-menu -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .nav-bar -->
</header><!-- .site-header -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-3" style="background-color:#ffd700;">

                <h2>Activity Name</h2><hr style="height:2px;background-color:#000000;"></div>
                <div class="col-12 col-lg-9"style="background-color:#ffa500">
                    <h2 align="center">Delhi Activities</h2><hr style="height:2px;background-color:#000000;"></div>
        </div>

    </div>

			<?php
include 'conn.php';

$q="select * from activity";

$query = mysqli_query($conn,$q);
    $i=0;
  $ar=array();
while ($res = mysqli_fetch_array($query)) {
?>
        <?php $vip=$res['noe'];
         $y1=strtotime("now");
         $y2=strtotime($res['tsa']);
         $y=$y1-$y2;
         $z1=strtotime($res['tea']);
         $z2=strtotime($res['tsa']);
         $z=$z1-$z2;
         $x=round(($y/$z)*100);
         $a=round(($res['ac']/$res['ta'])*100);
         $aid=$res['aid'];
         if($a<$x)
         {$r="ACTIVITY Lagging Behind Time";}
         else
         {$r="";}
         $w=" SELECT COUNT(*) FROM employee WHERE aid='$aid'";
         $wuery=mysqli_query($conn,$w);
          $tes= mysqli_fetch_array($wuery) ;
         $ar[$i]=$tes[0];
            $i=$i+1;

          $t=" SELECT COUNT(*) FROM employee";
         $tuery=mysqli_query($conn,$t);
          $tet= mysqli_fetch_array($tuery) ;
            $ttt=round(($tes[0]/$tet[0])*100) ;
         $re ="select count(*) from res where aid='$aid'";
         $rquery=mysqli_query($conn,$re);
         $r1=mysqli_fetch_array($rquery);


    ?>
    <div class="container-fluid">
        <div class="row";>
            <div class="col-lg-3" style="background-color:#ffd744;" align="center"><h1><?php echo $res['aname'] ?></h1></div>
            <div class="col-lg-9" style="background-color:#ffa544;">
                <h4>FOCUS REPORT</h4><br>



                   <div class='container'  style="background-color:none;">
                       <center><h4>live time progress</h4></center><div class="progress">
    <?php echo "<div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100' style='width:$x%';></div>";  echo"<b>$x</b>"; ?>
                       </div></div><br>
                <center><h4 style="color:red"><?php echo" <b>$r</b>"; ?></h4></center>

                <div class='container'  style="background-color:none;"><center><h4>live activity progress</h4></center><div class="progress">
    <?php echo "<div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100' style='width:$a%';></div>";  echo "<b> $a</b>"; ?>
                    </div></div><br><br>





                <div  class="container" style="background-color:#dfdfd;"></div>

                <h4>MANAGEMENT REPORT</h4>

                <div  class="container" style="background-color:#dfdfd;"><h4>employee in this activity</h4><h4><b><?php echo $tes[0]; ?></b></h4></div>
                   <div  class="container" style="background-color:#dfdfd;"><h4>percentage of employee in this activity</h4><div class="progress">
    <?php echo "<div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100' style='width:$ttt%';></div>"; echo "<b>$ttt</b>"; ?>
                       </div></div>
                <div  class="container" style="background-color:#dfdfd;"><h4>resource used </h4><h4><b><?php echo $r1[0]; ?></b></h4></div>


                <br><br><hr>

            </div> </div></div>

<?php
                                          }
    $dataPoints = array(
	array("label"=>"", "y"=>$ar[0]),
	array("label"=>"Firefox", "y"=>$ar[1])
)
    ?>




<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
<script type='text/javascript' src='js/swiper.min.js'></script>
<script type='text/javascript' src='js/jquery.countdown.min.js'></script>
<script type='text/javascript' src='js/circle-progress.min.js'></script>
<script type='text/javascript' src='js/jquery.countTo.min.js'></script>
<script type='text/javascript' src='js/jquery.barfiller.js'></script>
 <script type='text/javascript' src='js/custom.js'></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
window.onload = function fun(){


var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Usage Share of Desktop Browsers"
	},
	subtitles: [{
		text: "November 2017"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

}
</script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Work', parseInt('<?php echo $tes[0]; ?>')],
  ['Eat', 2],
  ['TV', 4],
  ['Gym', 2],
  ['Sleep', 8]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Average Day', 'width':1000, 'height':300};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>


<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<br>
<div align="center">
  <form action="generate.php" method="post">
    <input name="" value="generate report" class="btn btn-success" type="submit"/>
  </form>
</div>
<br>

</body>
