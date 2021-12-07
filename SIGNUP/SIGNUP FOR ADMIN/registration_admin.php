<?php

session_start();

$con = mysqli_connect('localhost','root');
// if($con){
// echo" connection successful";
// }else{
// echo " no connection"; 
// }

mysqli_select_db($con, 'novel');
$user = $_POST['user'];
$pass = $_POST['pass'];
$adminname=$_SESSION['username'];


$q = " select * from admin where admin_username = '$user' || admin_password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION["registrationsuccessful"] = "username and password already taken";
   header('location:/MAINPROGRAM/SIGNUP/SIGNUP%20FOR%20ADMIN/signup_admin.php');
}else{

  $qy= " insert  into admin(admin_username , admin_password , admin_record_inserted) values ('$user' , '$pass' , '$adminname') ";
  mysqli_query($con, $qy);
 $_SESSION["registrationsuccessful"] = "Registration of admin successful";
  header('location:/MAINPROGRAM/SIGNUP/SIGNUP%20FOR%20ADMIN/signup_admin.php');
}



?>
