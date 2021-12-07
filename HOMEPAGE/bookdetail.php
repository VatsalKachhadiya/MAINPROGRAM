<?PHP

	session_start();

	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'novel');

	// if($con){
	//  	echo "connection succussful";
	//  }else{
	//  	echo "no connection";
	//  }

	if(isset($_POST['submit']))
	{
		$id1=$_GET['id'];
		$query="select * from book WHERE book_id = $id1 ";
		$cmd=mysqli_query($con,$query);
		$row=mysqli_fetch_array($cmd);




		$price = $row['price'];
		$quantity = $_POST['quantity'];
		$total = $price * $quantity;

		

	}

?>

<!DOCTYPE html>

<html>

<head>

	<link rel="stylesheet" type="text/css" href="/MAINPROGRAM/HOMEPAGE/home1.css">
	<link rel="stylesheet" type="text/css" href="/MAINPROGRAM/LOGIN/login.css">
	<title>LOGIN PAGE</title>

</head>

<body>

<header class="header1">

	<div class="container1">	

		<nav class="nav1">	

				<img class="logo" src="/MAINPROGRAM/HOMEPAGE/LOGO/bookmart.jpg" height="80px" width="110px">
				<!-- search box -->
				
		</nav>	

	</div>
<!-- second header starts -->
	<div class="container2">

		<ul class="ul1">

		  <li style="margin-left: 20px">
		  	<a href="/MAINPROGRAM/HOMEPAGE/home1.php">HOME</a>
		  </li>

		  <!-- <li>
		  	<a href="#news">NEW ARRIVALS</a>
		  </li>

		  <li class="dropdown">
		    <a href="javascript:void(0)" class="dropbtn">GENRE</a>

		    <div class="dropdown-content">
		      <a href="#">ADVENTURE</a>
		      <a href="#">ACTION</a>
		      <a href="#">BIOGRAPHIES AND AUTOBIOGRAPHIES</a>
		      <a href="#">BODY,MIND AND SPIRIT</a>
		      <a href="#">BUSINESS AND ECONOMY</a>
		      <a href="#">CHILDREN</a>
		      <a href="#">FOOD</a>
		      <a href="#">ENVIRONMENT AND GEOGRAPHY</a>
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

		  </li>

		  <li class="dropdown">
		  	<a href="javascript:void(0)" class="dropbtn">AUTHORS</a>

		  	<div class="dropdown-content">
		      <a href="#">AMRITA PRITAM</a>
		      <a href="#">ARUNDHATI ROY</a>
		      <a href="#">CHETAN BHAGAT</a>		     
		    </div>

		  </li>
 -->
		<!--  <li style="float: right;" class="dropdown">
		  	 <a href="/MAINPROGRAM/SIGNUP/SIGNUP%20AS%20CUSTOMER/signup_customer.php">SIGNUP</a>
			
		  </li>	 -->


<!-- 		  <li style="float: right;" class="dropdown">
 -->
<!-- 		  	<a href="javascript:void(0)" class="dropbtn">LOGIN</a>
 -->		  	<!-- <a href="http://localhost:8080/MAINPROGRAM/signup.php">SIGNUP</a> -->
			<!-- <div class="dropdown-content">
		      <a href="/MAINPROGRAM/LOGIN/LOGIN%20AS%20CUSTOMER/login_customer.php">CUSTOMER</a>
		      <a href="/MAINPROGRAM/LOGIN/LOGIN%20AS%20ADMIN/login_admin.php">ADMIN</a>		     
		    </div>
 -->
<!-- 		  </li>	
 -->
		</ul>

	</div>

</header>

<h1> Book Details</h1>
<?php

$id1=$_GET['id'];
$query="select * from book WHERE book_id = $id1 ";
	$cmd=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($cmd)){
//echo $row['price']; 
 // echo $row['book_img'];	
// echo $row['description']; 	
 // echo "/MAINPROGRAM/HOMEPAGE/books/".$row['book_img'];
 // $imgadd="/MAINPROGRAM/HOMEPAGE/books/".$row['book_img'];
 // echo $imgadd;
 ?>
<div style="margin-left: 30px; margin-bottom: 100px;">

<form method="post" action="/MAINPROGRAM/LOGIN/LOGIN%20AS%20CUSTOMER/login_customer.php?id=<?php echo $id1; ?>">

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
	DESCRIPTION<textarea class="i User" type="textarea"  name="description" rows="6" cols="8" readonly><?php echo strtoupper($row['description']); ?> 
	</textarea>
	<br><br>
	QUANTITY<input type="number" name="quantity" value="1" autocomplete="off">
	<br><br>

	
	<!-- <a href="/MAINPROGRAM/LOGIN/LOGIN%20AS%20CUSTOMER/login_customer.php?id=<?php //echo $id1; ?>"> --><button style="margin-left: 200px;" type="submit" name="submit">LOGIN TO BUY BOOK</button><!-- </a>
	 --><br><br>

	
</form>


</div>

<?php

}

?>

</body>
</html>
<!-- <?php  
	//unset($_SESSION["amount"]);
 ?>
 -->


 <!-- <?php
		//if(isset($_SESSION["amount"])){
  	
	?><label> <?php //echo "QUANTITY = ".$_SESSION["quantity"];?></label>
	<br><br>
	<label> <?php //echo "TOTAL AMOUNT = ".$_SESSION["amount"];?>&#8377;</label>
	<br><br>
	<a href="/MAINPROGRAM/LOGIN/LOGIN%20AS%20CUSTOMER/login_customer.php?id=<?php //echo $id1; ?>"><button style="margin-left: 200px;">LOGIN TO BUY BOOK</button></a>

