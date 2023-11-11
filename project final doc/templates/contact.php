<html class="hydrated"><head><style data-styles="">ion-icon{visibility:hidden}.hydrated{visibility:inherit}</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Footer</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
*
{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;
}
.contact 
{
	position: relative;
	min-height: 100vh;
	padding: 50px 100px;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	background:#e6faff;
}
.contact .content 
{
	max-width: 800px;
	text-align: left;
}
.contact .content h2 
{
	font-size: 3em;
	color:#006680;
	font-weight: 500;
}
.contact .content p 
{
	color:#3d5c5c;
	font-size: 1.1em;
	font-weight: 300;
}
.container 
{
	width: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	gap: 50px;
	margin-top: 30px;
}
.container .contactInfo 
{
	width: 50%;
	display: flex;
	flex-direction: column;
}
.container .contactInfo .box 
{
	position: relative;
	padding: 20px 0;
	display: flex;
	cursor: pointer;
}
.container .contactInfo .box .icon 
{
	min-width: 60px;
	height: 60px;
	background:white;
	display: flex;
	justify-content: center;
	align-items: center;
	font-size: 1.75em;
	transition: 0.5s;
}
.container .contactInfo .box:hover .icon 
{
	background: #00bcd4;
	color:black;
}
.container .contactInfo .box .text 
{
	display: flex;
	flex-direction: column;
	margin-left: 20px;
	font-size: 1.1em;
	color: #2d5986;
	font-weight: 300;
}
.container .contactInfo .box .text h3 
{
	font-weight: 500;
	color: #00bcd4;
}
.container .contactInfo .txt
{
	color: #e91e63;
	margin-top: 50px;
	font-weight: 500;
	padding-left: 10px;
	border-left: 50px solid #e91e63;
	line-height: 1em;
}
.sci 
{
	position: relative;
	display: flex;
	gap: 30px;
	margin: 20px 0;
}
.sci li 
{
	list-style: none;
}
.sci li a 
{
	color: black;
	font-size: 2em;
	transition: 0.5s;
}
.sci li a:hover 
{
	color: #00bcd4;
}
.container .contactForm
{
	position: relative;
	width: 40%;
	background: #fff;
	min-height: 100px;
	padding: 60px;
} 
.container .contactForm h2 
{
	font-size: 2em;
	color: #333;
	font-weight: 500;
}
.container .contactForm .inputBox 
{
	position: relative;
	width: 100%;
	margin-top: 20px;
}
.container .contactForm .inputBox input, 
.container .contactForm .inputBox textarea 
{
	width: 100%;
	padding: 5px 0;
	font-size: 1.1em;
	margin: 10px 0;
	border: none;
	border-bottom: 2px solid #333;
	outline: none;
	resize: none;
}
.container .contactForm .inputBox span 
{
	position: absolute;
	left: 0;
	pointer-events: none;
	padding: 5px 0;
	margin: 10px 0;
	font-size: 1.1em;
	color: #666;
	transition: 0.5s;
}
.container .contactForm .inputBox input:focus ~ span, 
.container .contactForm .inputBox textarea:focus ~ span,
.container .contactForm .inputBox input:valid ~ span, 
.container .contactForm .inputBox textarea:valid ~ span 
{
	color: #e91e63;
	font-size: 0.9em;
	transform: translateY(-20px);
}
.container .contactForm .inputBox input[type="submit"]
{
	width: 100px;
	background: #00bcd4;
	color: #fff;
	border: none;
	cursor: pointer;
	padding: 10px;
	font-size: 1.1em;
	font-weight: 500;
}

/* lets make it responsive */
@media (max-width: 500px)
{
	.contact
	{
		padding: 50px;
	}
	.container
	{
		flex-direction: column;
	}
	.container .contactInfo,
	.container .contactForm
	{
		width: 100%;
	}
	.container .contactForm
	{
		padding: 50px 30px;
	}
}
</style>
</head>
<body>
	<section class="contact">
		<div class="content">
			<h2>Contact Us</h2>
			<p>For any general enquiries, you can use the contact details listed below.<br>
				Are you looking for specific information?
				You can get in touch with the Query by filling the query details below.</p>
		</div>
		<div class="container">
			<div class="contactInfo">
				<div class="box">
					<div class="icon"><ion-icon name="location-outline" role="img" class="md hydrated" aria-label="location outline"></ion-icon></div>
					<div class="text">
						<h3>Address</h3>
						<p>VIT-AP UNIVERSITY,Amaravthi,Andhra Pradesh,522237.</p>
					</div>
				</div>
				<div class="box">
					<div class="icon"><ion-icon name="call-outline" role="img" class="md hydrated" aria-label="call outline"></ion-icon></div>
					<div class="text">
						<h3>Phone</h3>
						<p>9532360000</p>
					</div>
				</div>
				<div class="box">
					<div class="icon"><ion-icon name="mail-outline" role="img" class="md hydrated" aria-label="mail outline"></ion-icon></div>
					<div class="text">
						<h3>Email</h3>
						<p>karthikeya.21bce9536@vitapstudent.ac.in</p>
					</div>
				</div>
				<h2 class="txt">Connect with us</h2>
				<ul class="sci">
					<li><a href="#"><ion-icon name="logo-facebook" role="img" class="md hydrated" aria-label="logo facebook"></ion-icon></a></li>
					<li><a href="#"><ion-icon name="logo-twitter" role="img" class="md hydrated" aria-label="logo twitter"></ion-icon></a></li>
					<li><a href="#"><ion-icon name="logo-linkedin" role="img" class="md hydrated" aria-label="logo linkedin"></ion-icon></a></li>
					<li><a href="#"><ion-icon name="logo-instagram" role="img" class="md hydrated" aria-label="logo instagram"></ion-icon></a></li>
				</ul>
			</div>

			<div class="contactForm">
			<form method="post" action="query.php">
				<h2>Query</h2>
				<div class="inputBox">
					<input type="text" name="full_name" required="required">
					<span>Full Name</span>
				</div>
				<div class="inputBox">
					<input type="text" name="email" required="required">
					<span>Email</span>
				</div>
				<div class="inputBox">
					<textarea name="message" required="required"></textarea>
					<span>Type your Message...</span>
				</div>
				<div class="inputBox">
					<input type="submit" name="submit" value="Send">
				</div>
			</form>

			</div>
		</div>
	</section>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule="" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body></html>