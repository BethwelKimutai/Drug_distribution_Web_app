
<!DOCTYPE html>
<html>
<head>
  <title>Main Page</title>
  <style>
    .username {
      position: absolute;
      top: 10px;
      right: 50px;
      font-weight: bold;
    }
    #profile-container {
  position: absolute;
  top: 45px;
  right: 10px;
  display: flex;
  align-items: center;
}

#profile-picture {
  width: 30px;
  height: 30px;
  border-radius: 50%;
  margin-right: 5px;
  cursor: pointer;
}
  </style>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Handle the uploaded image
  $targetDirectory = 'profile-pictures/';
  $targetFile = $targetDirectory . basename($_FILES['profilePicture']['name']);
  $uploadSuccess = move_uploaded_file($_FILES['profilePicture']['tmp_name'], $targetFile);

  if ($uploadSuccess) {
    // Image uploaded successfully
    // Update the profile picture path in the database or any other necessary actions
    // ...
  }
}


// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  echo '<div id="profile-container">';
  echo '<img id="profile-picture" src="user.png" alt="Profile Picture">';
  echo '<div id="username">User, ' . $username .'</div>' ;
  echo '</div>';
} else {
  // Redirect to the login page if not logged in
  header('Location: doctorLogin.php');
  exit;
}
?>
</body>
</html>

