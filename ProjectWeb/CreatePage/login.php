<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
		<link href="cssCreate.css" rel="stylesheet" type="text/css">
</head>
<body style="overflow-x: hidden;">
	<div class="fixedBoard">
          <ul class="nav">
            <li><a href="#" class="contact">News</a></li>
            <li><a href="#" class="about">About</a></li>
            <li><a href="../MainPage/Main Page.html" class="home">Home</a></li>
            <li><div class="logophoto"><img src="laptop-64.png"></div></li>
			<li><div class="logoword">Laptop.com</div></li>
			<li><div class="phone"><img src="phone.png">+7-747-111-25-04</li>
          </ul>
	</div>
<div class="container">
	<h1>Login Now / <a href="register.php">Register Now</a></h1>
	<div class="toPlace">
		<form method="POST">
			<input type="email" name="email" placeholder="Enter Your Email" class="writer"><br>
			<input type="password" name="pass" placeholder="*******" class="writer"><br>
			<input type="submit" name="login" value="Login" class="btn">
			<input type="reset" name="reset" value="Reset" class="btn">
		</form>
	</div>
</div>
	<footer>
            <div class="down">
            	<img class="centerSmile" src="smiling.png">
                <div class="col12">
                    <p class="bot">&copy; Designed by Darkhan</p>
                    <div class="space20"></div>
                </div>
                <div class="col13">
                	<p class="left">Do you know about our social media?</p>
                	<p class="left_Desc">We are small company which wants to sell and buy goods efficiently!</p>
                	<img class="leftImage" src="amazon-logo.png">
                	<img class="leftImage" src="apple-logo.png">
                	<img class="leftImage" src="facebook-logo.png">
                </div>
                <div class="col14">
                	<p class="right">About our company</p>
                	<p class="right_Desc des1">About laptops</p>
                	<p class="right_Desc des2">Care of laptops</p>
                	<p class="right_Desc des3">Carier in the Laptop.com</p>
                	<p class="right_Desc des4">Contact</p>
                	<p class="right_Desc des5">Our shops</p>
                </div>
            </div>
    </footer>
</body>
</html>
<?php
$conn = mysqli_connect("localhost","root","","user") or die("Connection Error");
?>
