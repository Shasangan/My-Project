<?php
// connect php and insert data

include 'config.php';

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$address = $_POST["address"];
$city = $_POST["city"];
$pin = $_POST["pin"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];
$pwdhash = hash('sha256', $pwd);

if($mysqli->query("INSERT INTO users (fname, lname, address, city, pin, email, password) VALUES('$fname', '$lname', '$address', '$city', $pin, '$email', '$pwdhash')")){
	echo 'Data inserted';
	echo '<br/>';
}

header ("location:login.php");

?>
