<HTML>
<body>
<?php
	$m_id=$_POST['M_id'];
	$name=$_POST['name'];
	$add=$_POST['Address'];
	$mun=$_POST['Muncipality'];
	$country=$_POST['Country'];
	$lat=$_POST['Latitude'];
	$lon=$_POST['Longitude'];
	$img_url=$_POST['Img_url'];
	$arch_style=$_POST['arch_style'];
	$architect=$_POST['Architect'];
	$phone=$_POST['Phone'];
	$description=$_POST['Description'];

	include "connect.php";

	if($name)
		{

			$update="Update monuments_general SET Name='$name' where M_id=$m_id";
			$result=mysqli_query($update,$conn);
		}
	if($add)
		{
			$update="Update monuments_general SET Address='$add' where M_id=$m_id";
			$result=mysqli_query($update,$conn);
		}
	if($mun)
		{
			$update="Update monuments_general SET Muncipality='$mun' where M_id=$m_id";
			$result=mysqli_query($update,$conn);
		}
	if($country)
		{
			$update="Update monuments_general SET Country='$country' where M_id=$m_id";
			$result=mysqli_query($update,$conn);
		}
	if($lat)
		{
			$update="Update monuments_general SET Latitude='$lat' where M_id=$m_id";
			$result=mysqli_query($update,$conn);
		}
	if($lon)
		{
			$update="Update monuments_general SET Longitude='$lon' where M_id=$m_id";
			$result=mysqli_query($update,$conn);
		}
	if($img_url)
		{
			$update="Update monuments_general SET img_url='$img_url' where M_id=$m_id";
			$result=mysqli_query($update,$conn);
		}
	if($arch_style)
		{
			$update="Update monuments_general SET arch_style='$arch_style' where M_id=$m_id";
			$result=mysqli_query($update,$conn);
		}
	if($architect)
		{
			$update="Update monuments_general SET Architect='$architect' where M_id=$m_id";
			$result=mysqli_query($update,$conn);
		}
	if($phone)
		{
			$update="Update monuments_general SET Phone='$phone' where M_id=$m_id";
			$result=mysqli_query($update,$conn);
		}
	if($description)
		{
			$update="Update monuments_general SET Description='$description'  where M_id=$m_id";
			$result=mysqli_query($update,$conn);
		}


	

	if($result)
		{
			?>
			<img style="position:fixed; top:100px; left:500px;" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTjH3rECmmjdOn6FHyWUGkncgwQy3gG_OxnrHhDdhuDAAc3dQJ8">
			<a href="adminpage.html" >
				<button type="button"  class="btn btn-primary">Admin Page</button>
			</a>
			<?php
		}
	else
		echo "Not Updated". "<br>" . mysqli_error($conn);
	
?>
</body>
</HTML>