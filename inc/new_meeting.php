<?php 
//If meeting sign in button pressed
if(isset($_POST['meet_sign_in'])){
  $meet_room = $_POST['meet_room']; 
  $meet_names = $_POST['meet_members'];

  try{
    //Insert meeting into meeting table
     $q = "INSERT INTO `meeting` (user_id ,  meet_room, meet_memb) 
      VALUES (:user_id, :room, :members)"; 
     $query = $db->prepare($q);
        $results = $query-> execute(array(
          ":user_id" => $user_id,
           ":room" => $meet_room,
           ":members" => $meet_names
     ));

      if($results){
        //Create variables and head to meeting_in.php
        $_SESSION['meet_room']=$meet_room;
        $_SESSION['meet_memb']=$meet_names;
        header('Location: meeting_in.php');
      }
  }
  catch(Exception $e){
        //If sign in unsuccesful display alert
          $alert = '<div class="alert alert-danger" role="alert">You have already signed in. <a href="meeting_in.php">Click to go to sign out page</a></div>';
  }      
}
 ?>