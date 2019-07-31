<?php
    
include 'conn.php';
session_start();

$my=$_SESSION['name'];
$q="select * from eemmail where too='$my' order by mid desc";
$query=mysqli_query($conn,$q);


?>
<html>
    <head>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js" integrity="sha384-u/bQvRA/1bobcXlcEYpsEdFVK/vJs3+T+nXLsBYJthmdBuavHvAW6UsmqO2Gd/F9" crossorigin="anonymous"></script>  
    </head>
    <body>
        <div class="container-flow">
            <div class="row">
                <div class="col-12 col-lg-9" style="background-color:#e6e6e6;padding:20px;" align="center">
                    <a href="maildelete.php"><input class="btn btn-success" type="button" value="DELETE ALL" style="background-color:red"></a>
                    <?php 
                    while($row = mysqli_fetch_array($query))
                    {
                    ?>
                    <div style="width:80%;background-color:#e8d6b6;border-style:solid;border-width:1px;padding:20px;margin:20px;">
                        <div style="width:100%;background-color:#fff;" class="responsive">from:&nbsp&nbsp<?php echo $row['fromm']; ?></div>
                        <div style="width:100%;border-width:0px 0px 1px 0px;border-style:solid;background-color:#e2dbdb;" class="responsive">
                          <div align="left" style="width:10%;float:left;" class="responsive">Subject:</div><div style="width:60%"><?php echo $row['suubject'],"<br>"; ?></div>
                        </div>
                        <div style="width:100%;background-color:#fff" class="responsive">
                            <div align="left" style="width:10%;float:left;" >Message:</div><div style="width:60%"><?php echo $row['messege'],"<br>"; echo $row['ffile']; ?></div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="col-12 col-lg-3" style="background-color:#f5b745" align="center">
                    <form action="mail.php" method="post" class="login-form">
                        <h5>To</h5><input type="text" name="to" class="form-control"><br>
                        <h5>Subject</h5><input type="text" name="subject" class="form-control"><br>
                        <h5>Message</h5><textarea name="messege" class="form-control"></textarea><br>
                        <h5>File</h5><input type="file" name="file" class="form-control">               
                        <br><br>
        <input type="submit" class="btn-success">
    </form>
                    <h4>OR</h4>Send via Gmail
            <div>
                <a href="https://www.gmail.com"><button class="btn btn-success">Gmail</button></a>
            </div><br>
                </div>
            
        </div>
    </body>
</html>