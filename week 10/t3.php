<!DOCTYPE html>
<html>

  <head>
	<style>
	/* Styles go here */
		.car{
		  display:flex;
		  border:1px solid black;
		  border-radius:5px;
		  width:250px;
		  padding:10px;
		}
		.title{
		  font-size:16px;
		  font-weight:bold;
		}
		.attributes .row{
		  display:flex;
		}
		.attributes .row div{
		  width:50%;
		}
		.attributes .row .name{
		  font-weight:bold;
		}
		.car img{
		  margin-right:10px;
		}
	</style>
  </head>

  <body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "task10";

$mysql = new mysqli($servername, $username, $password, $db);

$result = $mysql -> query("SELECT makers.id AS makersid, makers.title AS makerstitle, cars2.id AS cars2id, cars2.model AS cars2model, cars2.image AS image, cars2.year AS year, cars2.price AS price FROM makers, cars2 WHERE makers.id = cars2.maker_id");

while($rows = $result -> fetch_assoc()){
		echo "<p>id: ". $rows['cars2id']. "<br />Maker_ID: ". $rows['makersid']."<br />Model: " .$rows['cars2model']. "<br />Makers: ".$rows['makerstitle']."</p>";
		echo "<div class='car'>
    	<img width='100' height='60' src=" . $rows['image'] . "/>
    	<div class='right'>
		<div class='title'>" . $rows['makerstitle'] . ' ' . $rows['cars2model'] . "</div>
		<div class='attributes'>
		  <div class='row'><div class='name'>Year:</div><div>" . $rows['year'] . "</div></div>
		  <div class='row'><div class='name'>Price:</div><div>" . $rows['price'].'$' . "</div></div> 
		  </div>           
		  </div>
    	</div>";
}
$mysql->close();
?>
  </body>

</html>