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

// Sign in values for pharmaceutical companies
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['company_submit'])) {
    $companyName = $_POST['company_name'];
    $companyPhoneNumber = $_POST['company_phone_number'];

    $query = "INSERT INTO pharmaceutical_companies (name, phone_number) VALUES ('$companyName', '$companyPhoneNumber')";

    if (mysqli_query($connection, $query)) {
        echo "Pharmaceutical company signed in successfully!";
    } else {
        echo "Error signing in pharmaceutical company: " . mysqli_error($connection);
    }
}

// Sign in values for drugs
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['drug_submit'])) {
    $tradeName = $_POST['trade_name'];
    $formula = $_POST['formula'];
    $companyId = $_POST['company_id'];

    $query = "INSERT INTO drugs (trade_name, formula, company_id) VALUES ('$tradeName', '$formula', $companyId)";

    if (mysqli_query($connection, $query)) {
        echo "Drug signed in successfully!";
    } else {
        echo "Error signing in drug: " . mysqli_error($connection);
    }
}

// Sign in values for pharmacies
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pharmacy_submit'])) {
    $pharmacyName = $_POST['pharmacy_name'];
    $pharmacyAddress = $_POST['pharmacy_address'];
    $pharmacyPhoneNumber = $_POST['pharmacy_phone_number'];

    $query = "INSERT INTO pharmacies (name, address, phone_number) VALUES ('$pharmacyName', '$pharmacyAddress', '$pharmacyPhoneNumber')";

    if (mysqli_query($connection, $query)) {
        echo "Pharmacy signed in successfully!";
    } else {
        echo "Error signing in pharmacy: " . mysqli_error($connection);
    }
}

mysqli_close($connection);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Sign In</title>
</head>
<body>
  <h2>Sign In</h2>

  <!-- Sign in form for pharmaceutical companies -->
  <h3>Pharmaceutical Company</h3>
  <form method="POST" action="">
    <label for="company_name">Name:</label>
    <input type="text" name="company_name" id="company_name" required><br>
    <label for="company_phone_number">Phone Number:</label>
    <input type="text" name="company_phone_number" id="company_phone_number" required><br>
    <button type="submit" name="company_submit">Sign In</button>
  </form>

  <!-- Sign in form for drugs -->
  <h3>Drug</h3>
  <form method="POST" action="">
    <label for="trade_name">Trade Name:</label>
    <input type="text" name="trade_name" id="trade_name" required><br>
    <label for="formula">Formula:</label>
    <input type="text" name="formula" id="formula" required><br>
    <label for="company_id">Pharmaceutical Company ID:</label>
    <input type="number" name="company_id" id="company_id" required><br>
    <button type="submit" name="drug_submit">Sign In</button>
  </form>

  <!-- Sign in form for pharmacies -->
  <h3>Pharmacy</h3>
  <form method="POST" action="">
    <label for="pharmacy_name">Name:</label>
    <input type="text" name="pharmacy_name" id="pharmacy_name" required><br>
    <label for="pharmacy_address">Address:</label>
    <input type="text" name="pharmacy_address" id="pharmacy_address" required><br>
    <label for="pharmacy_phone_number">Phone Number:</label>
    <input type="text" name="pharmacy_phone_number" id="pharmacy_phone_number" required><br>
    <button type="submit" name="pharmacy_submit">Sign In</button>
  </form>
</body>
</html>