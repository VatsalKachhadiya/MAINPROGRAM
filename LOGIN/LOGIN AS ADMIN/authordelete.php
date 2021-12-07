<?php
	 $con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"novel");


	$id1=$_GET['id'];

	$querysel="select a_img FROM author WHERE a_id=$id1";
	$cmdsel=mysqli_query($con,$querysel);
	$row=mysqli_fetch_array($cmdsel);

	$path = 'C:\xampp\htdocs\MAINPROGRAM\HOMEPAGE\authors/'.$row['a_img'];
	unlink($path);

	$query="DELETE FROM author WHERE a_id=$id1";
	$cmd=mysqli_query($con,$query);

	
	
	 header('location:authormodify.php');
	
?>