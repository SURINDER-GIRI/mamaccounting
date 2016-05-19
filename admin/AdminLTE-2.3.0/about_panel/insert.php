	<?php
if(isset($_POST['about_title']))
{

	$title=$_POST['about_title'];
	$description=$_POST['about_des'];


	$con=mysqli_connect("localhost","root","","mam");
	$query="insert into about_content (title,description) values ('{$title}','{$description}')";
	$res=mysqli_query($con,$query);
	if($res)
	{
			echo "IINSERTED SUCCESSFULY";
	}
	else
	{
		echo "error while uploading".mysqli_error($con);
	}
}
else
{
	echo "no argument accepted";
}

	?>