<?php


if (strlen($_POST["Password"]) > 8){
    die ("Password must be at least 8 characters");
}


if ($_POST["Password"] !== $_POST["repeat_password"]){
    die ("Passwords must match");
}

$password_hash = password_hash($_POST["Password"], PASSWORD_DEFAULT);

//connect to the database
$servername = "localhost";
$username = "username";
$password = "password";

try {
  $conn = new PDO("mysql:host=$servername;dbname=logindb", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";




?>