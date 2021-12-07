<?php 
session_start();

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
	<link rel="stylesheet" type="text/css" href="/MAINPROGRAM/SIGNUP/signup.css">
	<title>SIGNUP FOR ADMIN</title>

</head>

<body>

<header class="header1">

	<div class="container1">	

		<nav class="nav1">	

				<img class="logo" src="/MAINPROGRAM/HOMEPAGE/LOGO/bookmart.jpg" height="80px" width="110px">
				<!-- search box -->
				


				<div class="" style="float: right; padding: 6px;  margin-top: 8px;  margin-right: 30px; font-size: 17px; ">

      				<button type="button" class="abs" style=" font-size: 15px; text-align:center; ">      	
		  	 			<a href="#" style="text-decoration: none; color: black;">  <?php echo "ADMIN'S NAME = ".$_SESSION['username']; ?></a>
     				</button>

      				
   				 </div> 

		</nav>	

	</div>
<!-- second header starts -->
	<div class="container2">

		<ul class="ul1">

		  <li style="float: right;" class="dropdown">
		  	 <a href="/MAINPROGRAM/LOGIN/LOGIN%20AS%20ADMIN/home_admin.php">ADMIN PAGE</a>
		
		  </li>	

		</ul>

	</div>

</header>

<!-- signup STARTS -->





<form class="signup" method="post" action="registration_admin.php" onsubmit="return validation()">
<!-- <?php //include('errors.php'); ?> 
 -->  	
  <div class="container6">

    <h1>ADD A NEW ADMIN</h1>
    <p>Please fill in this form to create your account.</p>
    <hr>
	

	<label>
    	<b>Username</b>
    </label>
    <input class="i suser" type="text" placeholder="Enter Username" name="user" id="user" autocomplete="off"> 
	<span id="username" class="" style="color: red"> </span>
	<br><br>

   <!--  <label>
    	<b>Email</b>
    </label>
    <input class="i semail" type="text" placeholder="Enter Email" name="email" id="emails" autocomplete="off">
	<span id="emailids" class="" style="color: red"> </span>
	  <br><br> -->

    <label>
    	<b>Password</b>
    </label>
    <input class="i spwd" type="password" placeholder="Enter Password" name="pass"
    id="pass" autocomplete="off">
	<span id="passwords" class="" style="color: red"> </span>
	  <br><br>

    <label>
    	<b>Repeat Password</b>
    </label>
    <input class="i scpwd" type="password" placeholder="Repeat Password" name="conpass" id="conpass" autocomplete="off">
	<span id="confrmpass" class="" style="color: red"> </span>     
	 <br>


 	<div class="container7">

		<button type="button" name="Cancel" value="Cancel" class="cancelbtn" autocomplete="off"><a href="/MAINPROGRAM/SIGNUP/SIGNUP%20FOR%20ADMIN/signup_admin.php" style="text-decoration: none; color: white;">Cancel</a></button>
	 	<input type="submit" name="submit" value="signin" class="signupbtn" 	autocomplete="off">

	</div>

    <!-- <div class="container7">

      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn" name="submit" value="submit">Sign Up</button>

    </div> -->

  </div>

   <div>

<?php
  	if(isset($_SESSION["registrationsuccessful"])){
  	
	?><h2> <?php echo $_SESSION["registrationsuccessful"];?></h2>
	<?php
	}
?>

  </div>

</form>



<script type="text/javascript">
		

		function validation(){

			var user = document.getElementById('user').value;
			var pass = document.getElementById('pass').value;
			var confirmpass = document.getElementById('conpass').value;
			// var emails = document.getElementById('emails').value;





			if(user == ""){
				document.getElementById('username').innerHTML =" ** Please fill the username field";
				return false;
			}
			if((user.length <= 2) || (user.length > 20)) {
				document.getElementById('username').innerHTML =" ** Username lenght must be between 2 and 20";
				return false;	
			}
			if(!isNaN(user)){
				document.getElementById('username').innerHTML =" ** only characters are allowed";
				return false;
			}


			// if(emails == ""){
			// 	document.getElementById('emailids').innerHTML =" ** Please fill the email field";
			// 	return false;
			// }
			// if(emails.indexOf('@') <= 0 ){
			// 	document.getElementById('emailids').innerHTML =" ** @ Position is invalid";
			// 	return false;
			// }

			// if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
			// 	document.getElementById('emailids').innerHTML =" ** dot(.) Position is invalid";
			// 	return false;
			// }




			if(pass == ""){
				document.getElementById('passwords').innerHTML =" ** Please fill the password field";
				return false;
			}
			if(pass.length <= 7 ) {
				document.getElementById('passwords').innerHTML =" ** Passwords lenght must be greater than 8";
				return false;	
			}

			if(confirmpass == ""){
				document.getElementById('confrmpass').innerHTML =" ** Please fill the repeatpassword field";
				return false;
			}

			if(pass!=confirmpass){
				document.getElementById('confrmpass').innerHTML =" ** Password does not match ";
				return false;
			}
			
		}

	</script>


</body>
</html>
<?php  
	unset($_SESSION["registrationsuccessful"]);
 ?>