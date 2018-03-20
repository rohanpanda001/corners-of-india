<html>
<head>
<title>Corners of India</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<?php 

include "connect.php";


$name=$_POST["name"];
$add=$_POST["Address"];
$mun=$_POST["Muncipality"];
$country=$_POST["Country"];
$lat=$_POST["Latitude"];
$lon=$_POST['Longitude'];
$img_url=$_POST['Image_url'];
$arch_style=$_POST['arch_style'];
$architect=$_POST['Architect'];
$phone=$_POST['Phone'];
$description=$_POST['Description'];


$sql="INSERT INTO monuments_general (Name,Address,Muncipality,Country,Latitude,Longitude,img_url,arch_style,Architect,Phone,Description) VALUES ('$name','$add','$mun','$country','$lat','$lon','$img_url','$arch_style','$architect','$phone','$description')";

$result=mysqli_query($conn,$sql);

	if($result)
	{
		echo "Inserted";
		?>
		<a href="adminpage.html" >
			<button type="button"  class="btn btn-primary">Admin Page</button>
		</a>
		<?php
	}
	

else
	echo "Not Inserted". "<br>" . mysqli_error($conn);

?>

</body>
</html>

