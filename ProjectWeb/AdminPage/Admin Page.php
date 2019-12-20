<html>
<head>
	<title>Admin Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--<link rel="stylesheet" type="text/css" href="cssAdmin.css">-->
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
		<!--<button onclick="showPanel(0)"><img src="plus-64.png"><p>ADD ITEM</p></button>
		<button onclick="showPanel(1)"><img src="minus-64.png"><p>DELETE ITEM</p></button>-->
		<a href="Admin Page.php?page=addItem"><p>ADD ITEM</p></a>
		<a href="Admin Page.php?page=deleteItem"><p>DELETE ITEM</p></a>
	</div>
	<div id="tabPanel" class="laptop_box">
		<?php
		if(isset($_GET['page'])){
			if($_GET['page']=="deleteItem"){
				echo "<h2>Delete product for sale(laptop)</h2>";
				$counter = 1;
				$conn = new mysqli("localhost", "root", "", "laptop");
				$results1 = $conn->query("SELECT models.model AS model, ultrabook.title AS title, ultrabook.image AS image, ultrabook.price AS price FROM models, ultrabook WHERE models.id = ultrabook.model_number");

				$results2 = $conn->query("SELECT models.model AS model, netbook.title AS title, netbook.image AS image, netbook.price AS price FROM models, netbook WHERE models.id = netbook.model_number");

				$results3 = $conn->query("SELECT models.model AS model, gaminglaptop.title AS title, gaminglaptop.image AS image, gaminglaptop.price AS price FROM models, gaminglaptop WHERE models.id = gaminglaptop.model_number");

				echo "<table>
					<tr class='toBold'>
						<td>Id</td>
						<td>Product name</td>
						<td>Price</td>
						<td>Delete button</td>
					</tr>";
				if ($results1->num_rows > 0){
					while($row = $results1->fetch_assoc()) {
						echo "<tr>
						<td>".$counter."</td>
						<td>".$row['model']."</td>
						<td>$".$row['price']."</td>
						<td><a href='Admin Page.php?delete=".$counter."ultrabook"."' class='tbBtn'>delete</a></td>
					</tr>";$counter = $counter + 1;
					}
				}
				if ($results2->num_rows > 0){
					while($row = $results2->fetch_assoc()) {
						echo "<tr>
						<td>".$counter."</td>
						<td>".$row['model']."</td>
						<td>$".$row['price']."</td>
						<td><a href='Admin Page.php?delete=".$counter."netbook"."' class='tbBtn'>delete</a></td>
					</tr>";$counter = $counter + 1;
					}
				}
				if ($results3->num_rows > 0){
					while($row = $results3->fetch_assoc()) {
						echo "<tr>
						<td>".$counter."</td>
						<td>".$row['model']."</td>
						<td>$".$row['price']."</td>
						<td><a href='Admin Page.php?delete=".$counter."gaminglaptop"."' class='tbBtn'>delete</a></td>
					</tr>";$counter = $counter + 1;
					}
				}
				echo "</table>";
				$conn->close();
			}
			else if($_GET['page']=="addItem"){
				echo "<form action='Admin Page.php' method='POST'>
						<h2>Add product for sale(laptop)</h2>
						<div class='txt'>Enter product type: ultrabook, netbook, gaminglaptop</div>
						<input type='text' name='type'>
						<div class='txt'>Enter product name:</div>
						<input type='text' name='name'>
						<div class='txt'>Enter product characteristic:</div>
						<input type='text' name='characteristic'>
						<div class='txt'>Enter product price:</div>
						<input type='text' name='price'>
						<div class='txtImage'>Enter product image(URL):</div>
						<input class='enterImage' type='text' name='image' placeholder='It is for addition, you can add it later'>
						<input type='submit' name='submit' value='Add item' class='addBtn' id='buttonAdd'>
					</form>";
			}
		}
		if(isset($_GET['delete'])){
					$deleteId = $_GET['delete'];
					$conn = new mysqli("localhost", "root", "", "laptop");
					$results1 = $conn->query("SELECT id FROM ultrabook");

					$results2 = $conn->query("SELECT id FROM netbook");

					$results3 = $conn->query("SELECT id FROM gaminglaptop");

					if ($results1->num_rows > 0){
						while($row = $results1->fetch_assoc()){ 
							if($row['id']."ultrabook"==$deleteId){
								$sql = "DELETE FROM ultrabook WHERE id=".$row['id'];
								$conn->query($sql);
							}
						}
					}
					if ($results2->num_rows > 0){
						while($row = $results1->fetch_assoc()){ 
							if($row['id']."ultrabook"==$deleteId){
								$sql = "DELETE FROM netbook WHERE id=".$row['id'];
								$conn->query($sql);
							}
						}
					}
					if ($results3->num_rows > 0){
						while($row = $results1->fetch_assoc()){ 
							if($row['id']."ultrabook"==$deleteId){
								$sql = "DELETE FROM gaminglaptop WHERE id=".$row['id'];
								$conn->query($sql);
							}
						}
					}
					$conn->close();
					$conn = new mysqli("localhost", "root", "", "laptop");
					$results1 = $conn->query("SELECT id FROM ultrabook");

					$results2 = $conn->query("SELECT id FROM netbook");

					$results3 = $conn->query("SELECT id FROM gaminglaptop");
					if ($results1->num_rows > 0){
						$cnt = 1;
						while($row = $results1->fetch_assoc()){
							if($cnt != $row['id']){
								$sql = "UPDATE ultrabook SET id='".$cnt."' WHERE id=".$row['id'];
								$conn->query($sql);
							} 
						}
					}
					if ($results2->num_rows > 0){
						$cnt = 1;
						while($row = $results2->fetch_assoc()){
							if($cnt != $row['id']){
								$sql = "UPDATE netbook SET id='".$cnt."' WHERE id=".$row['id'];
								$conn->query($sql);
							} 
						}
					}
					if ($results3->num_rows > 0){
						$cnt = 1;
						while($row = $results3->fetch_assoc()){
							if($cnt != $row['id']){
								$sql = "UPDATE gaminglaptop SET id='".$cnt."' WHERE id=".$row['id'];
								$conn->query($sql);
							} 
						}
					}
					$conn->close();
				}
		?>
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
	$IsOk = "no";
	$count = 1;
	$countLaptop = 1;
	if($_POST['submit']){
		if(!empty($type) && !empty($name) && !empty($characteristic) && !empty($price) && !empty($image)){
			$results = $conn->query("SELECT id, model FROM models");
			while($row = $results->fetch_assoc()){
				$count = $count + 1;
				if($row['model'] == $name){
					$IsOk = "ok";
					$id = $row['id'];
				}
			}
			$results = $conn->query("SELECT id FROM ".$type);
			while($row = $results->fetch_assoc()){
				$countLaptop = $countLaptop + 1;
			}
			if($IsOk=="ok"){
				$conn = new mysqli("localhost", "root", "", "laptop");
				$sql = "INSERT INTO ".$type." (id, model_number, title, image, price) VALUES('".$countLaptop."','".$id."','".$characteristic."','".$image."','".$price."')";
				if($conn->query($sql)===TRUE){echo "OK";}
				else{echo "not ok";}
				$conn->close();
			}
			else{
				$formodel = "INSERT INTO models (id, model) VALUES('".$count."','".$name."')";
				if($conn->query($formodel)===TRUE){echo "OK";}
				$conn->close();
				$conn = new mysqli("localhost", "root", "", "laptop");
				$sql = "INSERT INTO ".$type." (id, model_number, title, image, price) VALUES('".$countLaptop."','".$count."','".$characteristic."','".$image."','".$price."')";
				if($conn->query($sql)===TRUE){echo "OK";}
				$count = 1;
				$conn->close();
			}
		}
		else{
			echo "Please enter all fields";
		}
	}
	else{
		echo "Something wrong happened ...";
	}
}
?>
