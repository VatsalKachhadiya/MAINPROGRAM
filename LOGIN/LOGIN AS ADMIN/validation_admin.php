<?php

session_start();


$con = mysqli_connect('localhost','root');
// if($con){
// 	echo" connection successful";
// }else{
// 	echo " no connection"; 
// }

mysqli_select_db($con, 'novel');


 $name = $_POST['user'];
$pass = $_POST['pass'];


 $q =" select * from admin where admin_username = '$name' && admin_password = '$pass' ";


 $result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	
	 $_SESSION['username'] = $name;
	header('location:/MAINPROGRAM/LOGIN/LOGIN%20AS%20ADMIN/home_admin.php');


}else{
	$_SESSION['ans'] = "invalid username password";

	header('location:/MAINPROGRAM/LOGIN/LOGIN%20AS%20ADMIN/login_admin.php');
 }



?>



