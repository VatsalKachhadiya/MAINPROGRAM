<?php

	
session_start();



	 $con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"novel");


	$id1=$_GET['id'];

//
	$querysel="select book_id FROM cart WHERE book_id=$id1";
	$cmdsel=mysqli_query($con,$querysel);
	$row=mysqli_fetch_array($cmdsel);

	$query="DELETE FROM cart WHERE book_id=$id1";
	$cmd=mysqli_query($con,$query);

//




	$querysel="select book_img FROM book WHERE book_id=$id1";
	$cmdsel=mysqli_query($con,$querysel);
	$row=mysqli_fetch_array($cmdsel);

	$num = mysqli_num_rows($cmdsel);

	

	

	$query="DELETE FROM book WHERE book_id=$id1";
	$cmd=mysqli_query($con,$query);

	if($cmd){

	$path = 'C:\xampp\htdocs\MAINPROGRAM\HOMEPAGE\books/'.$row['book_img'];
	unlink($path);


	$_SESSION['delete'] = "book deleted successfully";
	 header('location:bookmodify.php');

	}else{

		$_SESSION['delete'] = "book is added to cart by some customer";
	 header('location:bookmodify.php');
	}
	
	
	
?>