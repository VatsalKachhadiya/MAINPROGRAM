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
<form>

<?php

$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'novel');

	// if($con){
	//  	echo "connection succussful";
	//   }else{
	//  	echo "no connection";
 //  }

	
	$bill_no=$_GET['bill_no'];

	$qy_bill="select * from bill where bill_no = '$bill_no' ";
  $cmd11 = mysqli_query($con,$qy_bill);
  $result11 = mysqli_fetch_array($cmd11);

  $c_id = $result11['c_id'];
  $receivers_name = $result11['receivers_name'];
  $receivers_address = $result11['receivers_address'];
  $receivers_phoneno = $result11['receivers_phoneno'];
  $payment_method = $result11['payment_method'];
  $buying_date = $result11['buying_date'];
  $grand_total = $result11['grand_total'];



  $q="select * from customer where c_id='$c_id'";
   $queryfire = mysqli_query($con, $q);
   $product = mysqli_fetch_array($queryfire);

   $customer = $product['c_id'];
   $name = $product['c_username'];
   $email = $product['c_email'];





?>
<div class='sample' id='sample'>
<CENTER><h1>BILL INFO</h1></CENTER>
<div style="margin-left: 30px; margin-bottom: 10px; margin-top: 30px;">

	CUSTOMER ID<label type="text" name="customer_id"><?php echo " = ".$customer; ?></label>
	<br>
	CUSTOMER NAME<label type="text" name="customer_name"><?php echo " = ".$name; ?></label>
	<br>
	CUSTOMER EMAIL<label type="text" name="customer_email"><?php echo " = ".$email; ?></label>
	<br>

</div>


<div style="margin-left: 30px; margin-bottom: 10px; margin-top: 40px;">
<U><h3>RECEIVERS DETAILS</h3></U>
	BILL NO<label type="text" name="bill_no"><?php echo " = ".$bill_no; ?></label>
	<br><br>
	RECEIVERS NAME<label type="text" name="receivers_name"><?php echo " = ".$receivers_name; ?></label>
	<br><br>
	RECEIVERS ADDRESS<label type="text" name="receivers_address"><?php echo " = ".$receivers_address; ?></label>
	<br><br>
	RECEIVERS MOBILENO<label type="text" name="receivers_phoneno"><?php echo " = ".$receivers_phoneno; ?></label>
	<br><br>
	PAYMENT METHOD<label type="text" name="payment_method"><?php echo " = ".$payment_method; ?></label>
	<br><br>
	DATE<label type="text" name="buying_date"><?php echo " = ".$buying_date; ?></label>
	<br><br>

</div>



<center>
<table border="1" style="table-layout: auto; width: 500px;  margin-top: 50px; border-collapse: collapse; border:2px solid black; padding: 3px; text-align: center;">

<tr>
	<th>NOVEL NAME</th>
	<th>PRICE</th>
	<th>QUANTITY</th>
	<th>AMOUNT</th>
	
</tr>
<?php

	$query="select * from bill_book where bill_no='$bill_no'";
	$cmd=mysqli_query($con,$query);

	while($row=mysqli_fetch_array($cmd))
	{
			$query1="select * from book where book_id = $row[2]";
			$cmd13 = mysqli_query($con,$query1);
 			$result13 = mysqli_fetch_array($cmd13);




?>
		<tr>
			<td><?php echo $result13['book_name'] ?> </td>
			<td><?php echo $result13['price'] ?> </td>
			<td><?php echo $row['p_quantity'] ?> </td>
			<td><?php echo $row['amount'] ?> </td>
			
		</tr> 


	<?php } 
?>
</table>
<br>
GRAND TOTAL<label type="text" name="grand_total"><?php echo " = ".$grand_total; ?></label>
	<br><br>
</center>
</div><center>
<input style="padding: 5px;" type="submit" name="submit" value="DELIVER" formmethod="post" formaction="deliverydone.php?bill_no=<?php echo $bill_no; ?>">
</center>



</form>


<input type="button" id="printe" value="Print" onclick="javascript:printDiv('sample')" />
<script language="javascript" type="text/javascript">
        function printDiv(divID) 
    {
            var divElements = document.getElementById(divID).innerHTML;
            var oldPage = document.body.innerHTML;
 
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";
 
            window.print();
 
            document.body.innerHTML = oldPage;
        }
    </script>

</body>
</html>