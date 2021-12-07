<?php

session_start();

 if(!isset($_SESSION['username'])){
 header('location:/MAINPROGRAM/LOGIN/LOGIN%20AS%20CUSTOMER/login_customer.php');
 }

$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'novel');

	// if($con){
	//  	echo "connection succussful";
	//  }else{
	//  	echo "no connection";
	//  }

	// if(isset($_POST['submit']))
	// {
	// 	//bookdetail
	// 	$id1=$_GET['id'];
	// 	$query="select * from book WHERE book_id = $id1";
	// 	$cmd=mysqli_query($con,$query);
	// 	$row=mysqli_fetch_array($cmd);

	// 	$price = $row['price'];
	// 	$quantity = $_POST['quantity'];
	// 	$total = $price * $quantity;

	// 	$_SESSION['quantity'] = $quantity;
	// 	//
	// //cid
	// 	$c_username=$_SESSION['username'];
	// 	 $q="select * from customer where c_username='$c_username'";
 //   		$queryfire = mysqli_query($con, $q);
 //   		$product = mysqli_fetch_array($queryfire);
 // 		$customer = $product['c_id'];
	// //



	// 	$q2 = "select * FROM cart where book_id = $id1";
	//  	$queryfire2 = mysqli_query($con, $q2);

	//  	$num = mysqli_num_rows($queryfire2);

	// 	if($num == 1){

	// 	$_SESSION['bookadd'] = "book already inserted to cart";
 // 		header('location:bookdetail_customer.php');


	// 	}else{

	// 		$gy="insert into cart( c_id , book_id , p_quantity) values ('$customer' , '$id1' , '$quantity') ";
	// 		mysqli_query($con, $qy);
	// 		$_SESSION['bookadd'] = "book added to cart";
 // 		header('location:bookdetail_customer.php');
	// 	}
	// }


?>

<!DOCTYPE html>

<html>

<head>

	<link rel="stylesheet" type="text/css" href="/MAINPROGRAM/HOMEPAGE/home1.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	
	<title>LOGIN PAGE</title>

</head>


<body>

<header class="header1">

	<div class="container1">	

		<nav class="nav1">	

				<img class="logo" src="/MAINPROGRAM/HOMEPAGE/LOGO/bookmart.jpg" height="80px" width="110px">

				

					
				<div class="container10" style="float: right; padding: 6px;  margin-top: 8px;  margin-right: 30px; font-size: 17px; ">

      				<button type="button" class="cancelbtn" style=" font-size: 15px; text-align:center; ">      	
		  	 			<a href="/MAINPROGRAM/LOGIN/LOGIN%20AS%20CUSTOMER/cart.php" style="text-decoration: none; color: black;"><?php echo $_SESSION['username']; ?>   <i class="fa fa-shopping-cart"></i></a>
     				</button>

      				
   				 </div> 
		</nav>

	</div>
<!-- second header starts -->
	<div class="container2">

		<ul class="ul1">

		  <li style="margin-left: 20px">
		  	<a href="/MAINPROGRAM/LOGIN/LOGIN%20AS%20CUSTOMER/home_customer.php">HOME</a>
		  </li>




		  <li style="float: right;" class="dropdown">
		  	 <a href="/MAINPROGRAM/LOGIN/LOGIN%20AS%20CUSTOMER/logout.php">LOGOUT</a>
			
		  </li>	


		  


		  <!-- <li style="float: right;">
		  	<a href="http://localhost:8080/MAINPROGRAM/login.php">LOGIN</a>
		  </li>	 -->	  

		</ul>

	</div>

</header>

<h1> Book Details</h1>
<?php

$id1=$_GET['id'];
$query="select * from book WHERE book_id = $id1 ";
	$cmd=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($cmd)){ ?>
<div style="margin-left: 30px; margin-bottom: 10px;">

<form method="post" action="cartadding.php?id=<?php echo $id1; ?>">

	<img src=" <?php echo "/MAINPROGRAM/HOMEPAGE/books/".$row['book_img'];  ?> " alt="Avatar" style="width: 200px; height: 200px;" >
	<br><br>
	BOOK NAME<label type="text" name="book_name"><?php echo strtoupper(" = ".$row['book_name']); ?></label>
	<br><br>
	AUTHOR NAME<label type="text" name="b_author"><?php echo strtoupper(" = ".$row['b_author']);?></label>
	<br><br>
	PUBLISHER NAME<label type="text" name="b_publisher"><?php echo strtoupper(" = ".$row['b_publisher']); ?></label>
	<br><br>
	PRICE<label type="number" name="price"><?php echo " = ".$row['price']; ?>&#8377;</label>
	<br><br>
	GENRE<label type="text" name="genre"><?php echo strtoupper(" = ".$row['genre']); ?></label>
	<br><br>
	IMBD RATING<label type="number" name="imbdrating"><?php echo " = ".$row['imbdrating']."/10"; ?></label>
	<br><br>
	DESCRIPTION<textarea class="i User" type="textarea"  name="description" rows="6" cols="8" style="width: 100%;  padding: 12px 20px;
  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  box-sizing: border-box;" readonly>
  <?php echo strtoupper($row['description']); ?></textarea>
	<br><br>
	QUANTITY<input type="number" name="quantity" value="1" autocomplete="off">
	<br><br>

	
	

	<?php
$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'novel');

	// if($con){
 //  	echo "connection succussful";
	//   }else{
	//   	echo "no connection";
	//   }

	$query="select * from book WHERE book_id = $id1";
		$cmd=mysqli_query($con,$query);
		$row=mysqli_fetch_array($cmd);

		//$price = $row['price'];
		//$quantity = $_POST['quantity'];
		//$total = $price * $quantity;
		

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

	?>								




	<button style="margin-left: 200px;" type="submit" name="submit" disabled> ITEM ADDED </button>
	<br><br>


	

	<?php
}else{

	?>
	<button style="margin-left: 200px;" type="submit" name="submit"> ADD TO CART</button>
	<br><br>
<?php


}
?>

	

</form>

</div>

<?php
}
?>


</body>
</html>

<!-- <?php
//unset($_SESSION["bookadd"]);
?>
 -->