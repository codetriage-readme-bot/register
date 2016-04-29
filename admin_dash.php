<?php 
session_start();
//Connect to database
require('inc/connection.php'); 
//head and navbar
include("inc/header.php");
//Get user script
include("inc/get_user.php");
//Populate table script
include("inc/admin_table.php");
//Logged in nav
include("inc/logged_in_nav.php");
?>
	<h1 class ="text-center title">Welcome Back <?php  echo $_SESSION['name'] ?></h1>

	<!-- Container to hold admin buttons-->
	<div class="button-container text-center">	
		<button class="btn btn-primary" id="show_all">All</button>
		<button class="btn btn-success text-center" id="show_in" >Signed In</button>
		<button class="btn btn-danger text-center" id="show_out">Signed Out</button>
		<button class="btn btn-warning text-center" id="show_meet">Meetings</button>
		<button class="btn btn-info text-center" id="show_other">Cars</button>
	</div>


	<div class="admin-container">
		<!-- Signed in table-->
		<div class="admin-item container text-center">			
			<table class="table table-striped" id="sign_in">
				<thead>
					 <tr class="signed_in">
			    		<th>ID</th>
			    		<th>Name</th> 
			    		<th>Room</th>
			    		<th>Car</th>
			    		<th>Date</th>
			    		<th>Time</th>
			  		</tr>
		  		</thead>
		  		<tbody>
					<?php 
						if($count > 0) {
						//For each row echo <tr></tr>        
				          	foreach ($all as $item) {
				          		echo"<tr>";
				          		//For each column in the row echo each value in a <td></td>
				          		foreach ($item as $key => $value) {
				          			echo  "<td>" . $value ."</td>";		          				  
				          		}
				          		"</tr>";
				          	}

				        }		
					?>
				</tbody>
			
			</table>
		</div>

		<!-- Signed Out table -->
		<div class="admin-item container text-center">

			<table class="table table-striped" id="sign_out">
				<p class="car-text text-center">The following people have indicated they may leave their vehicles in the carpark when you lock up.</p>
				<thead>
					 <tr class="signed_out">
			    		<th>ID</th>
			    		<th>Name</th> 
			    		<th>Car</th>
			    		<th>Date</th>
			    		<th>Time</th>
			  		</tr>
		  		</thead>
		  		<tbody>
					<?php 
						if($count_out > 0) {
						//For each row echo <tr></tr>        
				          	foreach ($all_out as $item) {
				          		echo"<tr>";
				          		//For each column in a rom echo the value in <td></td> 
				          		foreach ($item as $key => $value) {
				          			echo  "<td>" . $value ."</td>";				          				  
				          		}
				          		"</tr>";
				          	}

				        }				
					?>
			</tbody
			</table>
		</div>

		<!-- Other Table-->
		<div class="admin-item container text-center" >
			<table class="table table-striped" id="meet">
				<h2>Meeting</h2>
				<thead>
					 <tr class="meeting">
			    		<th>Room</th>
			    		<th>Members</th> 
			  		</tr>
		  		</thead>
		  		<tbody>
					<?php 
						if($count_meet > 0) {    
						//For each row each <tr></tr>    
				          	foreach ($all_meet as $item) {
				          		echo"<tr>";
				          		//For each column in the row echo the value in <td></td>
				          		foreach ($item as $key => $value) {
				          			echo  "<td>" . $value ."</td>";

				          				  
				          		}
				          		"</tr>";
				          	}
				        }
					?>
			</tbody
			</table>
		</div>
		<div class="admin-item container text-center" >
			<table class="table table-striped" id="cars">
				<thead>
					 <tr class="cars">
			    		<th>Name</th>
			    		<th>Number Plate</th> 
			    		<th>Make</th> 
			    		<th>From</th> 
			    		<th>Until</th> 
			  		</tr>
		  		</thead>
		  		<tbody>
					<?php 
						if($count_car > 0) {    
						//For each row each <tr></tr>    
				          	foreach ($all_car as $item) {
				          		echo"<tr>";
				          		//For each column in the row echo the value in <td></td>
				          		foreach ($item as $key => $value) {
				          			echo  "<td>" . $value ."</td>";

				          				  
				          		}
				          		"</tr>";
				          	}
				        }
					?>
			</tbody
			</table>
		</div>



</div>




<script type="text/javascript">

//Button controllers for fading the tables in and out. Table is by default hidden from user
$('#show_all').click(function(){
	$('.table').fadeOut();
	$('.car-text').fadeOut();
	$('.table').fadeToggle( "slow", "linear" );
});

$('#show_in').click(function(){
	$('.table').fadeOut();
	$('.car-text').fadeOut();
	$('#sign_in').fadeToggle( "slow", "linear" );

});

$('#show_out').click(function(){
	$('.table').fadeOut();
	$('.car-text').fadeOut();
	$('#sign_out').fadeToggle( "slow", "linear" );
});

$('#show_meet').click(function(){
	$('.table').fadeOut();
	$('.car-text').fadeOut();
	$('#meet').fadeToggle( "slow", "linear" );

});

$('#show_other').click(function(){
	$('.table').fadeOut();
	$('#cars').fadeToggle( "slow", "linear" );
	$('.car-text').fadeToggle( "slow", "linear" );

});

</script>	
</body>
</html>