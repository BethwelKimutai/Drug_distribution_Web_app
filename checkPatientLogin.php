<?php
// Start the session
session_start();

// Database connection settings
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

    // Check if user exists in the patients table
    $query = "SELECT * FROM patients WHERE ssn='$ssn' AND password='$password'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) === 1) {
        $_SESSION['username'] = $ssn;
        // User exists, redirect to main page
        header('Location: patientMainPage.php');
        exit();
    } else {
        echo "Invalid credentials. Please try again.";
    }
}

// Close the database connection
mysqli_close($connection);
?>
