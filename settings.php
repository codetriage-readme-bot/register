<?php 

session_start();
//Connect to database
require('inc/connection.php'); 
//head and navbar
include("inc/header.php");
//Get the current user
include("inc/get_user.php");
//Logged in nav bar
include("inc/logged_in_nav.php");
//Update settings script
include("inc/user_settings.php");
//Alert box
$alert='';


?>
		

	<h1 class ="text-center">Hello <?php  echo $_SESSION['name'] ?></h1>

	<p class="lead text-center">Change your account settings</p>

	<div class="sign text-center">
    <!-- Update Settings form-->
			<form method="post" >
				<label for="name">Name </label>
				<input type="text" class="form-control" name="name" value="<?php echo $_SESSION['name']  ?>" required/>

				<label for="email">Email </label>
				<input type="email" class="form-control" name="email" value="<?php echo $_SESSION['email']  ?>" required/>
        

				<label for="car">Number Plate</label>
				<input type="text" class="form-control" name="registration" value="<?php echo $_SESSION['car']  ?>"/>

				<input type="submit" class="btn btn-success reg-login" name="save" value="Save"></input>

			</form>
<!-- Alert box-->
      <?php echo $alert ?>
   
	</div> 


	
</body>
</html>