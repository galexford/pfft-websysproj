<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "bookdaddy";

// Create connection
$conn = new mysqli($servername, $username, "", $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO users (fname, lname, picture, dob, email, pass, unviersity)
VALUES ('John', 'Doe', 'none', '00/00/00', 'john@example.com', 'password', 'Rensselaer Polytechnic Institute')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

