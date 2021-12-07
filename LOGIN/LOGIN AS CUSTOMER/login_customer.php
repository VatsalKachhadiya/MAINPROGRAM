
<?php
session_start();
unset($_SESSION['username']);



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

		</ul>

	</div>

</header>

<!-- LOGIN STARTS -->

<h2 style="margin-left: 10px;">Login Form For Customer</h2>
<?php

	if (isset($_GET['id'])) {
		$id1=$_GET['id'];

	}else{
	$id1=0;
	}


	if ($id1==0) {
		?>
		<form class="login" action="validation_customer.php" method="post">
			<?php
	}else{
?>
<form class="login" action="validation_customer.php?id=<?php echo $_GET['id']; ?>" method="post">
<?php
}
?>


<?php

?>
	<!-- div for login form -->
	<div class="container4">

	    <label>
	    	<b>Username</b>
	    </label>
	    <input class="i User" type="text" placeholder="Enter Username" name="user" autocomplete="off" required><br>

	    <label for="psw">
	    	<b>Password</b>
	    </label>
	    <input class="i psw" type="password" placeholder="Enter Password" name="pass" autocomplete="off" required><br>   

	    <button class="loginbtn" type="submit">Login</button>
	    
	</div>

	<p><a href="/MAINPROGRAM/SIGNUP/SIGNUP%20AS%20CUSTOMER/signup_customer.php">Click here</a> to create a new account</p>

	<div class="container5" style="background-color:#f1f1f1">

	    <button type="button" class="cancelbtn"><a href="/MAINPROGRAM/LOGIN/LOGIN%20AS%20CUSTOMER/login_customer.php" style="text-decoration: none; color: white;">Cancel</a></button>

	</div>
	<div>

<?php
  	if(isset($_SESSION["ans"])){
  	
	?><h2> <?php echo $_SESSION["ans"];?></h2>
	<?php
	}
?>
</div>

</form>


</body>
</html>

<?php
unset($_SESSION["ans"]);
?>