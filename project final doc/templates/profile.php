<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_data'])) {
    header("Location: login.php");
    exit();
}

// Check if form is submitted for vitamin data
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_vitamin'])) {
    $vitamin_data = $_POST['vitamin_data'];

    $conn = mysqli_connect("localhost", "root", "", "project");

    if (!$conn) {
        die("Connection failed");
    }

    $user_id = $_SESSION['user_data']['username'];

    // Store vitamin data in the 'vitamin' table
    $insertVitaminQuery = "INSERT INTO vitamin (username, data) VALUES ('$user_id', '$vitamin_data')";
    $result = mysqli_query($conn, $insertVitaminQuery);

    if ($result) {
        echo "Vitamin data saved successfully";
    } else {
        echo "Error saving vitamin data";
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Profile</title>
  <!-- Add your styles and scripts here -->
</head>
<body>

  <h2>User Profile</h2>

  <?php
  // Display user profile information
  if (isset($_SESSION['user_data'])) {
      $userData = $_SESSION['user_data'];
      echo "<p>Welcome, {$userData['name']}!</p>";
      // Display other profile information
  }
  ?>

  <!-- Add a form for vitamin input -->
  <form method="post" action="">
    <label for="vitamin_data">Enter Vitamin Data:</label>
    <input type="text" name="vitamin_data" id="vitamin_data" required>
    <button type="submit" name="submit_vitamin">Submit Vitamin Data</button>
  </form>

  <!-- Add additional content as needed -->

</body>
</html>
