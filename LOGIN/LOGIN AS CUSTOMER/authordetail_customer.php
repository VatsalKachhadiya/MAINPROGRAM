<?php

session_start();


 if(!isset($_SESSION['username'])){


 header('location:/MAINPROGRAM/LOGIN/LOGIN%20AS%20CUSTOMER/login_customer.php');
 }else{
$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'novel');

	// if($con){
	//  	echo "connection succussful";
	//  }else{
	//  	echo "no connection";
	//  }

 }

?>

<!DOCTYPE html>

<html>

<head>

	<link rel="stylesheet" type="text/css" href="/MAINPROGRAM/HOMEPAGE/home1.css">
	<link rel="stylesheet" type="text/css" href="/MAINPROGRAM/LOGIN/login.css">
	<link rel="stylesheet" type="text/css" href="/MAINPROGRAM/HOMEPAGE/card.css">
	<link rel="stylesheet" type="text/css" href="/MAINPROGRAM/HOMEPAGE/grid.css">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>LOGIN PAGE</title>

</head>

<body>

<header class="header1">

	<div class="container1">	

		<nav class="nav1">	

				<img class="logo" src="/MAINPROGRAM/HOMEPAGE/LOGO/bookmart.jpg" height="80px" width="110px">
				<!-- search box -->
					<div class="container10" style="float: right; padding: 6px;  margin-top: 8px;  margin-right: 30px; font-size: 17px; ">

      				<button type="button" class="cancel" style=" font-size: 15px; text-align:center; ">      	
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


		  <li>
		  	<a href="/MAINPROGRAM/LOGIN/LOGIN%20AS%20CUSTOMER/newarrivals_customer.php">NEW ARRIVALS</a>
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

		  <li class="dropdown">
		  	<a href="/MAINPROGRAM/LOGIN/LOGIN%20AS%20CUSTOMER/authordisp_customer.php" class="dropbtn">AUTHORS</a>

		  </li>

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



<div>
<h1> Author Details</h1>
<?php

$id1=$_GET['id'];
$query="select * from author WHERE a_id = $id1 ";
	$cmd=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($cmd)){
//echo $row['price']; 
 // echo $row['book_img'];	
// echo $row['description']; 	
 // echo "/MAINPROGRAM/HOMEPAGE/books/".$row['book_img'];
 // $imgadd="/MAINPROGRAM/HOMEPAGE/books/".$row['book_img'];
 // echo $imgadd;
 ?>
<div style="margin-left: 30px; margin-bottom: 20px;">

	<img src=" <?php echo "/MAINPROGRAM/HOMEPAGE/authors/".$row['a_img'];  ?> " alt="Avatar" style="width: 200px; height: 200px;" >
	<br><br>
	AUTHOR NAME<label type="text" name="a_name"><?php echo strtoupper(" = ".$row['a_name']); ?></label>
	<br><br>
	DESCRIPTION<textarea class="i User" type="textarea"  name="description" rows="6" cols="8" readonly><?php echo strtoupper($row['description']); ?> 
	</textarea>
	<br><br>

</div>

<?php
}
?>
</div>




 <h1>Author books</h1>
<div class="grid-container">


<?php 

$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'novel');

	//  if($con){
	//  	echo "connection succussful";
 // }else{
	// 	echo "no connection";
	// }


	$que = "select a_name from author where a_id = $id1";
	$cmdque=mysqli_query($con,$que);
	$rowque=mysqli_fetch_array($cmdque);

	$aname=$rowque['a_name'];
	// strtolower(preg_replace('/[^a-zA-Z0-9-_\.]/','', $string));

	// $query = " SELECT `book_id`,`book_img`,`book_name`, `b_author`, `price`, `imbdrating` FROM `book` WHERE 'b_author'= '$aname'";
	$query = "select book_id , book_img , book_name , b_author , price , imbdrating FROM book WHERE b_author='$aname'";
	$queryfire = mysqli_query($con, $query);

 $num = mysqli_num_rows($queryfire);


 if($num > 0){
	 while($product = mysqli_fetch_array($queryfire)){
			?>

  <div class="grid-item">
  	

<div class="card">

  <img src=" <?php echo "/MAINPROGRAM/HOMEPAGE/books/".$product['book_img'];  ?> " alt="Avatar" style="width: 200px; height: 200px;" >

	<p style="margin: 1px; padding: 1px; font-size: 18px"> <?php echo strtoupper($product['book_name']);  ?>   </p>

	<p style="margin: 1px; padding: 1px; font-size: 14px"><?php echo strtoupper($product['b_author']);  ?>  </p>

   <p class="price" style="margin: 1px; padding: 1px; font-size: 20px"> &#8377; <?php echo $product['price'];?> </p>
	
	<p class="price" style="margin: 1px; padding: 1px; font-size: 20px"><?php echo "Rating = ".$product['imbdrating'];  ?> /10  </p>

  <?php include 'itemaddedbutton.php'; ?>
</div>

  </div> 
 

<?php

}
}
?> 


</div>



</body>
</html>

