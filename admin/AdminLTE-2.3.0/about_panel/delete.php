<?php
	
	if(isset($_POST['id']))
		{
			$id=$_POST['id'];
			$con=mysqli_connect("localhost","root","","mam");
			$query="delete from about_content where id='{$id}'";
			$res=mysqli_query($con,$query);
			if($res)
			{
				echo "DLETED successfully";
			}
			else
			{
				echo "not DELETED successfully".mysqli_error($con);
			}

}
else
{
	echo "id is not passed";
}
?>