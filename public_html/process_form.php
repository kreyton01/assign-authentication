<?php
require_once('../app/config2.php');

// connect to the database
$conn = mysqli_connect($database_host, $database_user, $database_password, $database_name);


    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	$matric_no = filter_var($_POST["matric_no"], FILTER_SANITIZE_NUMBER_INT);
	$current_address = filter_var($_POST["current_address"], FILTER_SANITIZE_STRING);
	$home_address = filter_var($_POST["home_address"], FILTER_SANITIZE_STRING);
	$email = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
	$mobile_phone = filter_var($_POST["mobile_phone"],  FILTER_SANITIZE_NUMBER_INT);
	$home_phone = filter_var($_POST["home_phone"],  FILTER_SANITIZE_NUMBER_INT);






$sql = "INSERT INTO `studentform`
 (`name`,
  `matric_no`, 
  `current_address`,
   `home_address`,
   `email`, 
   `mobile_phone`, 
   `home_phone`) 


VALUES 
('$name',
 '$matric_no', 
 '$current_address', 
 '$home_address', 
 '$email', 
 '$mobile_phone',
 '$home_phone')";

$result = mysqli_query($con, $sql);
echo $sql;

?>
