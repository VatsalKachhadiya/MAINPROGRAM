<?php
session_start();

$grand_total=$_GET['grand_total'];

if ($grand_total == 0) {
	$_SESSION['ans'] = "PLEASE INSERT BOOK IN THE CART";
header('location:cart.php');

}else{
	$_SESSION['checkout'] = "checkout";

header('location:checkout.php?grand_total='.$grand_total);
}
?>