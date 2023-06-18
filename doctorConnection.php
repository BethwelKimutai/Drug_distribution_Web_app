<?php
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

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ssn = $_POST['ssn'];
    $name = $_POST['name'];
    $specialty = $_POST['specialty'];
    $experience = $_POST['experience'];
    $password = $_POST['password'];

    // Insert data into the doctors table
    $query = "INSERT INTO doctors (ssn, name, specialty, experience, password) VALUES ('$ssn', '$name', '$specialty', $experience, '$password')";

    if (mysqli_query($connection, $query)) {
        echo "Signin successful! Data inserted into the doctors table.";
    } else {
        echo "Error inserting data: " . mysqli_error($connection);
    }
}

// Close the database connection
mysqli_close($connection);
?>
