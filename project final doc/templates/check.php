<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userid = $_POST['username'];
    $password = $_POST['password'];

    $conn = mysqli_connect("localhost", "root", "", "project");

    if (!$conn) {
        die("Connection failed");
    }

    $query = "SELECT * FROM users WHERE userid = '$userid' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "success";
        
    } else {
        echo "failure";
    }

    mysqli_close($conn);
}
?>
