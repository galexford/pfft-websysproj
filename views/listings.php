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
		echo '<pre>';
		printf("%s", $row['name']);
		printf("%s", $row['price']);
		echo '</pre>';
	}
}

try {
	$con = new PDO("mysql:dbname=$dbname;host=$host", $root, $password);
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	books($con);

} catch(PDOException $e) {
	echo 'ERROR: ' .  $e->getMessage();
}

// if(!$conn){
// 	die("Could not connect: ".mysql_error());
// }

// $sql = "SELECT * FROM products";
// mysqli_select_db($conn, $dbname);
// $results = mysqli_query($conn, $sql);

// function display($user){
// 	$text = "<tr><td>".$user['name']."</td><td>".$user['ISBN']."</td><td>".$user['Description']."</td><td>".$user['Type']."</td><td>".$user['fname'].$user['lname']."</td><td>".$user['dateAdded']."</td></tr>";
// 	return $text;
// }

?>
<!-- 
<!DOCTYPE html>
<html>
	<head>
		<title>All Listings</title>
		<link rel="stylesheet" href="../static/css/bootstrap.css">
	</head>
	<table>
		<th>Name</th>
		<th>ISBN</th>
		<th>Description</th>
		<th>Type</th>
		<th>Owner</th>
		<th>Date Added</th>
		<?php
			foreach ($results as $results){
				echo display($results);
			}
		?>
	</table>
</html> -->