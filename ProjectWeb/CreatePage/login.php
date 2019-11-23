<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>


<div class="container">
	<div class="row justify-content-center mt-5">
		<div class="">
			<form method="POST">
				<input type="email" name="email" placeholder="Enter Your Email">
				<input type="password" name="pass" placeholder="*******">
				<input type="checkbox" name="check">
				<input type="submit" name="login" value="Login">
				<input type="reset" name="reset"
			</form>
		</div>
	</div>
</div>
</body>
</html>
<?php
$conn = mysqli_connect("localhost","root","","user") or die("Connection Error");
?>
