<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "bookdaddy";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
	$user = "SELECT * FROM products WHERE OwnerID =  ";
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>My Listings</title>
		<link rel="stylesheet" href="../static/css/bootstrap.css">
	</head>
	<table>
		<th>Name</th>
		<th>ISBN</th>
		<th>Description</th>
		<th>Type</th>
		<th>University</th>
		<th>Owner</th>
		<th>Date Added</th>
	</table>
</html>