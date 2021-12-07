<?php

session_start();


 if(!isset($_SESSION['username'])){


 header('location:/MAINPROGRAM/LOGIN/LOGIN%20AS%20CUSTOMER/login_customer.php');


 }
 if(!isset($_SESSION['checkout'])){


 header('location:cart.php');


 }



$grand_total=$_GET['grand_total'];

?>


<!DOCTYPE html>

<html>

<head>
	
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
	<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="/MAINPROGRAM/HOMEPAGE/home1.css">
	<link rel="stylesheet" type="text/css" href="/MAINPROGRAM/HOMEPAGE/card.css">
	<link rel="stylesheet" type="text/css" href="/MAINPROGRAM/HOMEPAGE/grid.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>SIGNUP FOR ADMIN</title>

</head>

<body>

<header class="header1">

	<div class="container1">	

		<nav class="nav1">	

				<img class="logo" src="/MAINPROGRAM/HOMEPAGE/LOGO/bookmart.jpg" height="80px" width="110px">
				<!-- search box -->
				


				<div class="container10" style="float: right; padding: 6px;  margin-top: 8px;  margin-right: 30px; font-size: 17px; ">

      				<button type="button" class="cancelbtn" style=" font-size: 15px; text-align:center; ">      	
		  	 			<a href="/MAINPROGRAM/LOGIN/LOGIN%20AS%20CUSTOMER/cart.php" style="text-decoration: none; color: black;"><?php echo $_SESSION['username']; ?>   <i class="fa fa-shopping-cart"></i></a>
     				</button>

      				
   				 </div> 

		</nav>	

	</div>

	<div class="container2">

		<ul class="ul1">

		  

		</ul>

	</div>
</header>




<center>
<h1> CHECKOUT YOUR CART</h1>
</center>
<div style="margin-left: 40px">
	<h2> ENTER YOUR SHIPPING ADDRESS </h2><br>
	<div style="margin-left: 20px;">
<form method="post" action="buy_book.php?grand_total=<?php echo $grand_total; ?>" enctype="">


<!-- BOOK ID<label type="number" name="book_id"><?php //echo " = ".$id1;?></label>
<br><br> -->
RECEIVER'S NAME <input type="text" name="rname" value="" autocomplete="off" required>
<br><br>
RECEIVER'S ADDRESS <br><textarea class="i User" type="textarea"  name="raddress" rows="6" cols="50" autocomplete="off" required></textarea>
	<!-- value="<?php //echo $row['description'] ?> " -->
<br><br>
RECEIVER'S PHONENO <input type="tel" minlength="10" maxlength="10" name="rphoneno" value="" autocomplete="off" required>
<br><br>
<!-- SENDERS'S PHONENO <input type="number" name="price" value="" autocomplete="off">
<br><br> -->
STATE <input type="text" name="state" value=""  autocomplete="off" required>
<br><br>
CITY <input type="text" name="city" value=""  autocomplete="off" required>
<br><br>
PINCODE <input type="tel" name="pincode" minlength="6" maxlength="6" value="" autocomplete="off" required>
<br><br>
<input type="checkbox" name="dilivery_type" value="" checked=""> cash on delivery<br>

<input style="padding: 5px; margin-left: 200px" type="submit" name="submit" value="CHECKOUT">
</form>
</div>

</div>


</body>
</html>
