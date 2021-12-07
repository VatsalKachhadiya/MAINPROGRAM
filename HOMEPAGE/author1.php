<?php

session_start();

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

				<!-- search box -->

					<div class="search-container" style="float: right;">

				  <form action="searchpage.php" method="post">
				  		<button type="submit" name="submit-search">SEARCH</button>
				    	<input type="text" placeholder="BOOK OR AUTHOR NAME" name="search" autocomplete="off">
				    	
				  </form>

				</div>

				<!-- <div class="container10" style="float: right; padding: 6px;  margin-top: 8px;  margin-right: 16px; font-size: 17px; ">

      				<button type="button" class="cancelbtn">      	
		  	 			<a href="#" style="text-decoration: none; color: black;"><?php //echo  $_SESSION['username']; ?></a>
     				</button>

      				<button type="button" class="newadmin" name="#">      	
		  				<a href="logout.php" style="text-decoration: none; color: black;">LOGOUT</a>
      				</button>

   				 </div> -->
		</nav>	

	</div>
<!-- second header starts -->
	<div class="container2">

		<ul class="ul1">

		  <li style="margin-left: 20px">
		  	<a href="/MAINPROGRAM/HOMEPAGE/home1.php">HOME</a>
		  </li>

		  <li>
		  	<a href="/MAINPROGRAM/HOMEPAGE/newarrivals1.php">NEW ARRIVALS</a>
		  </li>

		 <!--  <li class="dropdown">
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
		  	<a href="author1.php" class="dropbtn">AUTHORS</a>

		  </li>

		  <li style="float: right;" class="dropdown">
		  	 <a href="/MAINPROGRAM/SIGNUP/SIGNUP%20AS%20CUSTOMER/signup_customer.php">SIGNUP</a>
			
		  </li>	


		  <li style="float: right;" class="dropdown">

		  	<a href="javascript:void(0)" class="dropbtn">LOGIN</a>
		  	<!-- <a href="http://localhost:8080/MAINPROGRAM/signup.php">SIGNUP</a> -->
			<div class="dropdown-content">
		      <a href="/MAINPROGRAM/LOGIN/LOGIN%20AS%20CUSTOMER/login_customer.php">CUSTOMER</a>
		      <a href="/MAINPROGRAM/LOGIN/LOGIN%20AS%20ADMIN/login_admin.php">ADMIN</a>		     
		    </div>

		  </li>	


		  <!-- <li style="float: right;">
		  	<a href="http://localhost:8080/MAINPROGRAM/login.php">LOGIN</a>
		  </li>	 -->	  

		</ul>

	</div>

</header>




 <h1>Featured authors</h1>
<div class="grid-container">




<?php 

$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'novel'); 

	//  if($con){
	//  	echo "connection succussful";
 // }else{
	// 	echo "no connection";
	// }

	$query = " SELECT `a_id`,`a_img`,`a_name` FROM `author` order by a_id ASC ";

	$queryfire = mysqli_query($con, $query);

 $num = mysqli_num_rows($queryfire);


 if($num > 0){
	 while($product = mysqli_fetch_array($queryfire)){
			?>

  <div class="grid-item">
  	

<div class="card" style="margin-bottom: 40px;">

  <img src=" <?php echo "authors/".$product['a_img'];  ?> " alt="Avatar" style="width: 200px; height: 200px;" ><br>

	<p style="margin: 1px; padding: 1px; font-size: 18px"> <?php echo strtoupper($product['a_name']);  ?>   </p><br>

  <a style="text-decoration: none; color: white;" href="authordetail.php?id=<?php echo $product['a_id']; ?>" ><button>DETAILS</button></a>
</div>

  </div> 
 

<?php

}
}
?> 


</div>


</body>
</html>
	
