<!DOCTYPE html>
<html>
<head>
  <title>Registration Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color:#a3c2c2;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }

    form {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      width: 100%;
      text-align: center;
    }

    input {
      display: block;
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      background-color: #00bcd4;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #008ba3;
    }
  </style>
</head>
<body>
  <form action="register_data.php" method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="text" name="name" placeholder="Full Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="tel" name="phno" placeholder="Phone Number" required>
    <button type="submit" name="register">Register</button>
  </form>
</body>
</html>
