<?php 

session_start();

$alert=""; 
//Connect to database
require('inc/connection.php'); 
//head and navbar
include("inc/header.php");
//Sign out and update script
include("inc/sign_out.php");
//Login nav bar
include("inc/logged_in_nav.php");



?>
 		</div> <!-- nav bar container fluid-->
	</nav> <!-- nav bar -->

	<h1 class ="text-center">You have been signed in <?php echo $_SESSION['name'];?>  </h1>
	

		<div class="sign text-center">
			<!--Sign out button-->
			<form method="post" >			
				<input type="submit" class="btn btn-danger reg-login touch-button" name="sign_out" value="Sign Out"></input>
			</form>
			<br/ >

			<p class="lead text-center">Update Your location </p>
			<!--Update form -->
			<form method="post" >
				<label for="room">Room </label>
				<input type="text" class="form-control" name="room" placeholder="Room" required/>
				<input type="submit" class="btn btn-success reg-login touch-button" name="update" value="Update"></input>
			</form>

			<!-- alert box-->
			<?php echo $alert?>
	</div> 


	

	


	
</body>
</html>