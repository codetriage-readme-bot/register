<?php 
//Start session
session_start();
//Connect to the database
require('inc/connection.php'); 
//Php for registration form 
include("inc/register.php");
//php for login form
include("inc/login.php");
//head and navbar
include("inc/header.php");
?>
	<!-- Nav bar login form  --> 
    	<form method = "POST" class="navbar-form navbar-right" > 
					<label for="log_name">Email</label>
					<input type="email" name="log_email" class="form-control" placeholder="Email"/>
					<label for="log_password">Password</label>
					<input type="password" name="log_password"  class="form-control" placeholder="Password"/>
					<input type="submit" name="login" class="btn btn-success" placeholder="Login"/>

				</form>


  		</div>
	</nav>

<!-- Display alert if user is incorrect-->
	<?php echo $login_alert;	 ?>

	<h1 class ="text-center title">Out of Hours Register</h1>

	<p class="lead text-center">Welcome to the school's out of hours register service. <br /><br/> If this your first time please sign up below. If you have already signed up please login at the top.</p>

<!-- Main registration form-->	
		<div class="container">
		<div class="register text-center">
			<form method="post" >
				<label for="name">Name</label>
				<input type="text" class="form-control" name="name" placeholder="Name"/>
				<label for="email">Email address</label>
				<input type="email" class="form-control" name="email" placeholder="Email"/>
				<label for="password">Password</label>
				<input type="password" class="form-control"name="password" placeholder="Password"/>
				<input type="submit" class="btn btn-success reg-login" name="submit"></input>

			</form>

<!-- Alert whether user has been successful. Failure usually due to email already existing--> 
			<?php echo $alert; ?>

			

		</div>
	
	</div>
</body>
</html>