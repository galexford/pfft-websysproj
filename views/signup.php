<!DOCTYPE html>
<html>
<head>
  <title> CORRECT PAGE </title>
</head>
    <body>
        <h1>User Registration</h1>
        <form method="post" action="signup.php">
            <label for="fname">First Name: </label><input type="text" name="fname" /><br>
            <label for="lname">Last Name: </label><input type="text" name="lname" /><br>
            <label for="dob">Date of Birth (YYYY-MM-DD): </label><input type="text" name="dob" /><br>
            <label for="username">Email: </label><input type="text" name="username" /><br>
            <label for="pass">Password: </label><input type="password" name="pass" /><br>
            <label for="passconfirm">Confirm Password: </label><input type="password" name="passconfirm" /><br>
            <input type="submit" name="register" value="Register" />
        </form>
    </body>
</html>
