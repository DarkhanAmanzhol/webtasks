<?php
$id = $_GET["id"];
$basket = [];
if (isset($_COOKIE["basket"])){
	$basket = json_decode($_COOKIE["basket"]);
}
array_push($basket,$id);
setcookie("basket",json_encode($basket));
?>
<a href="t2.php">Back</a>