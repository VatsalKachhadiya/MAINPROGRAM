<?php 
session_start();


 $con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"novel");




	
if(isset($_POST['submit']))
{
	$id1=$_GET['id'];
//	$id=$_POST['book_id'];
	$name=$_POST['a_name'];
	$email=$_POST['a_email'];
	$description = $_POST['description'];

	 $adminname=$_SESSION['username'];
	 $_SESSION['update']="author details updated successfully";



// file
$file = $_FILES['image'];
$filename = $_FILES['image']['name'];
// $fileerror = $_FILES['image']['error'];
$filetmpname = $_FILES['image']['tmp_name'];
$filetype = $_FILES['image']['type'];
 // $fileext = explode('.', $filename);
 //   $fileactualext = strtolower($filename);
   // $allowed = array('jpg','jpeg' );
   


//



	if (isset($name)) {
		$query="UPDATE author SET a_name='$name' WHERE a_id=$id1; ";
 		$cmd=mysqli_query($con,$query);
	 	if ($cmd) {		
	
	 		// echo "update name successful<br>";
	 	}
	 }
	 if (isset($email)) {
		$query="UPDATE author SET a_email='$email' WHERE a_id=$id1; ";
 		$cmd=mysqli_query($con,$query);
	 	if ($cmd) {		
	
	 		// echo "update author successful<br>";
	 	}
	 }
	
	 if (isset($filename)) {
		$query="UPDATE author SET a_img='$filename' WHERE a_id=$id1; ";
 		$cmd=mysqli_query($con,$query);

 		 $filedestination = 'C:\xampp\htdocs\MAINPROGRAM\HOMEPAGE\authors/'.$filename;
  				 move_uploaded_file($filetmpname, $filedestination);


	 	if ($cmd) {		
	
	 		// echo "update image successful<br>";
	 	}
	 }
	 if (isset($description)) {
		$query="UPDATE author SET description='$description' WHERE a_id=$id1; ";
 		$cmd=mysqli_query($con,$query);
	 	if ($cmd) {		
	
	 		// echo "update description successful<br>";
	 	}
	 }
	 if (isset($_POST['submit'])) {
		$query="UPDATE author SET lastmodify_adminname ='$adminname' WHERE a_id=$id1; ";
 		$cmd=mysqli_query($con,$query);
	 	if ($cmd) {		
	
	 		// echo "update admin successful<br>";
	 	}	
	}
	
	// $query="UPDATE book SET book_name='$name', b_author='$author', b_publisher ='$publisher',price='$price',genre='$genre',imbdrating='$imbd_rating',book_img='$image',description='$description',totalavailable_quantity='$available_quantity',lastmodify_adminname='$adminname' WHERE book_id='$id1'; ";
	// $cmd=mysqli_query($con,$query);

	// if ($cmd) {		
	
	// echo "update successful";
 // 	}
	//echo "book updated successfully";

	
}


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
	<link rel="stylesheet" type="text/css" href="/MAINPROGRAM/SIGNUP/signup.css">
	<title>SIGNUP FOR ADMIN</title>

</head>

<body>

<header class="header1">

	<div class="container1">	

		<nav class="nav1">	

				<img class="logo" src="/MAINPROGRAM/HOMEPAGE/LOGO/bookmart.jpg" height="80px" width="110px">
				<!-- search box -->
				


				<div class="" style="float: right; padding: 6px;  margin-top: 8px;  margin-right: 30px; font-size: 17px; ">

      				<button type="button" class="abs" style=" font-size: 15px; text-align:center; ">      	
		  	 			<a href="#" style="text-decoration: none; color: black;">  <?php echo "ADMIN'S NAME = ".$_SESSION['username']; ?></a>
     				</button>

      				
   				 </div> 

		</nav>	

	</div>
<!-- second header starts -->
	<div class="container2">

		<ul class="ul1">

		  <li class="dropdown">
		  	 <a href="http:/MAINPROGRAM/LOGIN/LOGIN%20AS%20ADMIN/authormodify.php">MODIFY AUTHOR</a>
		
		  </li>	

		</ul>

	</div>

</header>
<?php
//  if($con){
// echo" connection successful";
// }else{
//   echo " no connection"; 
//   }
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

<!-- update -->
<center>
<h1> Update Author</h1>
<form method="post" action="" enctype="multipart/form-data">


AUTHOR ID<label type="number" name="book_id"><?php echo " = ".$id1;?></label>
<br><br>
AUTHOR NAME <input type="text" name="a_name" value="<?php echo $row['a_name']; ?>  " autocomplete="off">
<br><br>
AUTHOR EMAIL <input type="text" name="a_email" value="<?php echo $row['a_email'] ?> "  autocomplete="off">
<br><br>
AUTHOR IMAGE <input type="file" name="image" value="<?php echo "/MAINPROGRAM/HOMEPAGE/authors/".$row['a_img']; ?>" autocomplete="off">
<!-- value="<?php //echo  "books/".$row['book_img'] ?>" -->
<br><br>
DESCRIPTION <textarea class="i User" type="textarea"  name="description" rows="6" cols="8" autocomplete="off"><?php echo $row['description'] ?> 
	</textarea>
	<!-- value="<?php //echo $row['description'] ?> " -->
<br><br>

<input type="submit" name="submit" value="submit">
</form></center>

<?php
}
?>
<?php
  	if(isset($_SESSION["update"])){
  	
	?><h2> <?php echo $_SESSION["update"];?></h2>
	<?php
	}
?>




</body>
</html>
<?php  
	unset($_SESSION["update"]);
 ?>