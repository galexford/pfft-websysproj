<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookdaddy";

$con=mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
echo("<br>");


if(isset($_POST['itemName'])) {
	$name = $_POST['itemName'];
}

if(isset($_POST['ISBN'])) {
	$ISBN = $_POST['ISBN'];
}

if(isset($_POST['price'])) {
	$price = $_POST['price'];
}

if(isset($_POST['itemDescription'])) {
	$desc = $_POST['itemDescription'];
}

if(isset($_POST['itemType'])) {
	$type = $_POST['itemType'];
}

// if(isset($_POST[userID])) {
// 	$name = $_POST['itemName'];
// }


$insert = "INSERT INTO products (name, price, ISBN, Description, Type, OwnerID, dateAdded) 
		   VALUES('$name', '$price', '$ISBN', '$desc', '$type', '20', 'NOW()')";

$sqlInsert = mysqli_query($con, $insert);

if(!$sqlInsert) {
	printf("Failed to insert data!");
}
else {
	printf("successfully inserted data!");
} 

?>