	<?php
if(isset($_POST['title']))
{

	$title=$_POST['title'];
	$description=$_POST['description'];


	$con=mysqli_connect("localhost","root","","mam");
	$query="insert into card (title,description) values ('{$title}','{$description}')";
	$res=mysqli_query($con,$query);
	if($res)
	{
		alert("IINSERTED SUCCESSFULY");
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