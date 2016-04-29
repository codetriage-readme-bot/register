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
//New meeting script
include("inc/new_meeting.php");
//Alert variable
$alert = '';    
?>
	<h1 class ="text-center title">Book Your Meeting </h1>

	<p class="lead text-center">Meetings</p>

	<div class="sign text-center">
    <!-- Update meeting form --> 
			<form method="post" >
  				<label for="meet_room">Room </label>
  				<input type="text" class="form-control" name="meet_room" placeholder="Room" required/>
  				<div class="form-group">
    					<label for="meet_members">Attendeess (Please include your own name). </label>
    					<textarea class="form-control" rows="5" name="meet_members" placeholder="Seperate each name with a comma."></textarea>
  				</div>		
  				<input type="submit" class="btn btn-success reg-login touch-button" name="meet_sign_in" value="Sign in"></input>
			</form>
      <?php echo $alert;?> 
	</div> 


	
</body>
</html>