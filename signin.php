

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Signin Page</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="http://getbootstrap.com/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

    <div class="container">

      <form class="form-signin" action="" method="post">
      <div class="user_img">
        <img src="http://oxosolutions.com/wp-content/uploads/2011/05/user-Male.png" class="img-rounded img-responsive" alt="Cinque Terre" width="200px" height="200px">        
      </div>
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="user" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="LOGIN">Sign in</button>
		
      </form>

    </div> 
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

<?php

include "connect.php";
session_start();

if(isset($_SESSION['use']))   
 {
    header("Location:profile.php"); 
 }

if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
{

     $user = $_POST['user'];
     $pass = $_POST['pass'];

     if($user=="Admin@admin" and $pass=="admin")
     {
        $_SESSION['use']="Admin";
        header("location:adminpage.html");
     }

     $sql="Select * from user where email='$user' and password='$pass'";
     $query=mysqli_query($conn,$sql);
     $rows=mysqli_num_rows($query);
     $details=mysqli_fetch_array($query,MYSQLI_ASSOC);
      if($rows==1)       
      	{
          $_SESSION['use']=$details['First_Name'];
          $_SESSION['user_id']=$details['user_id'];

         header("location:profile.php");

        }

        else
        {
        	?>
        	<h4 class="form-signin-heading" style="position:fixed; left:40%;"><?php echo "Invalid UserName or Password"; ?></h4>
             <?php      
        }
}
 ?>


