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
	$user = "SELECT * FROM products WHERE UID =  ";
}

function display($product){
	$text = "<tr>";
	$text += "<td>" + $user['name'] + "</td>";
	$text += "<td>" + $user['ISBN']+"</td>";
	$text += "<td>" + $user['Description']+"</td>";
	$text += "<td>" + $user['Type']+"</td>";
	$text += "<td>" + $user['University']+"</td>";
	$text += "<td>" + $user['OwnerID']+"</td>";
	$text += "<td>" + $user['dateAdded']+"</td>";
	$text +="</tr>";
	return $text;
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
		<?php
			while($row = mysql_fetch_array($user)){
				echo display($row);
			}
		?>
	</table>
</html>