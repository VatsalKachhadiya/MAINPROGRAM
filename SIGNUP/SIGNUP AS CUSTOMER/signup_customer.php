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
	<title>SIGNUP PAGE</title>

</head>

<body>

<header class="header1">

	<div class="container1">	

		<nav class="nav1">	

				<img class="logo" src="/MAINPROGRAM/HOMEPAGE/LOGO/bookmart.jpg" height="80px" width="110px">
				<!-- search box -->
				<!-- <div class="search-container" style="float: right;">

				  <form action="#BOOK.php" >
				  		<button type="submit" >SEARCH</button>
				    	<input type="text" placeholder="BOOK NAME" name="search" autocomplete="off">
				    	
				  </form>

				</div> -->
		</nav>	

	</div>
<!-- second header starts -->
	<div class="container2">

		<ul class="ul1">

		  <li style="margin-left: 20px">
		  	<a href="/MAINPROGRAM/HOMEPAGE/home1.php">HOME</a>
		  </li>

		 <!--  <li>
		  	<a href="#news">NEW ARRIVALS</a>
		  </li>

		  <li class="dropdown">
		    <a href="javascript:void(0)" class="dropbtn">GENRE</a>

		    <div class="dropdown-content">
		      <a href="#">ADVENTURE</a>
		      <a href="#">ACTION</a>
		      <a href="#">BIOGRAPHIES AND AUTOBIOGRAPHIES</a>
		      <a href="#">BODY,MIND AND SPIRIT</a>
		      <a href="#">BUSINESS AND ECONOMY</a>
		      <a href="#">CHILDREN</a>
		      <a href="#">FOOD</a>
		      <a href="#">ENVIRONMENT AND GEOGRAPHY</a>
		      <a href="#">HISTORY</a>
		      <a href="#">MEDICINES</a>
		      <a href="#">MUSIC</a>
		      <a href="#">PARENTING AND FAMILY</a>
		      <a href="#">POLITICS</a>
		      <a href="#">LOVE STORY</a>
		      <a href="#">ENCYCLOPEDIA</a>
		      <a href="#">RELIGION AND SPIRITUALITY</a>
		      <a href="#">PERSONAL DEVELOPMENT</a>
		      <a href="#">SPORTS</a>
		      <a href="#">TECHNOLOGY</a>
		      <a href="#">OTHER</a>
		    </div>

		  </li>

		  <li class="dropdown">
		  	<a href="javascript:void(0)" class="dropbtn">AUTHORS</a>

		  	<div class="dropdown-content">
		      <a href="#">AMRITA PRITAM</a>
		      <a href="#">ARUNDHATI ROY</a>
		      <a href="#">CHETAN BHAGAT</a>		     
		    </div>

		  </li>
 -->
		  <li style="float: right;" class="dropdown">
		  	 <a href="/MAINPROGRAM/SIGNUP/SIGNUP%20AS%20CUSTOMER/signup_customer.php">SIGNUP</a>
		
		  </li>	


		  <li style="float: right;" class="dropdown">

		  	<a href="javascript:void(0)" class="dropbtn">LOGIN</a>
		  	<!-- <a href="http://localhost:8080/MAINPROGRAM/signup.php">SIGNUP</a> -->
			<div class="dropdown-content">
		      <a href="/MAINPROGRAM/LOGIN/LOGIN%20AS%20CUSTOMER/login_customer.php">CUSTOMER</a>
		      <a href="/MAINPROGRAM/LOGIN/LOGIN%20AS%20ADMIN/login_admin.php">ADMIN</a>		     
		    </div>

		  </li>	

		</ul>

	</div>

</header>

<!-- signup STARTS -->





<form class="signup" method="post" action="registration_customer.php" onsubmit="return validation()">
<!-- <?php //include('errors.php'); ?> 

 -->  	
  <div class="container6">

    <h1>SIGNUP AS CUSTOMER</h1>
    <p>Please fill in this form to create your account.</p>
    <hr>

	<label>
    	<b>Username</b>
    </label>
    <input class="i suser" type="text" placeholder="Enter Username" name="user" id="user" autocomplete="off"> 
	<span id="username" class="" style="color: red"> </span>
	<br><br>

    <label>
    	<b>Email</b>
    </label>
    <input class="i semail" type="text" placeholder="Enter Email" name="email" id="emails" autocomplete="off">
	<span id="emailids" class="" style="color: red"> </span>
	  <br><br>

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

		<button type="button" name="Cancel" value="Cancel" class="cancelbtn" autocomplete="off"><a href="/MAINPROGRAM/SIGNUP/SIGNUP%20AS%20CUSTOMER/signup_customer.php" style="text-decoration: none; color: white;">Cancel</a></button>
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
			var emails = document.getElementById('emails').value;





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


			if(emails == ""){
				document.getElementById('emailids').innerHTML =" ** Please fill the email field";
				return false;
			}
			if(emails.indexOf('@') <= 0 ){
				document.getElementById('emailids').innerHTML =" ** @ Position is invalid";
				return false;
			}

			if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
				document.getElementById('emailids').innerHTML =" ** dot(.) Position is invalid";
				return false;
			}




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
	session_destroy();
 ?>