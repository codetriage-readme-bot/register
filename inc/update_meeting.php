<?php 
//Alert box variable 
$alert ="";

//When update meeting is pressed
if(isset($_POST['update_meet'])){
  $update_room = $_POST['update_room']; 
  $update_memb = $_POST['update_members']; 

//Query to update meeting to form data
 $q = "UPDATE `meeting` SET meet_room = :meet_room, meet_memb = :meet_memb WHERE user_id = :user_id"; 
   $query = $db->prepare($q);
      $results = $query-> execute(array(
        ":user_id" => $_SESSION['id'],
        ":meet_room" =>  $update_room,
        ":meet_memb" => $update_memb       

      ));

      //If update successful display alert and set session variables
      if($results){
         $_SESSION['meet_room']=$update_room;
        $_SESSION['meet_memb']=$update_memb;
       
        $alert = '<div class="alert alert-success text-center" role="alert"> Details Updated!</div>';
      }
      //if update unsuccessful display failure alert
      elseif (!$results) {
       $alert = '<div class="alert alert-danger text-center" role="alert"> Oops there was a problem updating your location.</div>';

      }

}

//Sign Out

//set session id into variable
$ses = $_SESSION["id"]; 
//When sign out meeting button pressed
if(isset($_POST['delete_meet'])){

//Delete meeting fro database
  $sql = "DELETE FROM `meeting` WHERE user_id= :id ";
  $query = $db->prepare( $sql );
    $query->execute( array( ":id" => $ses ) );

//If delete successful head to ./meeting.php
    if($query){
      header('Location: ./meeting.php');
    }
}
 ?>