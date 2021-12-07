<?php

session_start();


$con = mysqli_connect('localhost','root');
if($con){
	echo" connection successful";
}else{
	echo " no connection"; 
}

mysqli_select_db($con, 'novel');

$name = $_POST['user'];
$pass = $_POST['pass'];

if (isset($_GET['id'])) {
	$id1=$_GET['id'];

}else{
$id1=0;
}

$q = " select * from customer where c_username = '$name' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	
	$_SESSION['username'] = $name;

	if ($id1==0) {
		header('location:/MAINPROGRAM/LOGIN/LOGIN%20AS%20CUSTOMER/home_customer.php');
	}else{
		//$id1=$_GET['id'];
		?>
	<?php header('location:/MAINPROGRAM/LOGIN/LOGIN%20AS%20CUSTOMER/bookdetail_customer.php?id=' . $id1 );?>
	<?php
	}
}else{
$_SESSION['ans'] = "invalid username password";
	header('location:/MAINPROGRAM/LOGIN/LOGIN%20AS%20CUSTOMER/login_customer.php');
 }


?>