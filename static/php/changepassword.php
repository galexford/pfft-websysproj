<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookdaddy";

$con=mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
  echo "successfully connected to MySQL.";
}
echo("<br>");

$changepassword = " UPDATE `users` SET `phone` = 'newpassword' WHERE `users`.`id` = id"
?>