<?php
session_start();
echo "<form action='t3.php' method='POST'>
	Enter your login:<input type='text' name='name'/>
	Enter your password:<input type='password' name='password'/>
	<input value='Submit' name='submit' type='submit'/>
	</form>";
if(isset($_POST['submit']) && isset($_POST['name']) && isset($_POST['password'])){
	$submitButton = $_POST['submit'];
	$Name = $_POST['name'];
	$Password = $_POST['password'];
	if($submitButton){
		if(!empty($Name) && !empty($Password)){
			setcookie("name",json_encode($Name),time()+3600);
			setcookie("password", json_encode($Password),time()+3600);
			$_SESSION["name"] = $Name;
			$_SESSION["password"] = $Password;
		}
	}
}
if(isset($_POST['submit']) && (!isset($_POST['name']) || !isset($_POST['password']))){
	echo "Please write your login and password";
}
?>


<?php
$conn = mysqli_connect("localhost","root","","task11");
$results = $conn->query("SELECT login, password FROM check_user");
if(isset($_POST['submit']) && !empty($_SESSION['name']) && !empty($_SESSION['password'])){
$IsItDone = "no";
	if ($results->num_rows > 0) {
		while($row = $results->fetch_assoc()) {
			$name = $_SESSION["name"];
			$password = $_SESSION["password"];
			if($row['login']==$name && $row['password']==$password){
				echo "Authentication done";
				$IsItDone = "yes";
			}
		}
	}
	if($IsItDone=="no"){
		echo "Please check your login or password";
	}
}
?>