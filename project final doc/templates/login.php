<!DOCTYPE html>
<html>
<head>
  <script src="https://kit.fontawesome.com/5a61e3442a.js" crossorigin="anonymous"></script>
  <style>
    body {
      background-color: #ecf0f1;
      padding-top: 0 !important;
    }
    * {
      margin-bottom: 0;
    }
    .item-1 {
      height: 40px;
      border: 2px solid #ecf0f1;
    }
    .header1 {
      background-color: #ff5f70;
      color: white;
      display: flex;
      justify-content: space-between;
    }
    .grid-1 {
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 0;
      margin: 0;
    }

    .login-form {
      text-align: center;
      margin-top: 100px;
      border-top: 2px solid #ff5f70;
      background-color: white;
      padding: 20px;
      border-radius: 5px;
      width: 40%;
    }
    .form-style {
      padding-top: 10px;
    }
    .text-style {
      width: 270px;
      height: 30px;
      border: 2px solid #ff5f70;
      margin-bottom: 10px;
      border: none;
    }
    .icon-style {
      padding-right: 10px;
    }
    .captcha {
      background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTU03D5lvRQQFTZotuO3iuqBns1BARgu3okfENE0WCPJzeUZFqtM5mNu7Nt4Nmowuq71Q&usqp=CAUv");
      height: 40px;
      width: 200px;
      background-size: cover;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      margin: 0 auto;
      margin-top: 40px;
      border: 2px solid #ecf0f1;
    }
    p {
      margin-bottom: 0;
    }

    .captchaenter {
      height: 30px;
      width: 198px;
    }
    .no-margin {
      margin-top: 0;
    }
    .password-ss {
      margin-top: 20px;
      text-align: start;
    }
    .button1 {
      margin-top: 40px;
      height: 35px;
      width: 80px;
      background-color: #ff5f70;
      color: white;
      border-radius: 2px;
      border: 1px solid #ff5f70;
      cursor: pointer;
    }
    .sign-in {
      display: flex;
      justify-content: space-between;
    }
    .footer1 {
      margin-top: 50px;
      background-color: rgb(250, 210, 250);
    }
  </style>

</head>
<body>
  <header class="header1">
    <img
      
      height="80"
      width="250"
    />
    <h2>Login </h2>
  </header>

  <section class="grid-1">
    <div class="login-form">
      <p style="margin-right: 10px">Login</p>
      <hr />
      <form class="form-style" action="check.php" method="post">
        <div class="item-1">
          <input
            type="text"
            id="username1"
            name="username"
            class="text-style"
            placeholder="Username"
          />
          <i class="fa-solid fa-user icon-style"></i>
        </div>

        <div id="username-error" style="color: red"></div>
        <br />
        <div class="item-1" id="item-1">
          <input
            type="password"
            id="password"
            name="password"
            class="text-style"
            placeholder="Password"
          />
          <i class="fa-solid fa-lock icon-style"></i>
          <div id="password-error" style="color: red; display: none">
            Password must be of 8 characters long.
          </div>
        </div>

        <p class="captcha" id="captcha">21BCE9532</p>
        <input type="text" id="captchabox" name="captcha" class="captchaenter" />
        <div id="captcha-error" style="color: red; display: none">
          Captcha must be the same
        </div>
        <button class="button1" type="submit">Sign in</button>
      </form>
    </div>
  </section>

  <footer class="footer1">
    <p>Copyright &copy; <span>Vitamin Info</span></p>
  </footer>

  <script>
    const characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    const charactersLength = characters.length;
    var length = 6;
    let randomString = "";
    for (let i = 0; i < length; i++) {
      randomString += characters[Math.floor(Math.random() * charactersLength)];
    }
  
    document.getElementById("captcha").innerHTML = randomString;
  
    function fun() {
      var uname = document.getElementById("username").value;
      var password = document.getElementById("password").value;
      var captcha = document.getElementById("captchabox").value;
      if (captcha === randomString) {
        // Redirect all users to the portal homepage
        window.location.href = "portal_homepage.html";
      } else {
        document.getElementById("captcha-error").style.display = "inline";
      }
    }
  </script>
</body>
</html>