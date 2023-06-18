<?php
// Database connection
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'DrugDistributionDb';

$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    die('Database connection failed: ' . mysqli_connect_error());
}

// Pharmacy sign-in
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signin_submit'])) {
    $pharmacyName = $_POST['pharmacy_name'];
    $address = $_POST['address'];
    $phoneNumber = $_POST['phone_number'];
    $password = $_POST['password'];

    // Insert pharmacy details into the database
    $query = "INSERT INTO pharmacies (name, address, phone_number, password) VALUES ('$pharmacyName', '$address', '$phoneNumber', '$password')";

    if (mysqli_query($connection, $query)) {
        // Successful sign-in
        session_start();
        $_SESSION['pharmacy_name'] = $pharmacyName;
        header("Location: pharmacyLogin.php"); // Redirect to the pharmacy's dashboard page
        exit();
    } else {
        // Failed to sign in
        $error = "Sign-in failed. Please try again.";
    }
}

mysqli_close($connection);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pharmacy Sign-in</title>
</head>
<body>
    <h2>Pharmacy Sign-in</h2>

    <form method="POST" action="pharmacyLogin.php">
        <label for="pharmacy_name">Name:</label>
        <input type="text" name="pharmacy_name" id="pharmacy_name" required><br>

        <label for="address">Address:</label>
        <input type="text" name="address" id="address" required><br>

        <label for="phone_number">Phone Number:</label>
        <input type="text" name="phone_number" id="phone_number" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <button type="submit" name="signin_submit">Sign In</button>
    </form>

    <?php if (isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
</body>
</html>

