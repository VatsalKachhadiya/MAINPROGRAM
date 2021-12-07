<?php

$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'novel');

 //  if($con){
 //  	echo "connection succussful";
 // }else{
	//  	echo "no connection";
	//  }
		$id10 = $product['book_id'];

		$query1="select * from book WHERE book_id = $id10";
		$cmd1=mysqli_query($con,$query1);
		$row1=mysqli_fetch_array($cmd1);

		//$price = $row['price'];
		//$quantity = $_POST['quantity'];
		//$total = $price * $quantity;
		

	//cid
		$c_username=$_SESSION['username'];
		 $q="select * from customer where c_username='$c_username'";
   		$queryfire1 = mysqli_query($con, $q);
   		$product1 = mysqli_fetch_array($queryfire1);
 		$customer = $product1['c_id'];
	//



		$q2 = "select * FROM cart where book_id = $id10 && c_id = $customer";
	 	$queryfire2 = mysqli_query($con, $q2);

	 	$num1 = mysqli_num_rows($queryfire2);


	 	if($num1 == 1){


?>
<button style="background-color: green;" disabled>BOOK ADDED</button>
  

<?php
}else{

?>
<a style="text-decoration: none; color: white;" href="bookdetail_customer.php?id=<?php echo $product['book_id']; ?>" ><button>BUY NOW</button></a>


<?php
}
?>