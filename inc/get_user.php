<?php
// ------------------------------------File gets the current user. Display on all pages where user is signed in------------------------------------


//Set user id using session id set when user logs in 
$user_id= $_SESSION['id'];

//Global name variable to hold user's name
$name = Null; 

//Global date and time variable to hold current times
$date = date("d-m-Y");
$time = date("h:i:sa");

//Globa User type variable to decide whether user is admin or user
$user_type = Null; 


$is_admin = false; 

$stmt = $db->prepare("SELECT * FROM `teachers` WHERE user_id= '$user_id' ");
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
$count = $stmt -> rowCount(); 

//If row count is greater than 0 fetch all rows (should be one as user id is unique value)
if($count > 0) {        
         $name = $stmt->fetchALL();  

        	}
else{
   		echo"There was a problem";
   	}
//Set session variables
$_SESSION['name']=$name[0]['user_name'];
$_SESSION['email']=$name[0]['user_email'];
$_SESSION['type']=$name[0]['user_type'];
$_SESSION['car']=$name[0]['user_car'];


?>