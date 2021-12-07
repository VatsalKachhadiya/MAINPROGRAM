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



<div style="margin-left: 20px;">

	<h3>MODIFY OR DELETE</h3>
	<!-- <div>
				
			<div class="search-container" style="float: left; margin-top: 10px;">

				  <form action="#BOOK.php" >
				  		
				    	<input type="text" placeholder="BOOK NAME" name="search" autocomplete="off" size="40">
				    	<button type="submit" >SEARCH</button>
				    	
				  </form>

			</div>
	</div> -->

</div>


<center>
<br>
<table border="1" style="table-layout: auto; width: 500px; margin-bottom: 100px; border-collapse: collapse; border:2px solid black; padding: 3px; text-align: center;">

<tr>
	<th>AUTHOR ID</th>
	<th>AUTHOR NAME</th>
	<th>AUTHOR IMAGE</th>
	<th>EMAIL ID</th>
	<th>DESCRIPTION</th>		
	<th>MODIFIED BY</th>	
	<th>MODIFY</th>
	<th>DELETE</th>
</tr>
<?php
	 $con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"novel");
	$query="select * from author";
	$cmd=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($cmd))
	{?>
		<tr>
			<td><?php echo $row['a_id'] ?> </td>
			<td><?php echo $row['a_name'] ?> </td>
			<td><?php echo $row['a_img'] ?> </td>
			<td><?php echo $row['a_email'] ?> </td>
			<td><?php echo $row['description'] ?> </td>
			<td><?php echo $row['lastmodify_adminname'] ?> </td>
		    <td><a href="authorupdate.php?id=<?php echo $row['a_id']; ?>">update</a></td>
			<td><a href="authordelete.php?id=<?php echo $row['a_id']; ?>">delete</a> </td> 
		</tr>
	<?php } 
?>
</table>
</center>











</body>
</html>