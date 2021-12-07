<?php

session_start();


 if(!isset($_SESSION['username'])){


 header('location:/MAINPROGRAM/LOGIN/LOGIN%20AS%20CUSTOMER/login_customer.php');


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
	<link rel="stylesheet" type="text/css" href="/MAINPROGRAM/HOMEPAGE/card.css">
	<link rel="stylesheet" type="text/css" href="/MAINPROGRAM/HOMEPAGE/grid.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>BOOK MART</title>

</head>

<body>

<header class="header1">

	<div class="container1">	

		<nav class="nav1">	

				<img class="logo" src="/MAINPROGRAM/HOMEPAGE/LOGO/bookmart.jpg" height="80px" width="110px">
				<!-- search box -->
				


				<div class="container10" style="float: right; padding: 6px;  margin-top: 8px;  margin-right: 30px; font-size: 17px; ">

      				<button type="button" class="cancelbtn" style=" font-size: 15px; text-align:center; ">      	
		  	 			<a href="/MAINPROGRAM/LOGIN/LOGIN%20AS%20CUSTOMER/cart.php" style="text-decoration: none; color: black;"><?php echo $_SESSION['username']; ?>   <i class="fa fa-shopping-cart"></i></a>
     				</button>

      				
   				 </div> 

		</nav>	

	</div>

	<div class="container2">

		<ul class="ul1">

		  <li style="margin-left: 20px">
		  	<input type="button" id="printe" value="Print" onclick="javascript:printDiv('sample')" />
		  </li>


		</ul>

	</div>
</header>
<div style="margin-bottom: 100px;">
<?php

$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'novel');

	// if($con){
	//  	echo "connection succussful";
	//   }else{
	//  	echo "no connection";
 //  }
$c_username=$_SESSION['username'];

$q="select * from customer where c_username='$c_username'";
   $queryfire = mysqli_query($con, $q);
   $product = mysqli_fetch_array($queryfire);

   $customer = $product['c_id'];
   $name = $product['c_username'];
   $email = $product['c_email'];



  $qy_maxbill="select MAX(bill_no) from bill where c_id = '$customer' ";
  $cmd1 = mysqli_query($con,$qy_maxbill);
  $result1 = mysqli_fetch_array($cmd1);



  $qy_bill="select * from bill where c_id = '$customer' && bill_no = '$result1[0]' ";
  $cmd11 = mysqli_query($con,$qy_bill);
  $result11 = mysqli_fetch_array($cmd11);

  $bill_no = $result11['bill_no'];
  $receivers_name = $result11['receivers_name'];
  $receivers_address = $result11['receivers_address'];
  $receivers_phoneno = $result11['receivers_phoneno'];
  $payment_method = $result11['payment_method'];
  $buying_date = $result11['buying_date'];
  $grand_total = $result11['grand_total'];


?>
<CENTER><h3>TAKE A PRINTOUT OF THE BILL</h3></CENTER>
<div class='sample' id='sample'>
<CENTER><h1>BILL</h1></CENTER>
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
</div>

<!-- mail -->

<?php

$mailto = $email;
    $mailSub = "BOOK MART ->Bill no = ".$bill_no;
    $mailMsg = "<br>Receivers name = ".$receivers_name."<br>Buying date = ".$buying_date."<br>Payment method = ".$payment_method."<br>Grand total = ".$grand_total;
require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "sure.nishant@gmail.com";
   $mail ->Password = "pramodmuktanikita";
   $mail ->SetFrom("sure.nishant@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;


//
  

//

   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "wrong email id ";
   }
   else
   {
       echo "Bill Sent to your emailid";
   }






?>

</div>

</body>
</html>


