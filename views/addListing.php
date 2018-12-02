<main ng-controller="addListingCtrl.js">

<!-- 
<html>
  <head> 
    <link rel="stylesheet" href="../static/css/bootstrap.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
  </head>
  <body> -->
    <!--header bar here -->
    <form action="addlisting.php" method="post">
      Item Name: <br />
        <input type="text" name="itemName"><br />
      
      Item Type: <br />
        <input id="bookButton" type="radio" name="itemType" value="book" onclick="showISBN();" required> Book <br />
        <input id ="furnitureButton" type="radio" name="itemType" value="furniture" onclick="noShowISBN();" required> Furniture <br />
        <input id="otherButton" type="radio" name="itemType" value="other" onclick="noShowISBN();" required> Other <br />
      
      <div id="isbn" style="display:none;"> ISBN Number: <br /> <!-- Hidden with JS unless book is selected -->
        <input type="text" name="ISBN" maxlength="13" size="13"><br />
      </div>

      <div id="price""> Price: <br /> <!-- Hidden with JS unless book is selected -->
        <input type="text" name="price" maxlength="10" size="10"><br />
      </div>
      
      Item Description: <br />
             <textarea id=itemDescription" rows=10 cols=50" placeholder="Item description goes here..." required></textarea> <br />
      <input type="submit" name="submitButton"> <br />
     </form>

    <!--add footer bar here (?) -->
<!--
  </body>
  </html> 
-->
</main>

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

$name = "";
$desc = "";
$ISBN = "";


if(isset($_POST['itemName'])) {
  $name = $_POST['itemName'];
}

if(isset($_POST['ISBN'])) {
  $ISBN = $_POST['ISBN'];
}

if(isset($_POST['itemDescription'])) {
  $desc = $_POST['itemDescription'];
}

if(isset($_POST['itemType'])) {
  $type = $_POST['itemType'];
}

// if(isset($_POST[userID])) {
//  $name = $_POST['itemName'];
// }

$insert = "INSERT INTO products (name, ISBN, Description, Type, OwnerID, dateAdded) 
       VALUES('$name', '$ISBN', '$desc', '$type', '20', 'NOW()')";

$sqlInsert = mysqli_query($con, $insert);

if(!$sqlInsert) {
  printf("Failed to insert data!");
}
else {
  printf("successfully inserted data!");
}

?>