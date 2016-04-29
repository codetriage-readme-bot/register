<?php 
//Set to correct timezone otherwise dates and times will go weird. 
date_default_timezone_set('Europe/London');

//Database connection settings
$host = 'localhost';
$database = "login";
$username = "root";
$password = "password"; 

	

	try{

		//Connect to database
		$db = new PDO('mysql:host='.$host . ';dbname='. $database, $username, $password);

		//Error Reporting. Comment out when not developing!
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


	

	}catch(Exception $e){

		echo 'UH OH there is an error' . $e -> getMessage(); 

	}



?>