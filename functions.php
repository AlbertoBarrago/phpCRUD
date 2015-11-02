<?php include "db.php"; ?>

<?php

function readAll() {
global $connection;
global $result;

$query  = "SELECT * FROM users ";
$result = mysqli_query($connection, $query);

if(!$result) {
  die('Query fallita' . mysqli_error());
}

}

function getUser() {

global $connection;
$query  = "SELECT * FROM users";
$result = mysqli_query($connection, $query);

if(!$result) {
  die('Query fallita' . mysqli_error());
}

while ($row = mysqli_fetch_assoc($result)) {
$id = $row['id'];
echo "<option value='$id'>$id</option> ";
}

}

function updateAll() {

global $connection;

$username = $_POST['username'];
$password = $_POST['password'];

$id = $_POST['id'];

$query = "UPDATE users SET ";
$query .= "username = '$username', ";
$query .= "password = '$password' ";
$query .= "WHERE id = $id ";

$result = mysqli_query($connection, $query);

if(!$result) {
  die("QUERY FAILED" . mysqli_error($connection) );
  } else {
  echo "$username create";
}

}

function createUser() {

global $connection;
$username = $_POST['username'];
$password = $_POST['password'];

//Function vs Injection
$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $username);
//Encrypting password
$hashFormat = "$2y$10$";
$salt = "iusesomecrazystrings22";
$hashF_and_salt = $hashFormat . $salt;
$password = crypt($password, $hashF_and_salt);



$query  = "INSERT INTO users(username,password) ";
$query .= "VALUES ('$username', '$password')";

$result = mysqli_query($connection, $query);

if(!$result) {
  die('Query fallita' . mysqli_error());
} else {
  echo "<p>User Creato Correttamente</p>";
}


}

function deleteRow() {

global $connection;
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];

$query = "DELETE FROM users ";
$query .= "WHERE id = $id ";

$result = mysqli_query($connection, $query);

if(!$result) {
  die("QUERY FAILED" . mysqli_error($connection) );
} else {
  echo " $username delete";
 }
}


function loginSimple() {

global $connection;
$username = $_POST['username'];
$password = $_POST['password'];

if($username && $password) {
  echo $username;
  echo '<br>';
  echo $password;
} else {
  echo "I campi non possono essere vuoti, coglione";
}

}

?>
