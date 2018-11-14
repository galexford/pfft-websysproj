<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname - "";

$con=mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
  echo "successfully connected to MySQL.";
}
echo("<br>");

$sql = "INSERT INTO products (name, ISBN, Description, Type, ownerUName, dateAdded)
VALUES('$_POST[itemName], $_POST[ISBN], $_POST[itemDescription], $_POST[itemType], $POST[], NOW()')";

?>