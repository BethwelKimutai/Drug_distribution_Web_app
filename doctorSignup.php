<!DOCTYPE html>
<html>
<head>
  <title>Doctor Signin</title>
</head>
<body>
  <h2>Doctor Signin</h2>
  
  <form method="POST" action="doctorLogin.php">
    <label for="ssn">SSN:</label>
    <input type="text" id="ssn" name="ssn" required><br><br>
    
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="specialty">Specialty:</label>
    <input type="text" id="specialty" name="specialty" required><br><br>
    
    <label for="experience">Years of Experience:</label>
    <input type="number" id="experience" name="experience" required><br><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    
    <label for="confirm_password">Confirm Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" required><br><br>
    
    <button type="submit">Sign In</button>
  </form>
</body>
</html>