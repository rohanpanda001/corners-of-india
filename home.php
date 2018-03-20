<?php
if(isset($_SESSION['use']))
        {
            header("location:profile.php");
        }

?>
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background: url('http://www.photoburst.net/photo_section/photos/marked1200/taj-mahal-agra-india-thamer-al-tassan-monthly-winner.jpg') no-repeat center center fixed;">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                
                <a class="navbar-brand" href="home.php">
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
                      <a href="signin.php">Login</a>
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
      <div class="form">
        <div id="signup" style="color: white">   
          <h1>Sign Up for Free</h1>
          
          <form action="welcome.php" method="post">
          
          <div class="top-row" style="color: grey">
            <div class="field-wrap">
              
              <input type="text" placeholder="First Name" name="fname" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              
              <input type="text" placeholder="Last Name" name="lname" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap" style="color: grey">
            
            <input type="email" placeholder="Email" name="email" required autocomplete="off"/>
          </div>
          <div class="field-wrap" style="color: grey">
            
            <input type="tel" placeholder="Mobile No." name="mob" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap" style="color: grey">
            
            <input type="password" placeholder="Set a Password" name="pass" required autocomplete="off"/>
          </div>

          <b>DOB:</b>             
          <input type="date" class="field-wrap" name="dob" required autocomplete="off">


          <hr>

          <button type="submit" class="button button-block" style="color: black" />Get Started</button>
          
          </form>

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
<?php
if(isset($_SESSION['use']))
        {
            header("location:profile.php");
        }

?>