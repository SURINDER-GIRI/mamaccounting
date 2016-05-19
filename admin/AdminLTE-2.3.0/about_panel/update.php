<?php
if(isset($_POST['about_id']))
{
  $con=mysqli_connect("localhost","root","","mam");
  $id=$_POST['about_id'];
  $title=$_POST['about_c_title'];
  $des=$_POST['about_c_des'];
   $query="update about_content set title='{$title}', description='{$des}' where id='{$id}'";
   $res=mysqli_query($con,$query);
   if($res)
   {
   	echo "udpated succesfuly";
   }
   else
   {
   	echo "error while inserting ".mysqli_error($con);
   }
}
else
{
	echo "your argument didnot passed";
}
?>