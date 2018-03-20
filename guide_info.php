<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Guide Information</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/monument-info.css" rel="stylesheet">
    

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <a class="navbar-brand" href="home.php">
                    <img src="cornersofindia.png" alt="" align="top" width="100" height="100" class="upper" background="black">
            </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    <?php 
        include "connect.php";
        $name=$_GET['name'];
        $sql="Select * from guide_info where Name='$name'";
        $result=mysqli_query($conn,$sql);
        if($found=mysqli_fetch_array($result,MYSQLI_ASSOC))
        {

            ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive img-rounded" src="<?php echo $found['guide_img']; ?>" width="590" height="650">
            </div>
            <!-- /.col-md-8 -->
            

            <div class="col-md-6 ">
                <h1>Guide Info</h1>
                <table border="0">
                    <tr>
                        <td><b>Name: </b></td>
                        <td><?php echo $found['Name']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Cost: </b></td>
                        <td><?php echo $found['cost']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Phone: </b></td>
                        <td><?php echo $found['guide_phone']; ?></td>
                    </tr>
                    
                </table>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
                <?php
            }
            ?>
        
        <!-- Footer -->
        

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
