<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "bookdaddy";

// Create connection
//$conn =  new mysqli($host, $username, $password);

function books($con) {
	$getBook = $con->query('SELECT * FROM products WHERE type = "book"');
	foreach ($getBook as $row) {
		$name = $row['name'];
		$price =  $row['price'];

		echo '<pre>';
		echo $name . ': ' . '$'.$price;
		echo '</pre>';
	}
}

function furniture($con) {
	$getBook = $con->query('SELECT * FROM products WHERE type = "furniture"');
	foreach ($getBook as $row) {
		$name = $row['name'];
		$price =  $row['price'];

		echo '<pre>';
		echo $name . ': ' . '$'.$price;
		echo '</pre>';
	}
}

function other($con) {
	$getBook = $con->query('SELECT * FROM products WHERE type = "other"');
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

	if($data == 'book') {
		books($con);
	}

	if($data == 'furniture') {
		furniture($con);
	}

	if($data == 'other') {
		other($con);
	}

} catch(PDOException $e) {
	echo 'ERROR: ' .  $e->getMessage();
}