<?php
$servername = "localhost";
$username = "root"; // Update with your database username
$password = ""; // Update with your database password
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phno = $_POST['phno'];

    $sql = "INSERT INTO register (username, name, email, password, phoneNumber) VALUES ('$username', '$name', '$email', '$password', '$phno')";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        echo "Data saved successfully";
        $sqlUsers = "INSERT INTO users (userid, id, password) VALUES ('$username', '$username', '$password')";
        $resultUsers = mysqli_query($conn, $sqlUsers);

    } else {
        header('Location: createaccount.php?error=registration_failed');
    }
    
    mysqli_close($conn);
}

?>
