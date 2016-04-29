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

//Alert variable
$alert = ''; 

//When submit button pressed
if(isset($_POST['car_request'])){
   $user_id = $_SESSION['id'];
   $user_name =  $_SESSION['name'];
   $car_reg = $_POST['car_plate']; 
   $car_make = $_POST['car_make']; 
   $car_date_from = $_POST['car_date_from']; 
   $car_date_till = $_POST['car_date_till']; 

   //Make query (user id auto increments)
   $q = "INSERT INTO `cars` (user_id, user_name , car_reg , car_make, car_from, car_till) VALUES (:id, :name, :reg, :make, :car_from, :car_till)";
   $query = $db->prepare($q);
   $results = $query-> execute(array(
         ':id' => $user_id, 
         ':name'=> $user_name, 
         ':reg'=> $car_reg,
         ':make'=> $car_make,
         ':car_from'=> $car_date_from,
         ':car_till' => $car_date_till,

      ));

//If query is successful user is signed up and displays success div
   if($results){
      $alert = '<div class="alert alert-success" role="alert"> Your from has been succesfully submitted</div>';
   }
//If query is unsuccessful display failure div - Usually due to email already existing. 
   else{
      $alert = '<div class="alert alert-danger" role="alert"> Oops there was a problem.</div>';

   }
}

?>
	<h1 class ="text-center title">Overnight Cars</h1>

	<p class="lead text-center">If you are leaving a vehicle in overnight please use this form</p>

	<div class="sign text-center">
    <!-- Update meeting form --> 
			<form method="post" >
  				<label for="car_plate">Number Plate</label>
  				<input type="text" class="form-control" name="car_plate" placeholder="Number Plate" required/>

          <label for="car_make">Make of Vehicle</label>
          <input type="text" class="form-control" name="car_make" placeholder="E.G, Ford, Nissan, Toyota" required/>

          <label for="car_date_from">Start Date</label>
          <input type="date" class="form-control" name="car_date_from" required/>

          <label for="car_date_till">End Date</label>
          <input type="date" class="form-control" name="car_date_till" required/>
  				
  				<input type="submit" class="btn btn-success reg-login touch-button" name="car_request" value="Submit"></input>
			</form>
      <?php echo $alert;?> 
	</div> 


	
</body>
</html>