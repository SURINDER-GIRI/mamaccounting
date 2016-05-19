	<?php
if(isset($_POST['title']))
{

	$title=$_POST['title'];
	$description=$_POST['des'];


	$con=mysqli_connect("localhost","root","","mam");
	$query="insert into card (title,description) values ('{$title}','{$description}')";
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