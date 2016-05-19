<?php
if(isset($_POST['id']))
{
  $con=mysqli_connect("localhost","root","","mam");
  $id=$_POST['id'];
  $title=$_POST['c_title'];
  $des=$_POST['c_des'];
   $query="update card set title='{$title}', description='{$des}' where id='{$id}'";
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