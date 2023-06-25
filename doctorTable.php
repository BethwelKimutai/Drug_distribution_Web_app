<!DOCTYPE html>
<html>
<head>
  <title>Data Management</title>
  <style>
    table {
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid black;
      padding: 5px;
    }
  </style>
</head>
<body>
  <h2>Data Management</h2>

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

  // Process form submission for updating data
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
      $id = $_POST['id'];
      $newSSN = $_POST['new_SSN'];
      $newName = $_POST['new_name'];
      $newSpecialty = $_POST['new_specialty'];
      $newExperience = $_POST['new_experience'];
      $newPassword = $_POST['new_password'];

      // Update data in the patients table
      $query = "UPDATE doctors SET ssn = '$newSSN' ,name = '$newName', specialty = '$newSpecialty', experience = '$newExperience', password = '$newPassword' WHERE id = $id";

      if (mysqli_query($connection, $query)) {
          echo "Data updated successfully!";
      } else {
          echo "Error updating data: " . mysqli_error($connection);
      }
  }

  // Process form submission for deleting data
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
      $id = $_POST['id'];

      // Delete data from the doctors table
      $query = "DELETE FROM doctors WHERE id = $id";

      if (mysqli_query($connection, $query)) {
          echo "Data deleted successfully!";
      } else {
          echo "Error deleting data: " . mysqli_error($connection);
      }
  }

  // Fetch all data from the doctors table
  $query = "SELECT * FROM doctors";
  $result = mysqli_query($connection, $query);
  ?>

  <!-- Display the data in a table -->
  <table>
    <tr>
      <th>ID</th>
      <th>SSN</th>
      <th>Name</th>
      <th>Address</th>
      <th>Age</th>
      <th>Password</th>
      <th>Actions</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['ssn']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['specialty']; ?></td>
        <td><?php echo $row['experience']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td>
          <form method="POST" action="">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="number" name="new_SSN" placeholder="New SSN">
            <input type="text" name="new_name" placeholder="New Name">
            <input type="text" name="new_specialty" placeholder="New Specialty">
            <input type="number" name="new_experience" placeholder="New Years of experience">
            <input type="password" name="new_password" placeholder="New Password">
            <button type="submit" name="update">Update</button>
            <button type="submit" name="delete">Delete</button>
          </form>
        </td>
      </tr>
    <?php } ?>
  </table>

  <?php
  // Close the database connection
  mysqli_close($connection);
  ?>
</body>
</html>
