<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="MainPage.css">
    <title>College Club</title>
    <style>
        /* Your existing styles */
        .x {
            margin-bottom: 10px; /* Adjust as needed */
        }
        #x1 {
            background-color: rgb(179, 233, 196);
            display: grid;
            font-size: x-large;
            align-items: initial;
            grid-row:1;
            grid-column: 1 / span 4;
            justify-content: center;
        }
        #x1 img {
            width: 100%;
            height: auto;
        }
        #x2 {
            background-color:#f5eafa;
            display: grid;
            font-size: x-large;
            align-items: initial;
            grid-row: 2;
            grid-column: 1 / span 2;
            justify-content: center;
        }
        #x3 {
            background-color: #B0F4F2;
            display: grid;
            font-size: x-large;
            align-items: initial;
            grid-row: 2;
            grid-column: 3 / span 2;
            justify-content: center;
        }
        #x4 {
            background-color: #f7e6ff;
            display: grid;
            font-size: x-large;
            align-items: initial;
            grid-row: 3;
            grid-column: 1 / span 2;
            justify-content: center;
        }
        #x5 {
            background-color: #f7e6ff;
            display: grid;
            font-size: x-large;
            align-items: initial;
            grid-row: 3;
            grid-column: 3 / span 2;
            justify-content: center;
        }
        #x6 {
            background-color:#c7abd4;
            display: grid;
            font-size: x-large;
            align-items: initial;
            grid-row: 4;
            grid-column: 1 / span 4;
            justify-content: center;
        }
        #x7 {
            background-color: #d2bbdd;
            display: grid;
            font-size: x-large;
            align-items: initial;
            grid-row: 5;
            grid-column: 1 / span 4;
            justify-content: center;
        }
        .main {
            width: 98vw;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            border: 3px solid;
            display: grid;
            justify-content: space-evenly;
            grid-template-columns: 2fr 1fr 1fr 1fr ;
            scroll-behavior: smooth;
        }
        .read-more-button {
            display: inline-block;
            background-color:#bb1dcc;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }
        
        .member-container {
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            flex-wrap: wrap;
          }
          .member-card {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            display: inline-block;
            flex: 0 0 calc(33.33% - 20px); /* Adjust the width as needed */
            box-sizing: border-box;
          }
          .member-img {
            max-width:100px;
            max-height:100px;
          }
          #more-button {
            display: none;
          }
    </style>
    <script>
        const menuLinks = document.querySelectorAll('.menu a');

        menuLinks.forEach(link => {
            link.addEventListener('click', smoothScroll);
        });

        function smoothScroll(event) {
            event.preventDefault();
            const targetId = event.target.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            targetElement.scrollIntoView({ behavior: 'smooth' });
        }
        function showMore() {
            var moreButton = document.getElementById("more-button");
            moreButton.style.display = "none";
            var hiddenMembers = document.getElementsByClassName("hidden");
            for (var i = 0; i < hiddenMembers.length; i++) {
              hiddenMembers[i].style.display = "inline-block";
            }}
    </script>
</head>
<body>
    <header>
        <div class="logo">
            <img src="Images/logoiet.png" alt="Club Logo">
        </div>
        <div class="welcome">
            Welcome! <br>
            <a href="login.php">Login</a><br><a href="register.php">Signin</a>
        </div>
    </header>

    <nav class="menu">
        <ul>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="register.php">Membership Registration</a></li>
            
            <li><a href="members.php">Members</a></li>
            <li><a href="contact.php">Help Us</a></li>
        </ul>
    </nav>
    <div class="main">
        <div class="x" id="x1">
            <img src="Images/KKK_2305.jpg" alt="Image Description">
        </div>
        <div class="x" id="x2"> 
            <p><br><br>ABOUT THE IET <br><br>
            Working to engineer a better world <br><br>
            We are the IET and we inspire, inform and influence the global engineering community to engineer a better world. As a diverse home across engineering and technology, we share knowledge that helps make better sense of the world in order to solve the challenges that matter. It’s why we are uniquely placed to champion engineering.</p> 
            <a href="about.php" class="read-more-button">Read More</a>
        </div>
        <div class="x" id="x3">
            <img src="Images/pic1.webp" alt="Image Description" style="width: 100%; height: 100%;">
        </div>
        <div class="x" id="x4" style="padding: 20px;">
            <h2>Become a Member</h2>
            <p>Join us and you’ll be part of more than just a membership organisation.</p>
            <p>We’re here to support our members – people like you – at every stage of their career, to champion engineering and inspire technology innovation.</p>
            <p>From connecting with a thriving global community of like-minded professionals to pushing the boundaries to solve the challenges that matter to all of us, we will help you to achieve great things.</p>
            <a href="register.php">Join us today</a>
        </div>
        
        <div class="x" id="x5" style="background-color: #f7e6ff; padding: 20px; position: relative;">
            <!-- Content of x5 -->
            <div style="position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%); background-color:#bb1dcc; padding: 10px; border-radius: 5px; box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);">
                <p>Ready to get started?</p>
                <a href="register.php" style="background-color: green; color: white; padding: 5px 10px; border-radius: 3px; text-decoration: none;">Register</a>
            </div>
            
        </div>
        
        <div class="x" id="x6" style="background-color: #e6b3ff; padding: 20px; position: relative; overflow: hidden;">
            <h2>Recent Events</h2>
            <div style="display: flex; overflow-x: auto; white-space: nowrap;">
                <!-- Event 1 -->
                <div style="flex: 0 0 auto; margin-right: 20px; background-color: white; padding: 10px; border-radius: 5px; box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);">
                    <img src="Images/pic2.png" alt="Event 1" style="width: 100px; height: 100px; object-fit: cover; border-radius: 5px;">
                    <p><h6>The workshop on "How to build cloud infrastructure" was an enlightening event <br>
                        conducted by the IET On Campus VIT-AP on 10th June, 2023. The workshop was highly <br>
                        informative and valuable. Students were inspired by the speaker at the workshop and <br>
                        were motivated to take action towards their career goals.</h6>
                    </p>
                </div>
                
                <!-- Event 2 -->
                <div style="flex: 0 0 auto; margin-right: 20px; background-color: white; padding: 10px; border-radius: 5px; box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);">
                    <img src="Images/pic3.png" alt="Event 2" style="width: 100px; height: 100px; object-fit: cover; border-radius: 5px;">
                    <p>The best investment you can make is in yourself, and workshops are a <br>
                        great way to do it. IET On Campus VIT-AP is here with a great opportunity<br>
                         for you to expand your knowledge and skills.<br>
                        We are conducting a workshop on "How to build cloud infrastructure".<br> 
                        This workshop includes building Cloud Infrastructure procedures <br>
                        and hands-on sessions on Microsoft Azure.
                    </p>
                </div>
                
                <!-- Add more events here -->
            </div>
        </div>
        
        <div class="x" id="x7">
            <div class="member-container">
              <div class="member-card">
                <img class="member-img" src="Images/kk.jpg" alt="Member 1">
                <h2>Karthik Jammalamadugu</h2>
                <p>Skills: Web Development, Graphic Design</p>
                <p>Education: Bachelor's in Computer Science</p>
              </div>
              <div class="member-card hidden">
                <img class="member-img" src="Images/mbb.jpg" alt="Member 2">
                <h2>Bhanu Mamidikuduru</h2>
                <p>Skills: Marketing, Event Planning</p>
                <p>Education: Bachelor's in Business Administration</p>
              </div>
              <!-- More member cards can be added here with the "hidden" class -->
            </div>
            <button id="more-button" onclick="showMore()">Show More</button>
          </div>
    </div>

    <a href="#top" class="back-to-top">Back to Top</a>

    <footer>
        <div class="footer-content">
            <div class="contact-us">
                <a href="contact.php">Contact Us</a>
            </div>
            
            <div class="social-media-links">
                <a href="#"><img src="path_to_facebook_icon.png" alt="Facebook"></a>
                <a href="#"><img src="path_to_twitter_icon.png" alt="Twitter"></a>
                <a href="#"><img src="path_to_instagram_icon.png" alt="Instagram"></a>
                <!-- Add more social media icons and links as needed -->
            </div>
            <div class="signup">
                <a href="login.php">Sign Up</a>
                </div>
            <div class="help-us">
                <a href="contact.php">Help Us</a>
            </div>
        </div>
    </footer>
</body>
</html>
