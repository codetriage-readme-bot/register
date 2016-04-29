<?php
//Global variable to store alert div
$alert = ''; 

//When submit button pressed
if(isset($_POST['submit'])){
   $name = $_POST['name']; 
   //EMAIL MUST BE UNIQUE
   $email = $_POST['email']; 
   $password = $_POST['password']; 

   //Hash user password
   $password = password_hash($password, PASSWORD_DEFAULT); 

   //Make query (user id auto increments)
   $q = "INSERT INTO `teachers` (user_name , user_email , user_pass) VALUES (:name, :email, :password)"; 
   $query = $db->prepare($q);
   $results = $query-> execute(array(
         ":name" => $name,
         ":email" => $email,
         ":password" => $password

      ));

//If query is successful user is signed up and displays success div
   if($results){
      $alert = '<div class="alert alert-success" role="alert"> You have been successfully signed up!</div>';

   }
//If query is unsuccessful display failure div - Usually due to email already existing. 
   else{
      $alert = '<div class="alert alert-danger" role="alert"> Oops there was a problem. That email may already exist!</div>';

   }
}
?>