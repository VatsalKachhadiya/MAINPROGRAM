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

<form method="post" action="booksadding.php" enctype="multipart/form-data">
	<h1>ADD A NEW BOOK</h1>
	<div>
				
		<label for="Name">
	    	<b>Name</b>
	    </label>

	    <input class="i User" type="text" placeholder="Enter Book Name" name="Name" autocomplete="off" required><br>

	    <label for="image">
	    	<b>image</b>
	    </label>

	    <input class="i User" type="file" placeholder="Enter Book image" name="image" autocomplete="off" required><br>

		<label for="author">
	    	<b>author</b>
	    </label>

	    <input class="i User" type="text" placeholder="Enter Book author" name="author" autocomplete="off" required><br>


		<label for="publisher">
	    	<b>publisher</b>
	    </label>

	    <input class="i User" type="text" placeholder="Enter Book publisher" name="publisher" autocomplete="off" required><br>

		<label for="price">
	    	<b>price</b>
	    </label>

	    <input class="i User" type="number" placeholder="Enter Book price" name="price" autocomplete="off" required><br>

		<label for="genre">
	    	<b>genre</b>
	    </label>

	    <input class="i User" type="text" placeholder="Enter Book genre" name="genre" autocomplete="off" required><br>

		<label for="imbd_rating">
	    	<b>imbd rating</b>
	    </label>

	    <input class="i User" type="number" placeholder="Enter Book imbd rating" name="imbd_rating" step="0.01" min="0" max="10" autocomplete="off" ><br>

		<label for="description">
	    	<b>description</b>
	    </label>

	    <textarea class="i User" type="textarea" placeholder="Enter Book description" name="description" rows="6" autocomplete="off">
	</textarea><br>
	
		<button class="loginbtn" type="submit">ADD BOOK</button>
	    

	</div>

<div>

<?php
  	if(isset($_SESSION["bookadd"])){
  	
	?><h2> <?php echo $_SESSION["bookadd"];?></h2>
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
unset($_SESSION["bookadd"]);
?>