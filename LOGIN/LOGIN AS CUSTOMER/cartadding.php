<?php

 session_start();

$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'novel');

if($con){
echo" connection successful";
}else{
echo " no connection"; 
}


if(isset($_POST['submit']))
	{
		//bookdetail
		$id1=$_GET['id'];
		
		

		$query="select * from book WHERE book_id = $id1";
		$cmd=mysqli_query($con,$query);
		$row=mysqli_fetch_array($cmd);

		$price = $row['price'];
		$quantity = $_POST['quantity'];
		$total = $price * $quantity;
		

	//cid
		$c_username=$_SESSION['username'];
		 $q="select * from customer where c_username='$c_username'";
   		$queryfire = mysqli_query($con, $q);
   		$product = mysqli_fetch_array($queryfire);
 		$customer = $product['c_id'];
	//



		$q2 = "select * FROM cart where book_id = $id1 && c_id = $customer";
	 	$queryfire2 = mysqli_query($con, $q2);

	 	$num = mysqli_num_rows($queryfire2);

		if($num == 1){

		 // $_SESSION['bookadd'] = "item added already";
 		header('location:bookdetail_customer.php?id=' . $id1);


		}else{

			$qy="insert into cart( c_id , book_id , p_quantity , amount) values ('$customer' , '$id1' , '$quantity' , '$total') ";
			mysqli_query($con, $qy);
			// $_SESSION['bookadd'] = "book added to cart";
 		
			header('location:bookdetail_customer.php?id=' . $id1);
		}
	}



?>