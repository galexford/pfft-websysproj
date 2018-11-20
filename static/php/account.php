<?php
if(!empty($_POST['fname']) && 
	!empty($_POST['lname']) &&
	!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['dob'])) {
	echo("Works");
	}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$host = "localhost";
$username = "root";
$password = "newpassword";
$dbname = "bookdaddy";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
	//Cannot repeat emails, and inserting values into database
     $SELECT = "SELECT email From users Where email = ? Limit 1";
     $INSERT = "INSERT INTO users (fname, lname, dob, email, pass,) VALUES($fname, $lname, $dob, $email, $pass)";
     /*Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;*/
		if ($conn->query($INSERT) === TRUE) {
    		echo "New record created successfully";
		} else {
    		echo "Error: " . $INSERT . "<br>" . $conn->error;
		}
     /*if ($rnum==0) {
     
     } else {
      echo "Someone already registered using this email";
     }*/
	  //$stmt->close();
     $conn->close(); 
}
?>

