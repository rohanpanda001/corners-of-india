<html>
<head>
<title>Corners of India</title>
</head>
<body>

<?php 

include ("connect.php");


$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$mob=$_POST["mob"];
$pass=$_POST["pass"];
$dob=$_POST["dob"];


	if (preg_match('/^\d{10}$/', $mob) ) 
{
	  


	$sql="INSERT INTO user (First_Name,Last_Name,Email,Mobile,Password,DOB) VALUES ('$fname','$lname','$email','$mob','$pass','$dob')";
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		
		?>
		<img style="position:fixed; top:0px; left:500px;" src="https://bitninja.io/wp-content/uploads/2015/08/success.jpg">
		<a href="home.php">
			<img style="position:fixed; top:200px; left:350px;" src="http://dtkm4pd19nw6z.cloudfront.net/img/blog/gettingStarted-confirm.png">
		</a>
		<?php
	}
	

	else
		echo "Not Inserted". "<br>" . mysqli_error($conn);

} 

else 
{
    echo 'not valid mobile number';
}
?>

</body>
</html>

