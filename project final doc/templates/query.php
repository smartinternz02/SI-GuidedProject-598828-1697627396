<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $fullName = $_POST['full_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "CREATE TABLE IF NOT EXISTS query (
        id INT AUTO_INCREMENT PRIMARY KEY,
        full_name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        message TEXT
    )";

    if ($conn->query($sql) === TRUE) {
        $insertQuery = "INSERT INTO query (full_name, email, message) VALUES ('$fullName', '$email', '$message')";
        if ($conn->query($insertQuery) === TRUE) {
            echo "Data saved successfully";
        } else {
            echo "Error: " . $insertQuery . "<br>" . $conn->error;
        }
    } else {
        echo "Error creating table: " . $conn->error;
    }
}

$conn->close();
?>
