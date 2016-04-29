<?php

// -------------------------------- This file is to be used for logging the user in -------------------------------- 
//Incorrect login alert variable
$login_alert = "";

//When the login button is pressed
if(isset($_POST['login'])){
	$email = $_POST['log_email']; 
	$password = $_POST['log_password']; 


   //Select query use email to identify user
	$stmt = $db->prepare("SELECT * FROM `teachers` WHERE user_email = '$email'");  
	$stmt->execute();
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
   $count = $stmt -> rowCount(); 
   $all = $stmt->fetchAll();
   
  
//Row count should be one if successful
  if($count > 0) {
      //Set session variables
      $_SESSION["id"] = $all[0]['user_id'];
      $_SESSION["type"] = $all[0]['user_type'];

   // Check password

      //Store user password into hasg
      $hash = $all[0]['user_pass'];
      //verify user password using PDO password_verify
      if (password_verify($password, $hash)) {

         //If correct and user is admin head to the admin dashboard
       if( $_SESSION["type"] == "admin"){
            header('Location: admin_dash.php');
         }
         //If correct and user is not admin head to dashboard
         else{         
         header('Location: dashboard.php');  
         }  

   } else {
         //Display alert box if user is incorrect 
         $login_alert = '<div class="alert alert-danger text-center" role="alert"> The email or password is incorrect</div>';         
      }
   }

   	
            
   	}

   	
   	
 
?>