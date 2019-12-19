<html>
<head>
	<title>Admin Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="cssAdmin.css">
	<script src="jsAdmin.js" defer></script>
</head>
<body style="overflow-x: hidden;">
<header>
	<div class="menu">
		<img src="laptop-64.png">
		<h3>Admin tools</h3>
		<a href="../MainPage/Main Page.html">HOME</a>
		<a href="../ListPage/List Page.html">GOODS</a>
		<a href="#">ABOUT</a>
		<a href="#">NEWS</a>
	</div>
</header>
<div class="wholeFunc">
	<div id="buttonContainer" class="boxWords">
		<div class="head">ADD and DELETE buttons:</div>
		<button onclick="showPanel(0)"><img src="plus-64.png"><p>ADD ITEM</p></button>
		<button onclick="showPanel(1)"><img src="minus-64.png"><p>DELETE ITEM</p></button>
	</div>

	<div id="tabPanel" class="laptop_box">
		<form action="Admin Page.php" method="POST">
		<h2>Add product for sale(laptop)</h2>
		<div class="txt">Enter product type: ultrabook, netbook, gaminglaptop</div>
		<input type="text" name="type">
		<div class="txt">Enter product name:</div>
		<input type="text" name="name">
		<div class="txt">Enter product characteristic:</div>
		<input type="text" name="characteristic">
		<div class="txt">Enter product price:</div>
		<input type="text" name="price">
		<div class="txtImage">Enter product image(URL):</div>
		<input class="enterImage" type="text" name="image" placeholder="It is for addition, you can add it later">
		<input type="submit" name="submit" value="Add item" class="addBtn" id="buttonAdd">
		</form>
	</div>
	<div id="tabPanel" class="laptop_box">
		<h2>Delete product for sale(laptop)</h2>
		<table>
			<tr class="toBold">
				<td>Id</td>
				<td>Product name</td>
				<td>Price</td>
				<td>Delete button</td>
			</tr>
			<tr>
				<td>1</td>
				<td>Acer Switch 3</td>
				<td>$1400</td>
				<td><button class="tbBtn">delete</button></td>
			</tr>
			<tr>
				<td>2</td>
				<td>Macbook Pro 2019</td>
				<td>$2000</td>
				<td><button class="tbBtn">delete</button></td>
			</tr>
			<tr>
				<td>3</td>
				<td>Dell XPS 13</td>
				<td>$1600</td>
				<td><button class="tbBtn">delete</button></td>
			</tr>
		</table>
	</div>
</div>
<footer><p class="bot">&copy; Designed by Darkhan</p></footer>
</body>
</html>

<?php
$conn = new mysqli("localhost", "root", "", "laptop");

if(isset($_POST['submit']) && isset($_POST['type']) && isset($_POST['name']) && isset($_POST['characteristic']) && isset($_POST['price']) && isset($_POST['image'])){
	$type = $_POST['type'];
	$name = $_POST['name'];
	$characteristic = $_POST['characteristic'];
	$price = $_POST['price'];
	$image = $_POST['image'];
	$ItOk = "no";
	if($_POST['submit']){
		if(!empty($type) && !empty($name) && !empty($characteristic) && !empty($price) && !empty($image)){
			$results = $conn->query("SELECT id, model FROM models");
			while($row = $results->fetch_assoc()){
				if($row['model'] == $name){
					$IsOk = "ok";
					$id = $row['id'];
				}
			}
			if($IsOk=="ok"){
				$sql = "INSERT INTO".$type."(model_number, title, image, price) VALUES"."('".$id."', '".$characteristic."', '".$image."', '".$price."')";
				$conn->query($sql);
			}
			else{
				echo "go";
			}
		}
	}
	echo "Something wrong happened ...";
}
?>