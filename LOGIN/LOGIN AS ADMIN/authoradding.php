<?php

 session_start();

$con = mysqli_connect('localhost','root');
if($con){
echo" connection successful";
}else{
echo " no connection"; 
}

mysqli_select_db($con, 'novel');

$Name = $_POST['Name'];
$email = $_POST['email'];
$description = $_POST['description'];

$adminname=$_SESSION['username'];

// file
$file = $_FILES['image'];
$filename = $_FILES['image']['name'];
// $fileerror = $_FILES['image']['error'];
$filetmpname = $_FILES['image']['tmp_name'];
$filetype = $_FILES['image']['type'];
 // $fileext = explode('.', $filename);
 //   $fileactualext = strtolower($filename);
   // $allowed = array('jpg','jpeg' );
   


//
$q = " select * from author where a_name = '$Name' ";

$result = mysqli_query($con, $q);
// $fieldinfo = mysqli_fetch_field($result);

$num = mysqli_num_rows($result);

if($num == 1){


// 	while($row = $result->fetch_assoc()) {
//      $fieldinfo = $row["book_name"];
//      $bookno = $row["totalavailable_quantity"];
// }
	// $que = " update book set totalavailable_quantity = $bookno+$available_quantity , lastmodify_adminname = '$adminname' where book_name = '$fieldinfo'";
	// mysqli_query($con, $que);
	$_SESSION['authoradd'] = "author already inserted";
 header('location:/MAINPROGRAM/LOGIN/LOGIN%20AS%20ADMIN/add_author.php');
 
}
else{

 // $qy= " insert  into book( book_name ,	b_author , b_publisher , price , 	genre , imbdrating , book_img , description , totalavailable_quantity) values ('$Name' , '$author' , '$publisher' , '$price' , '$genre' , '$imbd_rating' , '$image' , '$description' , '$available_quantity')";

  

// 
  
   // if(in_array($fileactualext, $allowed)){

   		// if ($fileerror === 0) {

   			
   			
   				 $qy=" insert into author(a_name,a_img,a_email,description,lastmodify_adminname)values('$Name','$filename','$email','$description','$adminname')";
  				 mysqli_query($con, $qy);

  				 $filedestination = 'C:\xampp\htdocs\MAINPROGRAM\HOMEPAGE\authors/'.$filename;
  				 move_uploaded_file($filetmpname, $filedestination);


				$_SESSION['authoradd'] = "author added successfully";
  				 header('location:http:/MAINPROGRAM/LOGIN/LOGIN%20AS%20ADMIN/add_author.php');

   		// }else{
   			// $_SESSION['erroruploading'] = "error uploading image";
   // 		}

   // }else{
   // 	$_SESSION['extension'] = "only jpg and jpeg files can be uploaded";
   // }

}
?>