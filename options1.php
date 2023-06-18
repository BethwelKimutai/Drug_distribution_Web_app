<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $role = $_POST['role'];
    switch ($role) {
        case 'patient':
            header("Location: patientLogin.php");
            exit();
        case 'doctor':
            header("Location: doctorLogin.php");
            exit();
        case 'pharmacist':
            header("Location: pharmacyLogin.php");
            exit();
        default:
            // Handle invalid role selection
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Options Page</title>
</head>
<body>
  <h1>Welcome to the Options Page</h1>
  
  <form method="POST">
    <label for="role">Select your role:</label>
    <select name="role" id="role">
      <option value="patient">Patient</option>
      <option value="doctor">Doctor</option>
      <option value="pharmacist">Pharmacist</option>
    </select>
    <button type="submit">Continue</button>
  </form>
</body>
</html>
