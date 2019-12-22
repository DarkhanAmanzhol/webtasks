<!DOCTYPE html>
<html>
<head>
	<title>Project</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="cssList.css">
	<script src="jscriptList.js" defer></script>
</head>
<body style="overflow-x: hidden;">
	<div class="fixedBoard">
          <ul class="nav navbar-nav navbar-right">
          	<li><a href="#" class="login_btn">Log in / Sign up</a></li>
            <li><a href="#" class="contact">News</a></li>
            <li><a href="#" class="about">About</a></li>
            <li><a href="../MainPage/Main Page.html" class="home">Home</a></li>
            <li><div class="logophoto"><img src="laptop-64.png"></div></li>
			<li><div class="logoword">Laptop.com</div></li>
			<li><div class="phone"><img src="phone.png">+7-747-111-25-04</li>
          </ul>
	</div>
	<section class="caption">
		<h2>Find You Dream Laptop</h2>
		<h3>Macbook - Acer - Dell</h3>
	</section>
	<div class="box"><span id="spinword"></span></div>
	<div class="introLaptop">
		<a class="item" href="phpList.php?modelLaptop=ultrabook">Ultrabook</a>
		<a class="item" href="phpList.php?modelLaptop=netbook">Netbook</a>
		<a class="item" href="phpList.php?modelLaptop=gaminglaptop">Gaming Laptop</a>
	</div>
	<div class="padd"></div>
	<?php
	$conn = new mysqli("localhost", "root", "", "laptop");

	$results1 = $conn->query("SELECT models.model AS model, ultrabook.title AS title, ultrabook.name AS name, ultrabook.image AS image, ultrabook.price AS price FROM models, ultrabook WHERE models.id = ultrabook.model_number");

	$results2 = $conn->query("SELECT models.model AS model, netbook.title AS title, netbook.name AS name, netbook.image AS image, netbook.price AS price FROM models, netbook WHERE models.id = netbook.model_number");

	$results3 = $conn->query("SELECT models.model AS model, gaminglaptop.title AS title, gaminglaptop.name AS name, gaminglaptop.image AS image, gaminglaptop.price AS price FROM models, gaminglaptop WHERE models.id = gaminglaptop.model_number");

	if(isset($_GET['modelLaptop'])){
		$last_model = $_GET['modelLaptop'];
		if ($results1->num_rows > 0 && $last_model=="ultrabook") {
			echo "<table id='laptops' width='80%'>
					<col width='400px'>
				    <col width='400px'>";
		    while($row = $results1->fetch_assoc()) {
		    	echo "
					<tr>
						<td>
							<img id='good0' src=".$row['image'].">
						</td>
						<td>
							<h3>".$row['model']." ".$row['name']."</h3>
							<p>".$row['title']."</p>
						</td>
						<td>
							<h3 id='price'>$".$row['price']."</h3>
							<button class='basket' onclick='adder(".'"'.$row['model'].' '.$row['name'].'"'.")'><img src='shopping-cart.png'><span>Add to Cart</span></button>
							<img id='sale' src='sale.png'>
						</td>
					</tr>";
		    }
		    echo "</table>";
		}
		if ($results2->num_rows > 0 && $last_model=="netbook") {
			echo "<table id='laptops' width='80%'>
					<col width='400px'>
				    <col width='400px'>";
		    while($row = $results2->fetch_assoc()) {
		    	echo "
					<tr>
						<td>
							<img id='good0' src=".$row['image'].">
						</td>
						<td>
							<h3>".$row['model']." ".$row['name']."</h3>
							<p>".$row['title']."</p>
						</td>
						<td>
							<h3 id='price'>$".$row['price']."</h3>
							<button class='basket' onclick='adder(".'"'.$row['model'].' '.$row['name'].'"'.")'><img src='shopping-cart.png'><span>Add to Cart</span></button>
							<img id='sale' src='sale.png'>
						</td>
					</tr>";
		    }
		    echo "</table>";
		}
		if ($results3->num_rows > 0 && $last_model=="gaminglaptop") {
			echo "<table id='laptops' width='80%'>
					<col width='400px'>
				    <col width='400px'>";
		    while($row = $results3->fetch_assoc()) {
		    	echo "
					<tr>
						<td>
							<img id='good0' src=".$row['image'].">
						</td>
						<td>
							<h3>".$row['model']." ".$row['name']."</h3>
							<p>".$row['title']."</p>
						</td>
						<td>
							<h3 id='price'>$".$row['price']."</h3>
							<button class='basket' onclick='adder(".'"'.$row['model'].' '.$row['name'].'"'.")'><img src='shopping-cart.png'><span>Add to Cart</span></button>
							<img id='sale' src='sale.png'>
						</td>
					</tr>";
		    }
		    echo "</table>";
		}
	}
	?>
	<div class="largeBack">
		<button onclick="showCart()" id="cart">Cart</button>
		<div class="cartingInvisible" id="cartingInvisible">
			<p>You are buying:</p>
			<p id="allGoods"></p>
			<button onclick="okBack()">OK/BACK</button>
			<button onclick="Buy()">BUY</button>
		</div>
	</div>
	<footer>
            <div class="container">
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
                	<p class="right_Desc des4"><a href="../AdminPage/Admin Page.html">Admin Page</a></p>
                	<p class="right_Desc des5"><a href="../ElementPage/Element Page.html">404 PAGE NOT FOUND</a></p>
                </div>
            </div>
       </footer>
</body>
</html>
