<?php 
error_reporting(E_ALL);
$ses = $_SESSION["id"]; 
if(isset($_POST['sign_out'])){

//delete from signed_in
$date = date("d-m-Y");
$time = date("h:i:sa");
	
	$sql = "DELETE FROM `signed_in` WHERE user_id= :id ";
	$query = $db->prepare( $sql );
    $query->execute( array( ":id" => $ses ) );

    if($query){
      $_SESSION['in'] = 'false'; 
    	header('Location: dashboard.php');
    }
   	
 //Add to signed out 
  $q = "INSERT INTO `signed_out` (user_id , user_name, user_registration, user_date, user_time) 
    VALUES (:user_id, :name,  :registration, :date, :time)"; 
   $query = $db->prepare($q);
      $results = $query-> execute(array(
        ":user_id" => $_SESSION['id'],
        ":name" => $_SESSION['name'],
         ":registration" => $_SESSION['car'],
         ":date" => $date,
         ":time" => $time

      )); 	
} 

//Update user location

if(isset($_POST['update'])){

  $room = $_POST['room']; 

   $q = "UPDATE `signed_in` SET user_room = :user_room WHERE user_id = :user_id"; 
   $query = $db->prepare($q);
      $results = $query-> execute(array(
        ":user_id" => $_SESSION['id'],
        ":user_room" => $room,

      ));

      if($results){
        $alert = '<div class="alert alert-success" role="alert"> Location Updated!</div>';
      }
      elseif (!$results) {
       $alert = '<div class="alert alert-danger" role="alert"> Oops there was a problem updating your location.</div>';

      }
}


?>