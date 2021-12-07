<?php

session_start();


 if(!isset($_SESSION['username'])){


 header('location:/MAINPROGRAM/LOGIN/LOGIN%20AS%20ADMIN/login_admin.php');
 }

?>

<!DOCTYPE html>

<html>

<head>

	<link rel="stylesheet" type="text/css" href="/MAINPROGRAM/HOMEPAGE/home1.css">
	<link rel="stylesheet" type="text/css" href="/MAINPROGRAM/LOGIN/login.css">
	<title>ADD TITLE</title>

</head>


<body>

<header class="header1">

	<div class="container1">	

		<nav class="nav1">	

				<img class="logo" src="/MAINPROGRAM/HOMEPAGE/LOGO/bookmart.jpg" height="80px" width="110px">

				<!-- search box -->

					
				<div class="container10" style="float: right; padding: 6px;  margin-top: 8px;  margin-right: 30px; font-size: 17px; ">

      				<button type="button" class="cancelbtn1" style=" font-size: 15px; text-align:center; ">      	
		  	 			<a href="#" style="text-decoration: none; color: black;"> <?php echo "ADMIN'S NAME = ".$_SESSION['username']; ?></a>
     				</button>

      				
   				 </div> 
		</nav>

	</div>
<!-- second header starts -->
	<div class="container2">

		<ul class="ul1">

		  <li style="margin-left: 20px">
		  	<a href="/MAINPROGRAM/LOGIN/LOGIN%20AS%20ADMIN/home_admin.php">ADMIN PAGE</a>
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

<div style="margin-left: 20px; margin-bottom: 50px;">

<form method="post" action="authoradding.php" enctype="multipart/form-data">
	<h1>ADD A NEW AUTHOR</h1>
	<div>
				
		<label for="Name">
	    	<b>NAME</b>
	    </label>

	    <input class="i User" type="text" placeholder="Enter Author Name" name="Name" autocomplete="off" required><br>

	    <label for="image">
	    	<b>IMAGE</b>
	    </label>

	    <input class="i User" type="file" placeholder="Enter Author image" name="image" autocomplete="off" required><br>

		<label for="email">
	    	<b>EMAIL ID</b>
	    </label>

	    <input class="i User" type="email" placeholder="Enter Author Email" name="email" autocomplete="off" required><br>

	
		<label for="description">
	    	<b>DESCRIPTION</b>
	    </label>

	    <textarea class="i User" type="textarea" placeholder="Enter Author Description" name="description" rows="6" autocomplete="off">
	</textarea><br>
	
		<button class="loginbtn" type="submit">ADD AUTHOR</button>
	    

	</div>

<div>

<?php
  	if(isset($_SESSION["authoradd"])){
  	
	?><h2> <?php echo $_SESSION["authoradd"];?></h2>
	<?php
	}
?>
<!-- <?php
  	//if(isset($_SESSION["erroruploading"])){
  	
	?><h2> <?php //echo $_SESSION["erroruploading"];?></h2>
	<?php
	
?>
<?php
  	//if(isset($_SESSION["extension"])){
  	
	?><h2> <?php //echo $_SESSION["extension"];?></h2>
	<?php
	
?> -->

  </div>


</form>
</div>



<!-- phpcode -->






</body>
</html>
<?php
unset($_SESSION["authoradd"]);
?>