<?php

session_start();

$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'novel');
if($con){
echo" connection successful";
}else{
 echo " no connection"; 
 }


                                                                                            
$user = $_POST['user'];
$name = $_POST['email'];
$pass = $_POST['pass'];


// echo $user;
// echo $name;
// echo $pass;



$q = " select * from customer where c_username = '$user' || c_email = '$name' || password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	// echo "Invalid user and password";
	$_SESSION["registrationsuccessful"] = "username and password already taken";
   header('location:/MAINPROGRAM/SIGNUP/SIGNUP%20AS%20CUSTOMER/signup_customer.php');
}else{

  $qy= " insert  into customer(c_username ,
c_email , password) values ('$user' , '$name' , '$pass') ";
  mysqli_query($con, $qy);

  // echo "Insetred";
 $_SESSION["registrationsuccessful"] = "registration successful";
   header('location:/MAINPROGRAM/SIGNUP/SIGNUP%20AS%20CUSTOMER/signup_customer.php');
}



?>
