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



$formData = $_POST['formData'];
//echo($formData);

$isbn = ""; 

$name = $formData[0]["value"];
$type = $formData[1]["value"];
$isbn = $formData[2]["value"];
$price = (int)$formData[3]["value"];
$desc = $formData[4]["value"];


// if(isset($_POST['name'])) {
// 	$name = $_POST['name'];
// }

// if(isset($_POST['type'])) {
// 	$type = $_POST['type'];
// }

// if(isset($_POST['isbn'])) {
// 	$ISBN = $_POST['isbn'];
// }

// if(isset($_POST['price'])) {
// 	$price = $_POST['price'];
// }

// if(isset($_POST['desc'])) {
// 	$desc = $_POST['desc'];
// }


echo($name);
echo("<br>");
echo($type);
echo("<br>");
echo($price);
echo("<br>");
echo($isbn);
echo("<br>");
echo($desc);
echo("<br>");

// if(isset($_POST[userID])) {
// 	$name = $_POST['itemName'];
// }

$date = date('Y-m-d');

$insert = "INSERT INTO products (name, price, ISBN, Description, Type, UID, dateAdded) 
		   VALUES('$name', '$price', '$isbn', '$desc', '$type', '1', '$date')";

$sqlInsert = mysqli_query($con, $insert);


if(!$sqlInsert) {
	print("Failed to insert data!");
	echo mysqli_errno($con) . ": " . mysqli_error($con) . "\n";
}
else {
	print("successfully inserted data!");
} 

?>