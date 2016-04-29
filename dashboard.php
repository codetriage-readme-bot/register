<?php 
//Start Session
session_start();
//Connect to database
require('inc/connection.php'); 
//head and navbar
include("inc/header.php");
//Get the current user
include("inc/get_user.php");
//php sign in script
include("inc/sign_in.php");
//Include the logged in navbar
include("inc/logged_in_nav.php");


?>

	<!-- Title uses php session variable to display user's name-->
	<h1 class ="text-center title">Hello <?php  echo $_SESSION['name'] ?></h1>

	<p class="lead text-center">Please Sign In</p>

	<div class="sign text-center">
	<!-- Sign in form-->
			<form method="post" >
				<label for="room">Room </label>
				<input type="text" class="form-control" name="room" placeholder="Room" required/>
				<label for="car">Registration</label>
				<input type="text" class="form-control" name="registration" value="<?php  echo $_SESSION['car'] ?>"/>

				<input type="submit" class="btn btn-success reg-login touch-button" name="sign_in" value="Sign in"></input>

			</form>
			<!-- Display's failure alert-->
      <?php echo $alert;?> 
	</div> 


	
</body>
</html>