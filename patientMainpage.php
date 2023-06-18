<!DOCTYPE html>
<html>
<head>
  <title>Main Page</title>
  <style>
    .username {
      position: absolute;
      top: 10px;
      right: 10px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <?php
  // Start the session
  session_start();

  // Check if the user is logged in
  if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo '<div class="username">Welcome, ' . $username . '</div>';
  } else {
    // Redirect to the login page if not logged in
    header('Location: patientLogin.php');
    exit;
  }
  ?>

  <h2>Main Page</h2>
  <!-- Rest of the content -->

  <a href="logout.php">Sign Out</a>
</body>
</html>
