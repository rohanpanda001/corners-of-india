<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Monument Information</title>


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
                    <li>
                      <a href="signin.php">Login</a>
                    </li>
                    
                    <?php
                     if(isset($_SESSION['use']))
                    {
                        ?>
                    <li>
                      <a href="logout.php">Logout</a>
                    </li>
                    <?php
                    }
                    ?>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <?php 
        include "connect.php"; 
        session_start();


        $search=$_GET["search"];
        $sql="Select * from monuments_general where  Name like '%$search%'";
        

        $result=mysqli_query($conn,$sql);
        if($found=mysqli_fetch_assoc($result))
        {
            $m_id=$found['M_id'];
            ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive img-rounded" src="<?php echo $found['img_url']; ?>" width="590" height="650">
            </div>
            <!-- /.col-md-8 -->
            

            <div class="col-md-6 ">
                <h1>Monument Info</h1>
                <table border="0">
                    <tr>
                        <td><b>Name: </b></td>
                        <td><?php echo $found['Name']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Address: </b></td>
                        <td><?php echo $found['Address']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Latitude: </b></td>
                        <td><?php echo $found['Latitude']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Longitude: </b></td>
                        <td><?php echo $found['Longitude']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Muncipality: </b></td>
                        <td><?php echo $found['Muncipality']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Architectural style(s): </b></td>
                        <td><?php echo $found['arch_style']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Architect: </b></td>
                        <td><?php echo $found['Architect']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Phone: </b></td>
                        <td><?php echo $found['Phone']; ?></td>
                    </tr>

                </table>
                <br>
                <p><?php echo $found['Description']; ?></p>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
                <?php
            }
            ?>
        <hr>

        <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12">
                <div class="well text-center aa_h2">
                    <h4>Guides for this monument</h4>
                    <?php
                    
                    $sql3="Select Name from guide_info where guide_id in (Select guide_id from monument_guides  where M_id=$m_id)";
                    $result2=mysqli_query($conn,$sql3);
                    while($guide=mysqli_fetch_assoc($result2))
                    {

                        ?>
                        <table>
                            <tr>
                                <a href="guide_info.php?name=<?php echo $guide['Name']; ?>"><?php echo $guide['Name']; ?></a>
                            <tr>
                            
                        </table>
                        <?php
                     }
                     ?>   
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        
        <br>
        <!-- /.row -->
        <?php 
        
        if(isset($_SESSION['use']))
    {
        $user_id=$_SESSION['user_id'];
        ?>
        <div class="row">
        <div class="col-md-2"><h3>Your rating</h3></div>
        <form id="review" action="" method="post">
            <div class="col-md-4">
            <div class="rate">
        
          <input type="radio" id="star5" name="rate" value="5" />
          <label for="star5" title="text">5 stars</label>
          <input type="radio" id="star4" name="rate" value="4" />
          <label for="star4" title="text">4 stars</label>
          <input type="radio" id="star3" name="rate" value="3" />
          <label for="star3" title="text">3 stars</label>
          <input type="radio" id="star2" name="rate" value="2" />
          <label for="star2" title="text">2 stars</label>
          <input type="radio" id="star1" name="rate" value="1" />
          <label for="star1" title="text">1 star</label>
        
            </div>
            </div>
            </div>
            <br>

        <div class="row">
        <h2>Write a review</h2>
            
                <fieldset>
                    <textarea placeholder="Tell us about your experience visiting this place.." tabindex="11" name="review"></textarea>
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" id="review-submit" data-submit="...Sending">Submit</button>
                </fieldset>
        </form>
        </div>
        <div class="row">
        <?php

        
            if(isset($_POST["submit"]))
            {
                $rate=$_POST['rate'];
                $review=$_POST['review'];
                
                    $sql="Insert into votes_monuments(M_id,user_id,rating,date,review) Values ('$m_id','$user_id', '$rate', curdate(),'$review')";
                    $result=mysqli_query($conn,$sql);
                        
                
           }
        

    }
    ?>

        <h2>Reviews for this monument</h2>

        <?php
        
        $sql2="Select a.First_Name,a.img_url,b.rating,b.review from user a,votes_monuments b where a.user_id=b.user_id and b.M_id=$m_id";
        $result2=mysqli_query($conn,$sql2);
        // var_dump($result2);
        while($user=mysqli_fetch_assoc($result2))
        {
            ?>            
            </div>
            <div class="row">
              <div id="mainbox">
                <div class="card">
                  <img src="<?php echo $user['img_url']; ?>" />
                  <h1><u>Name</u>:<?php echo $user['First_Name']; ?></h1>
                  <p><h2><u>Rating</u>:<?php echo $user['rating']; ?></p><br></h2>
                  <p><h2><u>Review: </u><?php echo $user['review']; ?></p> </h2>
                </div>
                
               </div>
            </div>
            <?php

        }

        ?>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>--Made by students of IIIT-Bh--</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>


