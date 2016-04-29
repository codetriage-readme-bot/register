<?php

//Query for signed in table
$stmt = $db->prepare("SELECT * FROM `signed_in` WHERE `user_date` = '$date'	ORDER BY `user_time`");
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
$count = $stmt -> rowCount(); 
$all = $stmt->fetchALL();

//Query for signed out table
$out = $db->prepare("SELECT * FROM `signed_out` WHERE `user_date` = '$date' ORDER BY `user_time`");
$out->execute();
$result_out = $out->setFetchMode(PDO::FETCH_ASSOC); 
$count_out = $out -> rowCount(); 
$all_out = $out->fetchALL(); 

//Query for meeting table
$meet = $db->prepare("SELECT `meet_room`, `meet_memb` FROM `meeting`");
$meet->execute();
$result_meet = $meet->setFetchMode(PDO::FETCH_ASSOC); 
$count_meet = $meet -> rowCount(); 
$all_meet = $meet->fetchALL();  

//Query for cars
$car_date = date("Y-m-d");

$car = $db->prepare("SELECT `user_name`, `car_reg`, `car_make`, `car_from`, `car_till` FROM `cars` WHERE `car_till` > '$car_date' AND `car_from` <= '$car_date'");
$car->execute();
$result_car = $car->setFetchMode(PDO::FETCH_ASSOC); 
$count_car = $car -> rowCount(); 
$all_car = $car->fetchALL();    

?>


