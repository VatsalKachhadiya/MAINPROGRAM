<?php

session_start();


 if(!isset($_SESSION['username'])){


 header('location:/MAINPROGRAM/LOGIN/LOGIN%20AS%20CUSTOMER/login_customer.php');
 }

?>


<!DOCTYPE html>

<html>

<head>

	<link rel="stylesheet" type="text/css" href="/MAINPROGRAM/HOMEPAGE/home1.css">
	<link rel="stylesheet" type="text/css" href="/MAINPROGRAM/HOMEPAGE/card.css">
	<link rel="stylesheet" type="text/css" href="/MAINPROGRAM/HOMEPAGE/grid.css">
	<title>book mart</title>

	<!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>  -->
 
</head>


<!-- <li class="nav-item dropdown">
      <a class="nav-link dropdown" href="#" id="navbardrop" data-toggle="dropdown">
        Dropdown link
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>	
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>

 -->




<body>

<header class="header1">

	<div class="container1">	

		<nav class="nav1">	

				<img class="logo" src="/MAINPROGRAM/HOMEPAGE/LOGO/bookmart.jpg" height="80px" width="110px">

			
<!-- 
				<div class="container10" style="float: right; padding: 6px;  margin-top: 8px;  margin-right: 30px; font-size: 17px; ">

      				<button type="button" class="cancelbtn" style=" font-size: 15px; text-align:center; ">      	
		  	 			<a href="" style="text-decoration: none; color: black;"><?php //echo "USERNAME = ".$_SESSION['username']; ?></a>
     				</button>

      				
   				 </div>  -->
		</nav>

	</div>
<!-- second header starts -->
	<div class="container2">

		<ul class="ul1">

			<li style="margin-left: 20px">
		  	<a href="/MAINPROGRAM/LOGIN/LOGIN%20AS%20CUSTOMER/home_customer.php">HOME</a>
		  </li>

		 <li class="dropdown">
		  	<a href="" class="dropbtn">USER INFO</a>

		  </li> 

		  

		  <!-- <li class="dropdown">
		    <a href="javascript:void(0)" class="dropbtn">GENRE</a>

		    <div class="dropdown-content">
		      <a href="#">ADVENTURE</a>
		      <a href="#">ACTION</a>
		      <a href="#">BIOGRAPHIES AND AUTOBIOGRAPHIES</a>
		      <a href="#">BODY,MIND AND SPIRIT</a>
		      <a href="#">BUSINESS AND ECONOMY</a>
		      <a href="#">CHILDREN</a>
		      <a href="#">FOOD</a>
		      <a href="#">ENVIRONMsENT AND GEOGRAPHY</a>
		      <a href="#">HISTORY</a>
		      <a href="#">MEDICINES</a>
		      <a href="#">MUSIC</a>
		      <a href="#">PARENTING AND FAMILY</a>
		      <a href="#">POLITICS</a>
		      <a href="#">LOVE STORY</a>
		      <a href="#">ENCYCLOPEDIA</a>
		      <a href="#">RELIGION AND SPIRITUALITY</a>
		      <a href="#">PERSONAL DEVELOPMENT</a>
		      <a href="#">SPORTS</a>
		      <a href="#">TECHNOLOGY</a>
		      <a href="#">OTHER</a>
		    </div>

		  </li> -->

		  <!-- <li class="dropdown">
		  	<a href="/MAINPROGRAM/LOGIN/LOGIN%20AS%20CUSTOMER/authordisp_customer.php" class="dropbtn">AUTHORS</a>

		  </li> -->

		 

		  <li style="float: right;" class="dropdown">
		  	 <a href="/MAINPROGRAM/LOGIN/LOGIN%20AS%20CUSTOMER/logout.php">LOGOUT</a>
			
		  </li>	


		  


		  <!-- <li style="float: right;">
		  	<a href="http://localhost:8080/MAINPROGRAM/login.php">LOGIN</a>
		  </li>	 -->	  

		</ul>

	</div>

</header>




 <h1>YOUR CART BOOKS</h1>
<div class="grid-container">


<?php 

$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'novel');

	// if($con){
	//   	echo "connection succussful";
 //    }else{
	// 	echo "no connection";
	// }
	 $c_username=$_SESSION['username'];
	 // echo $c_username;

   $q="select * from customer where c_username='$c_username'";
   $queryfire = mysqli_query($con, $q);
   $product = mysqli_fetch_array($queryfire);
  $customer = $product['c_id'];

//
// $query="select * from customer where c_username='$c_username'";
// 	$cmd=mysqli_query($con,$query);
// 	while($row=mysqli_fetch_array($cmd))


//
	 $q2 = "select * FROM cart where c_id = $customer";
	 $queryfire2 = mysqli_query($con, $q2);


	  $num = mysqli_num_rows($queryfire2);
	  if($num > 0){
	 while($product2 = mysqli_fetch_array($queryfire2))
	 {
		$book=$product2['book_id'];
		$q3 = "select * FROM book where book_id = $book";
		$queryfire3 = mysqli_query($con, $q3);
		$product3 = mysqli_fetch_array($queryfire3);

		$amount = $product3['price'] * $product2['p_quantity'];
		?>
		 <div class="grid-item">

		 	<div class="card">
			<form class="displaycart" method="post" action="removebook_cart.php?id=<?php echo $product2['book_id']; ?>">
 			 <img src=" <?php echo "/MAINPROGRAM/HOMEPAGE/books/".$product3['book_img'];  ?> " alt="Avatar" style="width: 200px; height: 200px;" >

			<p style="margin: 1px; padding: 1px; font-size: 18px"> <?php echo strtoupper($product3['book_name']);  ?></p>

			<p style="margin: 1px; padding: 1px; font-size: 18px"> <?php echo strtoupper($product3['b_author']);  ?></p>

			<p style="margin: 1px; padding: 1px; font-size: 18px"> <?php echo strtoupper("price = ".$product3['price']);  ?></p>
			
			QUANTITY<input type="number" name="quantity" value="<?php echo strtoupper($product2['p_quantity']);  ?>"><br><button style="text-decoration: none; color: white; background-color: #BBBEBD; " type="submit" name="submit" formmethod="post" formaction="changequantity_cart.php?id=<?php echo $product2['book_id']; ?>"> CHANGE </button><br>
			
			<p>AMOUNT <?php echo " = ".$amount;  ?>&#8377;</p>
			
			<!-- <a style="text-decoration: none;" href="removebook_cart.php?id=<?php //echo $product2['book_id']; ?>"> --><button style="text-decoration: none; color: white; background-color: 	#BDB76B; " type="submit" name="submit" type="submit"> REMOVE BOOK </button><!-- </a> -->
			<br><br>

			<!-- <button style="text-decoration: none; color: white; background-color: 	darkseagreen;" type="submit" name="submit"> BUY NOW </button>
			<br><br>
 -->
			</form>
			</div>
		</div>



	<?php }}
	 // $book = $product2['book_id'];
	// $queryfire = mysqli_query($con, $query);

	 //  $q3 = "select * FROM book where book_id = $book";
	 // $queryfire3 = mysqli_query($con, $q3);
	 // $product3 = mysqli_fetch_array($queryfire3);
	// $book = $product3['book_id'];

// $num = mysqli_num_rows($queryfire2);

 // print_r($product);
 // print_r($product2);
 // print_r($product3);
	// echo $customer;

?>
 
</div>

<div>
	<form method="post" action="checkout.php?id=<?php echo $_GET['grand_total']; ?>">

	<center><h2 style="margin-left: 100px;">TOTAL BOOKS =<label type="number" name="total_books">
	<?php
$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'novel');

	// if($con){
	//    	echo "connection succussful";
 //     }else{
	//  	echo "no connection";
	//  }

	$q11 = "select amount FROM cart where c_id = $customer";
	 $queryfire11 = mysqli_query($con, $q11);


	  $num = mysqli_num_rows($queryfire11);
$total_books=0;
	  if($num > 0){
	 while($product11 = mysqli_fetch_array($queryfire11))
	 {
	 		$total_books = $total_books + 1;



	 }
	 echo $total_books;
	}	


	?></label>




</h2></center>


	
<center><h2 style="margin-left: 100px;">GRAND TOTAL =<label type="number" name="grand_total">
	<?php
$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'novel');

	// if($con){
	//    	echo "connection succussful";
 //     }else{
	//  	echo "no connection";
	//  }

	$q11 = "select amount FROM cart where c_id = $customer";
	 $queryfire11 = mysqli_query($con, $q11);


	  $num = mysqli_num_rows($queryfire11);
$grand_total=0;
	  if($num > 0){
	 while($product11 = mysqli_fetch_array($queryfire11))
	 {
	 		$grand_total = $grand_total + $product11['amount'];



	 }
	 echo $grand_total;
	}	


	?></label>

</h2></center>

<center>
	<h3><button style="margin-left: 70px; padding: 5px;" type="submit" name="submit" type="submit" formmethod="post" formaction="check_grandtotal.php?grand_total=<?php echo $grand_total; ?>"> PLACE ORDER </button></h3>
</center>

</form>
<?php
  	if(isset($_SESSION["ans"])){
  	
	?><h2> <?php echo $_SESSION["ans"];?></h2>
	<?php
	}
?>
</div>




</body>
</html>
<?php
unset($_SESSION["ans"]);
?>