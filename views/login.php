<?php
session_start();

function display($table){
  $text = "<tr><td>".$table['name']."</td><td>".$table['ISBN']."</td><td>".$table['Description']."</td><td>".$table['Type']."</td><td>".$table['fname'].$table['lname']."</td><td>".$table['dateAdded']."</td></tr>";
  return $text;
}

function displaymy(){
  $sql = "SELECT * FROM products INNER JOIN users on products.OwnerID = users.uid ORDER BY ISBN WHERE OwnerID = ".$_SESSION[uid];
  mysqli_select_db($conn, $dbname);
  $results = mysqli_query($conn, $sql);

  foreach ($results as $results){
        echo display($results);
  }
}

// Connect to the database
try {
  $dbname = 'bookdaddy';
  $user = 'root';
  $pass = '';
  $dbconn = new PDO('mysql:host=127.0.0.1;dbname='.$dbname, $user, $pass);
}
catch (Exception $e) {
  echo "Error: " . $e->getMessage();
}

// Check login
if (isset($_POST['login']) && $_POST['login'] == 'Login') {
  $salt_stmt = $dbconn->prepare('SELECT salt FROM users WHERE username=:username');
  $salt_stmt->execute(array(':username' => $_POST['username']));
  $res = $salt_stmt->fetch();
  $salt = ($res) ? $res['salt'] : '';
  $salted = hash('sha256', $salt . $_POST['pass']);


  $login_stmt = $dbconn->prepare('SELECT username, uid FROM users WHERE username=:username AND pass=:pass');
  echo ($login_stmt->fetch());

  $login_stmt->execute(array(':username' => $_POST['username'], ':pass' => $salted));

  if ($user = $login_stmt->fetch()) {
    $_SESSION['username'] = $user['username'];
	   $_SESSION['uid'] = $user['uid'];
     header('Location: ../#/listings');
  } else {
    print_r('Incorrect username or password.');
  }
}

// Logout
if (isset($_SESSION['username']) && isset($_POST['logout']) && $_POST['logout'] == 'Logout') {
  // Unset the keys from the superglobal
  unset($_SESSION['username']);
  // Destroy the session cookie for this session
  setcookie(session_name(), '', time() - 72000);
  // Destroy the session data store
  session_destroy();
  $err = 'You have been logged out.';
}

?>
