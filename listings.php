<?php
$host = "localhost";
$username = "root";
$password = "rodeo900Japan";
$dbname = "bookdaddy";

// Create connection

$conn =  new mysqli($host, $username, $password);

if(!$conn){
	die("Could not connect: ".mysql_error());
}

$sql = "SELECT * FROM products INNER JOIN users on products.OwnerID = users.uid ORDER BY ISBN";
mysqli_select_db($conn, $dbname);
$results = mysqli_query($conn, $sql);

function display($user){
	$text = "<tr><td>".$user['name']."</td><td>".$user['ISBN']."</td><td>".$user['Description']."</td><td>".$user['Type']."</td><td>".$user['fname'].$user['lname']."</td><td>".$user['dateAdded']."</td></tr>";
	return $text;
}

?>

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
</html>