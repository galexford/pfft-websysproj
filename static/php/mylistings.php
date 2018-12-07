<?php
session_start();

$host = "localhost";
$username = "root";
$password = "";
$dbname = "bookdaddy";

function books($con, $person) {
	$getBook = $con->query("SELECT * FROM products WHERE type = 'book' AND UID = $person");
	foreach ($getBook as $row) {
		$name = $row['name'];
		$price =  $row['price'];

		echo '<pre>';
		echo $name . ': ' . '$'.$price;
		echo '</pre>';
	}
}

function furniture($con, $person) {
	$getBook = $con->query("SELECT * FROM products WHERE type = 'furniture' AND UID = $person");
	foreach ($getBook as $row) {
		$name = $row['name'];
		$price =  $row['price'];

		echo '<pre>';
		echo $name . ': ' . '$'.$price;
		echo '</pre>';
	}
}

function other($con, $person) {
	$getBook = $con->query("SELECT * FROM products WHERE type = 'other' AND UID = $person");
	foreach ($getBook as $row) {
		$name = $row['name'];
		$price =  $row['price'];

		echo '<pre>';
		echo $name . ': ' . '$'.$price;
		echo '</pre>';
	}
}

try {
	$con = new PDO("mysql:dbname=$dbname;host=$host", $username, $password);
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$data = $_POST['data'];

	$person = $_SESSION['uid'];

	if($data == 'book') {
		books($con, $person);
	}

	if($data == 'furniture') {
		furniture($con, $person);
	}

	if($data == 'other') {
		other($con, $person);
	}

} catch(PDOException $e) {
	echo 'ERROR: ' .  $e->getMessage();
}
?>

