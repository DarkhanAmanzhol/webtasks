<!--Likely code was ready and functionality is understandable-->
<?php
if (isset($_GET["name"])){
	//when set it to cookie like into trash
	setcookie("name",$_GET["name"]);
}
else if (!isset($_COOKIE["name"])){
?>
<form action="t1.php">
Enter your name:<input type="text" name="name"/>
<input type="submit"/>
</form>
<?php
}
//Finds cookie, when you refresh page and delete request
else{
	echo "Hello ".$_COOKIE['name'];
}
?>