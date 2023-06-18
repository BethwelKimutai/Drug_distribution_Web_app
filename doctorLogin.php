<!DOCTYPE html>
<html>
<head>
  <title>Doctor Login</title>
</head>
<body>
  <h2>Doctor Login</h2>
  
  <form method="POST" action="checkDoctorLogin.php">
    <label for="ssn">SSN:</label>
    <input type="text" id="ssn" name="ssn" required><br><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    
    <button type="submit">Login</button>
  </form>
</body>
</html>

