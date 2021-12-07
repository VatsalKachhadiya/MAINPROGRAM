<?php 
session_start();


 $con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"novel");

	$id1=$_GET['id'];

	$query="select * from book WHERE book_id = $id1";
		$cmd=mysqli_query($con,$query);
		$row=mysqli_fetch_array($cmd);

		$price = $row['price'];
		$quantity = $_POST['quantity'];
		$total = $price * $quantity;




	// $quantity=$_POST['quantity'];


	$query="UPDATE cart SET p_quantity='$quantity' , amount='$total' WHERE book_id=$id1; ";
 		$cmd=mysqli_query($con,$query);

header('location:cart.php');


?>