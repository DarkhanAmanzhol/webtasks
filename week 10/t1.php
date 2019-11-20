<!DOCTYPE html>
<html>

  <head>
	<style>
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
$conn = new mysqli("localhost", "root", "", "task10");

$results = $conn->query("SELECT id, maker, model, year, price, image FROM cars");

echo "<div class='cars'>";
while($row = $results->fetch_assoc()) {
    echo "<div class='car'>
    	<img width='100' height='60' src=" . $row['image'] . "/>
    	<div class='right'>
		<div class='title'>" . $row['maker'] . ' ' . $row['model'] . "</div>
		<div class='attributes'>
		  <div class='row'><div class='name'>Year:</div><div>" . $row['year'] . "</div></div>
		  <div class='row'><div class='name'>Price:</div><div>" . $row['price'].'$' . "</div></div> 
		  </div>           
		  </div>
    	</div>";
}
echo "</div>";
$conn->close();
?>
  </body>

</html>