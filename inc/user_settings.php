<?php 
//When save button pressd
if(isset($_POST['save'])){
  $name = $_POST['name']; 
  $email = $_POST['email'];
  $car = $_POST['registration'];
//Update teachers table
   $q = "UPDATE `teachers` SET 
   							user_name = :user_name, 
   							user_email = :user_email, 
   							user_car = :user_car
             
            WHERE user_id = :user_id"; 
   $query = $db->prepare($q);
      $results = $query-> execute(array(
        ":user_id" => $_SESSION['id'],
        ":user_name" => $name,
        ":user_email" => $email,
        ":user_car" => $car

         

      ));
//Display alerts
      if($results){
       $alert = '<div class="alert alert-success" role="alert">Your profile has been updated.</div>'; 
      }
      elseif (!$results) {
       $alert = '<div class="alert alert-danger" role="alert">There was a problem updating your settings</div>';

      }
}

 ?>