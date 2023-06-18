<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <h2>Login</h2>
  <form method="POST" action="checkPatientLogin.php">
    <label for="ssn">SSN:</label>
    <input type="text" name="ssn" id="ssn" required><br><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br><br>

    <input type="submit" value="Login">
  </form>
</body>
</html>
