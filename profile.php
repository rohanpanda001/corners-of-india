<!DOCTYPE html>
<html class="full" lang="en">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Corners of India- Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full.css" rel="stylesheet">
    <link href="css/sign.css" rel="stylesheet">
</head>

<body style="background: url('http://www.photoburst.net/photo_section/photos/marked1200/taj-mahal-agra-india-thamer-al-tassan-monthly-winner.jpg') no-repeat center center fixed;">

<?php

  session_start();
  include "connect.php";

  if(!isset($_SESSION['use'])) // If session is not set that redirects to Login Page     
        {

           header("Location:Login.php");  
       }

          echo "<a href='logout.php'> Logout</a> "; 
?>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                
                <a class="navbar-brand" href="profile.php">
                    <img src="cornersofindia.png" alt="" align="top" width="100" height="100" class="upper" background="black">
                </a>
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
              
                    <li>
                        <a href='logout.php'> Logout</a>  
                    </li>
                </ul>
                <div style="color: white;padding-top: 18px;" class="pull-right">
                  <form action="search-results.php" method="get">
                  <div class="row" style="color: white">
                  <div class="col-md-7"><input type="text" name="search" placeholder="Search Monuments.." ></div>
                  <div class="col-md-5">
                  <input type="submit" name="Search this" value="Search">
                  </div>
                  </div>
                  </form>
                </div> 
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



        <h2 style="postion:fixed; top:200px; left:100px;"><a href="profile.php">Welcome <?php echo $_SESSION['use']; ?></a></h2>
                    
      

        <div class="form">
        <div id="signup" style="color: white">   
          <h1>Top Rated</h1>
          <?php
            $sql="Select Name from monuments_general where M_id in (Select M_id from votes_monuments order by rating desc)"; 
            $query=mysqli_query($conn,$sql);
            while($top=mysqli_fetch_array($query,MYSQLI_ASSOC))
            {
              ?>
                        <table>
                            <tr>
                                <?php $a= $top['Name']; ?>
                                <a href="monumentinfo.php?search=<?php echo $a; ?>"><?php echo $a; ?></a>
                            <tr>
                            
                        </table>
                        <?php

            }
          ?>

        </div>
      </div> 



      <div class="row" style="padding-top: 200px">
      <div class="col-md-5">
        <blockquote cite="http://referencetothequote.com"><p>It is better to see something once than to hear about it a thousand times....</p></blockquote>
      </div>
      </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
