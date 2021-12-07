<?php 
session_start();


 $con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"novel");

$bill_no=$_GET['bill_no'];
 $adminname=$_SESSION['username'];
$yes="yes";

$query="UPDATE bill SET confirm_adminname='$adminname' , deliverydone='$yes' WHERE bill_no=$bill_no; ";
 		$cmd=mysqli_query($con,$query);

 		// if ($cmd) {
 		// 	echo "success"; 
 		// }


 		header("location:home_admin.php");
?>