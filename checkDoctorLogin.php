<?php
// Start the session
session_start();

// Database connection 
$host = 'localhost';
$username = 'root'; 
$password = ''; 
$database = 'DrugDistributionDb';

// Create a connection
$connection = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$connection) {
    die('Database connection failed: ' . mysqli_connect_error());
}

// Process login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ssn = $_POST['ssn'];
    $password = $_POST['password'];

    // Check if the user exists in the doctors table
    $query = "SELECT * FROM doctors WHERE ssn = '$ssn' AND password = '$password'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1) {
        // Login successful
        $_SESSION['username'] = $ssn; // Store the username in a session variable
        header('Location: mainpage.php');
        exit();
    } else {
        // Login failed
        echo "Invalid SSN or password. Please try again.";
    }
}

// Close the database connection
mysqli_close($connection);
?>


