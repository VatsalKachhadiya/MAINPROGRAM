<?php

 session_start();

$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'novel');

// if($con){
// echo" connection successful";
// }else{
// echo " no connection"; 
// }

if(isset($_POST['submit']))
    {
$grand_total=$_GET['grand_total'];
$c_username=$_SESSION['username'];

$q="select * from customer where c_username='$c_username'";
   $queryfire = mysqli_query($con, $q);
   $product = mysqli_fetch_array($queryfire);

  $customer = $product['c_id'];


$rname = $_POST['rname'];
$raddress = $_POST['raddress'];
$rphoneno = $_POST['rphoneno'];
$state = $_POST['state'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
 $date = date('Y-m-d');


// echo "<br>".$rname;

// echo "<br>".$raddress;

// echo "<br>".$rphoneno;

// echo "<br>".$state;

// echo "<br>".$customer;

// echo "<br>".$customer;

// echo "<br>".$grand_total."<br>";

// echo $date;


  $qy="insert into bill(c_id , receivers_name , receivers_address , receivers_phoneno , buying_date , grand_total , state , city ,  pincode ) values ('$customer','$rname','$raddress','$rphoneno','$date','$grand_total','$state','$city','$pincode')";
  $cmd = mysqli_query($con,$qy);


  $qy_maxbill="select MAX(bill_no) from bill where c_id = '$customer' ";
  $cmd1 = mysqli_query($con,$qy_maxbill);
  $result1 = mysqli_fetch_array($cmd1);
  // print_r($result1);


  $qy_bill="select * from bill where c_id = '$customer' && bill_no = '$result1[0]' ";
  $cmd11 = mysqli_query($con,$qy_bill);
  $result11 = mysqli_fetch_array($cmd11);
  // print_r($result11);

  $qy1="select * from cart where c_id = '$customer' ";
  $cmd2=mysqli_query($con,$qy1);
  while ($result2 = mysqli_fetch_array($cmd2)) {

  	$billno=$result11[0];
  	$book_id=$result2['book_id'];
  	$p_quantity=$result2['p_quantity'];
  	$amount=$result2['amount'];
  	
  	$qy2="insert into bill_book(bill_no,book_id,p_quantity,amount)values('$billno','$book_id','$p_quantity','$amount')";
   $cmd3=mysqli_query($con,$qy2);
  	 // print_r($cmd3);

  }
  

   $qy3="delete from cart WHERE c_id = '$customer' ";
   $cmd4=mysqli_query($con,$qy3);



   $qy4="select * from bill_book where bill_no = $result11[0]";
   $cmd5=mysqli_query($con,$qy4);
   while($result12=mysqli_fetch_array($cmd5))
      {
      	$quantity=$result12['p_quantity'];
      	$id=$result12['book_id'];
      	$qy5="update book set totalavailable_quantity = totalavailable_quantity - $quantity WHERE book_id ='$id'";
       $cmd6=mysqli_query($con,$qy5);
       //print_r($cmd6);
      }

      unset($_SESSION['checkout']);
   header("location:invoice.php");

}

?>