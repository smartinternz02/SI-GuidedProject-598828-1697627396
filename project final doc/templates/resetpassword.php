<?php
$servername = "localhost";
$username = "root"; // Update with your database username
$password = ""; // Update with your database password
$dbname = "IET_CLUB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['userid']) && isset($_POST['password']) && isset($_POST['Cpass'])) {
    $userid = $_POST['userid'];
    $oldpassword = $_POST['password'];
    $confirmpass = $_POST['Cpass'];

    // Sanitize inputs to prevent SQL injection
    $userid = $conn->real_escape_string($userid);
    $oldpassword = $conn->real_escape_string($oldpassword);
    $confirmpass = $conn->real_escape_string($confirmpass);

    // Check if the old password matches the existing password
    $checkSql = "SELECT * FROM users WHERE userid='$userid' AND password='$oldpassword'";
    $checkResult = $conn->query($checkSql);

    if ($checkResult->num_rows > 0) {
        // Update the password
        $updateSql = "UPDATE users SET password='$confirmpass' WHERE userid='$userid'";
        $updateResult = $conn->query($updateSql);

        if ($updateResult) {
            header('Location: SignInPage.php?message=passwordsaved_success');
        } else {
            header('Location: resetpassword.php?error=passwordsaved_failed');
        }
    } else {
        // Old password doesn't match
        header('Location: resetpassword.php?error=incorrect_old_password');
    }
}

$conn->close();
?>
