<?php
	
$con=mysqli_connect("localhost","root","","mam");
$query="select * from about_content";
$res=mysqli_query($con,$query);
if(mysqli_num_rows($res) > 0)
{

	echo "<strong> <div class='col-lg-12'>
			<div class='col-lg-3'>
			TITLE
			</div>
			<div class='col-lg-3'>
			DESECRIPTION	
			</div>
			<div class='col-lg-3'>
			UPDATE
			</div>
			<div class='col-lg-3'>
			DELETE
			</div>
			 </div></strong>";
	while($row=mysqli_fetch_assoc($res))
{
	
	echo "<div class='col-lg-12' style='padding-top:30px;word-wrap:break-word;'>
			<div class='col-lg-3'>".
			$row['title'].
			"</div>
			<div class='col-lg-3' style='word-wrap:break-word;'>".
			$row['description'].	
			"</div>
			<div class='col-lg-3' style='cursor:pointer;word-wrap:break-word;' onclick='about_updat({$row['id']})'>
			<img src='img/edit.png' height='25px' width='25px'>
			</div>
			<div class='col-lg-3' style='cursor:pointer;word-wrap:break-word;;'  onclick='about_delet({$row['id']})'>
			<img src='img/delete.png' height='25px' width='25px'>
			</div>
			 </div>";


}
	}
	else
	{
		echo "<br><p style='color:#f00;'> NO INFORMATIN IS GIVEN YET PLEASE PROVIDE INFORMATION</p> <BR><BR> <button type='button' class='btn btn-success' onclick='inst()'>INSERT</button>";
	}
?>