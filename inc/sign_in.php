<?php
//Global alert variable to store alert div
$alert = ''; 

//When the sign in button is press
if(isset($_POST['sign_in'])){
  $room = $_POST['room']; 
  $registration = $_POST['registration'];

//Session variable for car registration number(allows it to display in sign out table)
  $_SESSION['car'] = $registration;

  try{

     $q = "INSERT INTO `signed_in` (user_id , user_name , user_room, user_registration, user_date, user_time) 
      VALUES (:user_id, :name, :room, :registration, :date, :time)"; 
     $query = $db->prepare($q);

      //user_id, date and time from getuser.php, included in the main dashboard.php file
        $results = $query-> execute(array(
          ":user_id" => $user_id,
          ":name" => $_SESSION['name'],
           ":room" => $room,
           ":registration" => $registration,
           ":date" => $date,
           ":time" => $time

        ));
        //If result is true head to signed_in.php and set session variable to true.
        if($results){
        header('Location: signed_in.php');
        $_SESSION['in'] ='true';      
       
      }
  }

//If there is an error display alert box. Error usually due to user already signed in.
  catch(Exception $e){
          $alert = '<div class="alert alert-danger" role="alert">You have already signed in. <a href="signed_in.php">Click to go to sign out page</a></div>';

 
}
}
?>