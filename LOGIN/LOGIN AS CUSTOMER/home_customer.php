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

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

				<!-- search box -->

					<div class="search-container" style="float: right;">

				 <div class="search-container" style="float: right;">

				  <form action="searchpage_customer.php" method="post">
				  		<button type="submit" name="submit-search">SEARCH</button>
				    	<input type="text" placeholder="BOOK OR AUTHOR NAME" name="search" autocomplete="off">
				    	
				  </form>

				</div>

				</div>

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


<!-- side nav bar options for genre -->
<!-- <header class="header2">
	
	<div class="container3">

		  <h3>GENRE</h3>

		  	<div class="sidenav">

			  <a href="#">ADVENTURE</a><br>
		      <a href="#">ACTION</a><br>
		      <a href="#">BIOGRAPHIES AND AUTOBIOGRAPHIES</a><br>
		      <a href="#">BODY,MIND AND SPIRIT</a><br>
		      <a href="#">BUSINESS AND ECONOMY</a<br>
		      <a href="#">CHILDREN</a><br>
		      <a href="#">FOOD</a><br>
		      <a href="#">ENVIRONMENT AND GEOGRAPHY</a><br>
		      <a href="#">HISTORY</a><br>
		      <a href="#">MEDICINES</a><br>
		      <a href="#">MUSIC</a><br>
		      <a href="#">PARENTING AND FAMILY</a><br>
		      <a href="#">POLITICS</a><br>
		      <a href="#">LOVE STORY</a><br>
		      <a href="#">ENCYCLOPEDIA</a><br>
		      <a href="#">RELIGION AND SPIRITUALITY</a><br>
		      <a href="#">PERSONAL DEVELOPMENT</a><br>
		      <a href="#">SPORTS</a><br>
		      <a href="#">TECHNOLOGY</a><br>
		      <a href="#">OTHER</a>  

			</div>

	</div>
</header>
 -->

<!--  <div>
 	
 	<img src="http://localhost:8080/MAINPROGRAM/home.jpg" height="430px" width="100%">
 </div> -->

<!-- 
<div class="card">
  <img src="file:///C:/xampp/htdocs/MAINPROGRAM/Project.zip/Chetan%20Bhagat/The%20girl%20in%20room%20105.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>John Doe</b></h4> 
    <p>Architect & Engineer</p> 
  </div>
</div>
 -->






 <h1>Popular books</h1>
<div class="grid-container">


<?php 

$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'novel');

	//  if($con){
	//  	echo "connection succussful";
 // }else{
	// 	echo "no connection";
	// }

	$query = " SELECT  `book_id`,`book_img`,`book_name`, `b_author`, `price`, `imbdrating` FROM `book` order by book_id ASC ";

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

	