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
  	<form action="t2.php">
  	<select name="carType">
  	  <option value="">Selected</option>
	  <option value="Toyota">Toyota</option>
	  <option value="BMW">BMW</option>
	  <option value="Audi">Audi</option>
	</select>
  	<input type="submit" value="filter">
  </form>
<?php
$conn = new mysqli("localhost", "root", "", "task10");

$results = $conn->query("SELECT id, maker, model, year, price, image FROM cars");

if ($results->num_rows > 0) {
	echo "<div class='cars'>";
    while($row = $results->fetch_assoc()) {
	    if(isset($_GET['carType'])){
		    $car = $_GET['carType'];
		    if($car=="Toyota"){
		    	if($row['maker']=="Toyota"){
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
		    }
		    if($car=="BMW"){
		    	if($row['maker']=="BMW"){
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
			}
			if($car=="Audi"){
		    	if($row['maker']=="Audi"){
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
			}
		}
	}
	echo "</div>";
}
$conn->close();
?>
  </body>

</html>