<?php

session_start();


 if(!isset($_SESSION['username'])){


 header('location:http:/MAINPROGRAM/LOGIN/LOGIN%20AS%20ADMIN/login_admin.php');
 }

?>

<!DOCTYPE html>

<html>

<head>

	<link rel="stylesheet" type="text/css" href="/MAINPROGRAM/HOMEPAGE/home1.css">
	<title>book mart</title>

</head>


<body>

<header class="header1">

	<div class="container1">	

		<nav class="nav1">	

				<img class="logo" src="/MAINPROGRAM/HOMEPAGE/LOGO/bookmart.jpg" height="80px" width="110px">

				<!-- search box -->

					
				<div class="container10" style="float: right; padding: 6px;  margin-top: 8px;  margin-right: 30px; font-size: 17px; ">

      				<button type="button" class="cancelbtn" style=" font-size: 15px; text-align:center; ">      	
		  	 			<a href="#" style="text-decoration: none; color: black;"> <?php echo "ADMIN'S NAME = ".$_SESSION['username']; ?></a>
     				</button>

      				
   				 </div> 
		</nav>

	</div>
<!-- second header starts -->
	<div class="container2">

		<ul class="ul1">

		 <li class="dropdown" style="margin-left: 20px;">

		  	<a href="javascript:void(0)" class="dropbtn">BOOK</a>
		  	<!-- <a href="http://localhost:8080/MAINPROGRAM/signup.php">SIGNUP</a> -->
			<div class="dropdown-content">
		      <a href="/MAINPROGRAM/LOGIN/LOGIN%20AS%20ADMIN/add_book.php">ADD</a>
		      <a href="/MAINPROGRAM/LOGIN/LOGIN%20AS%20ADMIN/bookmodify.php">MODIFY</a>		     
		    </div>

		  </li>	
		  <li class="dropdown">

		  	<a href="javascript:void(0)" class="dropbtn">AUTHOR</a>
		  	<!-- <a href="http://localhost:8080/MAINPROGRAM/signup.php">SIGNUP</a> -->
			<div class="dropdown-content">
		      <a href="/MAINPROGRAM/LOGIN/LOGIN%20AS%20ADMIN/add_author.php">ADD</a>
		      <a href="/MAINPROGRAM/LOGIN/LOGIN%20AS%20ADMIN/authormodify.php">MODIFY</a>		     
		    </div>

		  </li>	


		 <li style="float: right;" class="dropdown">
		  	 <a href="/MAINPROGRAM/SIGNUP/SIGNUP%20FOR%20ADMIN/signup_admin.php">ADD ADMIN</a>
			
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



<center>
	<h1>Delivery details</h1>
<br>
<table border="1" style="table-layout: auto; width: 500px; margin-bottom: 100px; border-collapse: collapse; border:2px solid black; padding: 3px; text-align: center;">

<tr>
	<th>BILL NO</th>
	<th>INFO</th>
	
</tr>
<?php
	 $con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"novel");
	//  if($con){
 // echo" connection successful";
 // }else{
 // echo " no connection"; 
 // }
	$no="no";

	$query="select * from bill where deliverydone='$no'";
	$cmd=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($cmd))
	{?>
		<tr>
			<td><?php echo $row['bill_no'] ?> </td>
		    <td><a href="deliveryinfo.php?bill_no=<?php echo $row['bill_no']; ?>">info</a></td>
			 
		</tr>
	<?php } 
?>
</table>


</center>






</body>
</html>