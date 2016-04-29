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
//Update and sign out Meeting script 
include("inc/update_meeting.php");
?>
<h1 class ="text-center title">Book Your Meeting </h1>
<p class="lead text-center meet-warn">Please remind attendees that if they are staying after the meeting they need to sign in manually.</p>
<?php echo $alert;?> 
<div class="sign text-center">
  <!-- Update meeting form -->
    <form method="post" >
      <label for="update_room">Room </label>
      <input type="text" class="form-control" name="update_room" value="<?php echo $_SESSION['meet_room'];?>" required/>
       <div class="form-group">
            <label for="update_members">Members</label>
            <textarea class="form-control" rows="5" name="update_members"><?php echo $_SESSION['meet_memb'];?></textarea>
        </div>
           <!-- Update button-->
          <input type="submit" class="btn btn-success reg-login touch-button" name="update_meet" value="Update"></input>
         </form>
         <!-- Sign out button-->
         <form method="post">
          <input type="submit" class="btn btn-danger reg-login touch-button" name="delete_meet" value="Sign Out"></input>
        </form>
     
      
  </div> 


  
</body>
</html>