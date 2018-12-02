<?php

session_start()

// Create connection
try {
    $dbname = 'bookdaddy';
    $user = 'root';
    $pass = '';
    $dbconn = new PDO('mysql:host=127.0.0.1;dbname='.$dbname, $user, $pass);
}
catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

//logout
if (isset($_SESSION['email']) && isset($_POST['logout']) && $_POST['logout'] == 'Logout') {
	// Unset the keys from the superglobal
	unset($_SESSION['']);
	unset($_SESSION['']);
	// Destroy the session cookie for this session
	setcookie(session_name(), '', time() - 72000);
	// Destroy the session data store
	session_destroy();
	$err = 'You have been logged out.';
}

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Profile_Page</title>
		<link rel="stylesheet" href="../static/css/bootstrap.css">
	</head>
	<body>
		<?php if (isset($_SESSION['email'])) :?>
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
		<?php else: ?>

	</body>
	<script type="text/javascript" src="../static/js/profilepage.js"></script>
</html>
