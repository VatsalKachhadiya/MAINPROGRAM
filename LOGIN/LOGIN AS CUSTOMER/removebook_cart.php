<?php
	 $con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"novel");


	$id1=$_GET['id'];

	$querysel="select book_id FROM cart WHERE book_id=$id1";
	$cmdsel=mysqli_query($con,$querysel);
	$row=mysqli_fetch_array($cmdsel);

	$query="DELETE FROM cart WHERE book_id=$id1";
	$cmd=mysqli_query($con,$query);

	
	//echo "book deleted";
	 header('location:cart.php');
	
?>