<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Search results</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/full.css">
  <link rel="stylesheet" href="css/sign.css">
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
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
    <hr>
    <div class="row">
            <div class="col-lg-12">
                <div class="well text-center aa_h2">
                    <h2>Search Results</h2>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>

    <div class="row">
            <div class="col-lg-12">
                <div class="well text-center aa_h2">
			<ul style="list-style: none;">
            <?php
                include "connect.php";
                $search=$_GET['search'];
                $sql="Select Name from monuments_general where Name like '%$search%'";
                $result=mysqli_query($conn,$sql);
                while($found=mysqli_fetch_assoc($result))
                {
                    ?>
                
			         <li><a href="monumentinfo.php?search=<?php echo $found['Name']; ?>"><?php echo $found['Name']; ?></a></li>   
                     <?php
                }
                ?>
			</ul>
		</div>
            </div>
	</div> 
  <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>