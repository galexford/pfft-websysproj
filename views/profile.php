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
	$user = "SELECT * FROM users WHERE id = ''";
}
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Profile_Page</title>
		<link rel="stylesheet" href="../static/css/bootstrap.css">
	</head>
	<body>
		<h1><?php echo $user['firstname'] + $user['lastname']?></h1>
		<h2>Rensselaer Polytechnic Institute</h2>
		<form onsubmit="return validate(this);">
			<fieldset>
				<div class="form-group">
   					<h4>Change Password</h4>
  					<input id="currentpassword" type="password" class="form-control" placeholder="Current Password" required>
  					<br>
  					<input id="newpassword1" type="password" class="form-control" placeholder="New Password" required>
  					<br>
  					<input id="newpassword2" type="password" class="form-control" placeholder="Re-enter New Password" required>
  					<br>
  					<button type="submit" class="btn btn-primary" id="password">Change Password</button>
  				</div>
			</fieldset>
		</form>
			<br>
			<br>
			<a class="btn btn-primary" href="#" role="button">My Listings</a>
			<a class="btn btn-primary" href="#" role="button">Wishlist</a>
			<p>My User Rating</p>
	</body>
	<script type="text/javascript" src="../static/js/profilepage.js"></script>
</html>
