<?php 
Session_start();
//Destroy session as user has logged out
session_destroy();
//Connect to database
require('inc/connection.php'); 
//Php for registration form 
include("inc/register.php");
//php for login form
include("inc/login.php");
//head and navbar
include("inc/header.php");
?>
  		</div> <!-- nav bar container fluid-->
	</nav> <!-- nav bar -->

	<h1 class ="text-center title ">Logged Out</h1>

  <a href="index.php"><p class=" lead text-center">Go Back to Home Page</p></a>


	
</body>
</html>