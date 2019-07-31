
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
            <div class="col-12 col-lg-2" style="background-color:#ffd700;">

                <h2 align="center">Activities</h2><br><hr style="height:2px;background-color:#000000;"></div>
                <div class="col-12 col-lg-10"style="background-color:#ffa500">
                    <h2 align="center">Activities Comparison Between Various Locations Across India <br><h4 align="center">on the basis of Number of Tasks Completed in a given Time</h4></h2><hr style="height:2px;background-color:#000000;"></div>
        </div>

    </div>

			<?php
include 'conn.php';

$q="select acname from sactivity";

$query = mysqli_query($conn,$q);
while ($res = mysqli_fetch_array($query)) {
?>
        <?php
       $acname=$res['acname'];                                          
       $q1="select * from activity where aname='$acname'";
        $query1=mysqli_query($conn,$q1);
      $res1=mysqli_fetch_array($query1);
         $now1=strtotime("now");
         $start1=strtotime($res1['tsa']);
         $x1=$now1-$start1;
         $last1=strtotime($res1['tea']);
         $z1=$last1-$start1;
    if($z1==0){
        $y1=0;
    }
       else{  $y1=($x1/$z1);
           }
    if($y1==0){
        $f1="no data";
    }
        else{ $f1=round(($res1['ac']/$res1['ta'])*100);
             
            }
    
    
    
    $q2="select * from bactivity where aname='$acname'";
        $query2=mysqli_query($conn,$q2);
      $res2=mysqli_fetch_array($query2);
    $now2=strtotime("now");
         $start2=strtotime($res2['tsa']);
         $x2=$now2-$start2;
         $last2=strtotime($res2['tea']);
         $z2=$last2-$start2;
    if($z2==0){
        $y2=0;
    }
       else{  $y2=($x2/$z2);
           }
    if($y2==0){
        $f2="no data";
    }
        else{ $f2=round(($res2['ac']/$res2['ta'])*100);
            }
    
    $q3="select * from cactivity where aname='$acname'";
        $query3=mysqli_query($conn,$q3);
      $res3=mysqli_fetch_array($query3);
    $now3=strtotime("now");
         $start3=strtotime($res3['tsa']);
         $x3=$now3-$start3;
         $last3=strtotime($res3['tea']);
         $z3=$last3-$start3;
    if($z3==0){
        $y3=0;
    }
       else{  $y3=($x3/$z3);
           }
    if($y3==0){
        $f3="no data";
    }
        else{ $f3=round(($res3['ac']/$res3['ta'])*100);
            }
    
        $q4="select * from hactivity where aname='$acname'";
        $query4=mysqli_query($conn,$q4);
      $res4=mysqli_fetch_array($query4);
    $now4=strtotime("now");
         $start4=strtotime($res4['tsa']);
         $x4=$now4-$start4;
         $last4=strtotime($res4['tea']);
         $z4=$last4-$start4;
    if($z4==0){
        $y4=0;
    }
       else{  $y4=($x4/$z4);
           }
    if($y4==0){
        $f4="no data";
    }
        else{ $f4=round(($res4['ac']/$res4['ta'])*100);
            }
    
    
        $q5="select * from kactivity where aname='$acname'";
        $query5=mysqli_query($conn,$q5);
      $res5=mysqli_fetch_array($query5);
    $now5=strtotime("now");
         $start5=strtotime($res5['tsa']);
         $x5=$now5-$start5;
         $last5=strtotime($res5['tea']);
         $z5=$last5-$start5;
    if($z5==0){
        $y5=0;
    }
       else{  $y5=($x5/$z5);
           }
    if($y5==0){
        $f5="no data";
    }
        else{ $f5=round(($res5['ac']/$res5['ta'])*100);
            }
    
    
     $q6="select * from mactivity where aname='$acname'";
        $query6=mysqli_query($conn,$q6);
      $res6=mysqli_fetch_array($query6);
    $now6=strtotime("now");
         $start6=strtotime($res6['tsa']);
         $x6=$now6-$start6;
         $last6=strtotime($res6['tea']);
         $z6=$last6-$start6;
    if($z6==0){
        $y6=0;
    }
       else{  $y6=($x6/$z6);
           }
    if($y6==0){
        $f6="no data";
    }
        else{ $f6=round(($res6['ac']/$res6['ta'])*100);
            }
    
    
     $q7="select * from pactivity where aname='$acname'";
        $query7=mysqli_query($conn,$q7);
      $res7=mysqli_fetch_array($query7);
    $now7=strtotime("now");
         $start7=strtotime($res7['tsa']);
         $x7=$now7-$start7;
         $last7=strtotime($res7['tea']);
         $z7=$last7-$start7;
    if($z7==0){
        $y7=0;
    }
       else{  $y7=($x7/$z7);
           }
    if($y7==0){
        $f7="no data";
    }
        else{ $f7=round(($res7['ac']/$res7['ta'])*100);
            }
    
    
     $q8="select * from ractivity where aname='$acname'";
        $query8=mysqli_query($conn,$q8);
      $res8=mysqli_fetch_array($query8);
    $now8=strtotime("now");
         $start8=strtotime($res8['tsa']);
         $x8=$now8-$start8;
         $last8=strtotime($res8['tea']);
         $z8=$last8-$start8;
    if($z8==0){
        $y8=0;
    }
       else{  $y8=($x8/$z8);
           }
    if($y8==0){
        $f8="no data";
    }
        else{ $f8=round(($res8['ac']/$res8['ta'])*100);
            }
                                           

    ?>
    <div class="container-fluid">
        <div class="row";>
            <div class="col-lg-2" style="background-color:#ffd744;" align="center"><h1><?php echo $acname; ?></h1></div>
            <div class="col-lg-10" style="background-color:#ffa544;">
                <h4>FOCUS REPORT</h4><br>
                <?php if($f1>0){ ?>
                <div class='container'  style="background-color:none;"><h4>Delhi:</h4><div class="progress vertical" style="background-color:#ffa544">
    <?php echo "<div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100' style='width:$f1%;';></div>";  echo "<b>$f1% 
    </b>"; ?>
                    </div></div><?php } ?>
    <?php if($f2>0){ ?>
    <div class='container'  style="background-color:none;"><h4>Bangalore:</h4><div class="progress vertical" style="background-color:#ffa544">
    <?php echo "<div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100' style='width:$f2%';></div>";  echo "<b> 
    $f2%</b>"; ?>
                    </div></div>
                <?php } ?>
                <?php if($f3>0){ ?>
    <div class='container'  style="background-color:none;"><h4>Chennai:</h4><div class="progress vertical" style="background-color:#ffa544">
    <?php echo "<div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100' style='width:$f3%';></div>";  echo "<b> 
    $f3%</b>"; ?>
                    </div></div><?php } ?>
    <?php if($f4>0){ ?>
    <div class='container'  style="background-color:none;"><h4>Hyderabad:</h4><div class="progress vertical" style="background-color:#ffa544">
    <?php echo "<div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100' style='width:$f4%';></div>";  echo "<b> 
    $f4%</b>"; ?>
                    </div></div><?php } ?>
    <?php if($f5>0){ ?>
    <div class='container'  style="background-color:none;"><h4>Kolkata:</h4><div class="progress vertical" style="background-color:#ffa544">
    <?php echo "<div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100' style='width:$f5%';></div>";  echo "<b> 
    $f5%</b>"; ?>
                    </div></div><?php } ?>
    <?php if($f6>0){ ?>
    <div class='container'  style="background-color:none;"><h4>Mumbai:</h4><div class="progress vertical" style="background-color:#ffa544">
    <?php echo "<div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100' style='width:$f6%';></div>";  echo "<b> 
    $f6%</b>"; ?>
                    </div></div><?php } ?>
    <?php if($f7>0){ ?>
    <div class='container'  style="background-color:none;"><h4>Patna:</h4><div class="progress vertical" style="background-color:#ffa544">
    <?php echo "<div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100' style='width:$f7%';></div>";  echo "<b> 
    $f7%</b>"; ?>
                    </div></div><?php } ?>
    <?php if($f8>0){ ?>
    <div class='container'  style="background-color:none;"><h4>Rishikesh:</h4><div class="progress vertical" style="background-color:#ffa544">
    <?php echo "<div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100' style='width:$f8%';></div>";  echo "<b> 
    $f8%</b>"; ?>
                    </div></div><?php } ?>
                
                
              
           <hr></div> </div></div> <?php } ?>






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
</html>