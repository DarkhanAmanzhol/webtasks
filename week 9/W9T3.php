<html>
<head><style>
.cards{display:flex;flex-wrap:wrap;width:700px;margin-left:auto;margin-right:auto;}
.cards .card{width:250px;border:1px solid red;border-radius:5px;display:flex;margin:10px;}
.menu {display:block;width:700px;margin-left:auto;margin-right:auto;}
.card .title{font-size:20px;font-weight:bold;}
.card .price{color:green;}
.card .description{display:flex;flex-direction:column;}
.card .price{flex-grow:1;}
.card .year{font-weight:bold;font-size:18px;}
.card .images{
	width: 120px;
	height: 120px;
}
</style></head>
<body>

<div class="cards">
<?php
$cars = [["maker"=>"Toyota","model"=>"Carina","year"=>2001,"price"=>20000,"image"=>"https://a.d-cd.net/cea52es-480.jpg"],["maker"=>"Toyota","model"=>"Camry","year"=>2005,"price"=>30000,"image"=>"https://img.pngio.com/new-2019-toyota-camry-le-4dr-car-in-jacksonville-93316-camry-png-640_480.png"],["maker"=>"Audi","model"=>"A8","year"=>1986,"price"=>12000,"image"=>"http://www.theautohost.com/_contentPages/vehicleContentPages/audi/2017/A8%20L/images/2017-Audi-A8L-exterior-grille.jpg"],
["maker"=>"Audi","model"=>"A6","year"=>2005,"price"=>30000,"image"=>"https://www.cstatic-images.com/car-pictures/xl/USC60AUC021B021001.png"],
["maker"=>"BMW","model"=>"X5","year"=>2007,"price"=>17000,"image"=>"https://www.bmw.ru/content/dam/bmw/marketRU/bmw_ru/all-models/x-series/x5/2015/at-a-glance/x5_at-a-glance_stagepresentation.jpg/_jcr_content/renditions/cq5dam.resized.img.1680.large.time1452864075065.jpg"],["maker"=>"BMW","model"=>"X5","year"=>2015,"price"=>19000,"image"=>"https://www.bmw.ru/content/dam/bmw/marketRU/bmw_ru/all-models/x-series/x5/2015/at-a-glance/x5_at-a-glance_stagepresentation.jpg/_jcr_content/renditions/cq5dam.resized.img.1680.large.time1452864075065.jpg"],["maker"=>"BMW","model"=>"Model 7","year"=>2014,"price"=>22000,"image"=>"https://www.bmw.ru/content/dam/bmw/marketRU/bmw_ru/all-models/x-series/x5/2015/at-a-glance/x5_at-a-glance_stagepresentation.jpg/_jcr_content/renditions/cq5dam.resized.img.1680.large.time1452864075065.jpg"],
["maker"=>"Lada","model"=>"Granta","year"=>2017,"price"=>7000,"image"=>"http://www.kolesa.ru/uploads/2017/06/Lada-Granta-restyle-front1-1600x0-c-default.jpg"]
];
$array1 = [];
$array2 = [];
$array3 = [];
$array4 = [];
$sign = "";
$maker = "";
/********************************************************************************************************/
for($i=0; $i<count($cars);$i++){
	if($cars[$i]['maker'] == 'Toyota'){
		$box1 = ["maker"=>$cars[$i]['maker'],"model"=>$cars[$i]['model'],"year"=>$cars[$i]['year'],"price"=>$cars[$i]['price'],"image"=>$cars[$i]['image']];
		array_push($array1, $box1);
	}
}
for($i=0; $i<count($cars);$i++){
	if($cars[$i]['maker'] == 'BMW'){
		$box2 = ["maker"=>$cars[$i]['maker'],"model"=>$cars[$i]['model'],"year"=>$cars[$i]['year'],"price"=>$cars[$i]['price'],"image"=>$cars[$i]['image']];
		array_push($array2, $box2);
	}
}
for($i=0; $i<count($cars);$i++){
	if($cars[$i]['maker'] == 'Audi'){
		$box3 = ["maker"=>$cars[$i]['maker'],"model"=>$cars[$i]['model'],"year"=>$cars[$i]['year'],"price"=>$cars[$i]['price'],"image"=>$cars[$i]['image']];
		array_push($array3, $box3);
	}
}
for($i=0; $i<count($cars);$i++){
	if($cars[$i]['maker'] == 'Lada'){
		$box4 = ["maker"=>$cars[$i]['maker'],"model"=>$cars[$i]['model'],"year"=>$cars[$i]['year'],"price"=>$cars[$i]['price'],"image"=>$cars[$i]['image']];
		array_push($array4, $box4);
	}
}
/********************************************************************************************************/
if(isset($_GET['maker'])){
	$maker = $_GET['maker'];
}
if($maker == 'Toyota'){
	if(!isset($_GET['year']) && !isset($_GET['price'])){
		for($i=0; $i<count($cars);$i++){
			if($cars[$i]['maker'] == 'Toyota'){
				echo "<div class='card'>
					<img class='images' src=" . $cars[$i]['image'] . ">
					<div class='description'>
					<div class='title'>" . $cars[$i]['maker'] . ' ' . $cars[$i]['model'] . "</div>
					<div class='price'>" . $cars[$i]['price'] . '$' . "</div>
					<div class='year'>" . $cars[$i]['year'] . 'years' . "</div>
					</div>
					</div>";
			}
		}
	}
	else{
		$sign = 'Toyota';
	}
}
if($maker == 'BMW'){
	if(!isset($_GET['year']) && !isset($_GET['price'])){
		for($i=0; $i<count($cars);$i++){
			if($cars[$i]['maker'] == 'BMW'){
				echo "<div class='card'>
					<img class='images' src=" . $cars[$i]['image'] . ">
					<div class='description'>
					<div class='title'>" . $cars[$i]['maker'] . ' ' . $cars[$i]['model'] . "</div>
					<div class='price'>" . $cars[$i]['price'] . '$' . "</div>
					<div class='year'>" . $cars[$i]['year'] . 'years' . "</div>
					</div>
					</div>";
			}
		}
	}
	else{
		$sign = 'BMW';
	}
}
if($maker == 'Audi'){
	if(!isset($_GET['year']) && !isset($_GET['price'])){
		for($i=0; $i<count($cars);$i++){
			if($cars[$i]['maker'] == 'Audi'){
				echo "<div class='card'>
					<img class='images' src=" . $cars[$i]['image'] . ">
					<div class='description'>
					<div class='title'>" . $cars[$i]['maker'] . ' ' . $cars[$i]['model'] . "</div>
					<div class='price'>" . $cars[$i]['price'] . '$' . "</div>
					<div class='year'>" . $cars[$i]['year'] . 'years' . "</div>
					</div>
					</div>";
			}
		}
	}
	else{
		$sign = 'Audi';
	}
}
if($maker == 'Lada'){
	if(!isset($_GET['year']) && !isset($_GET['price'])){
		for($i=0; $i<count($cars);$i++){
			if($cars[$i]['maker'] == 'Lada'){
				echo "<div class='card'>
					<img class='images' src=" . $cars[$i]['image'] . ">
					<div class='description'>
					<div class='title'>" . $cars[$i]['maker'] . ' ' . $cars[$i]['model'] . "</div>
					<div class='price'>" . $cars[$i]['price'] . '$' . "</div>
					<div class='year'>" . $cars[$i]['year'] . 'years' . "</div>
					</div>
					</div>";
			}
		}
	}
	else{
		$sign = 'Lada';
	}
}
if(isset($_GET['year'])){
	$year = $_GET['year'];
	if($year == 'old'){
		for($i=0; $i<count($cars);$i++){
			if($cars[$i]['year'] < 2011 && $sign == ""){
				echo "<div class='card'>
					<img class='images' src=" . $cars[$i]['image'] . ">
					<div class='description'>
					<div class='title'>" . $cars[$i]['maker'] . ' ' . $cars[$i]['model'] . "</div>
					<div class='price'>" . $cars[$i]['price'] . '$' . "</div>
					<div class='year'>" . $cars[$i]['year'] . 'years' . "</div>
					</div>
					</div>";
			}
			if($sign=="Toyota"){
				for($j=0; $j<count($array1);$j++){
				if($array1[$j]['year'] < 2011){
					echo "<div class='card'>
						<img class='images' src=" . $array1[$j]['image'] . ">
						<div class='description'>
						<div class='title'>" . $array1[$j]['maker'] . ' ' . $array1[$j]['model'] . "</div>
						<div class='price'>" . $array1[$j]['price'] . '$' . "</div>
						<div class='year'>" . $array1[$j]['year'] . 'years' . "</div>
						</div>
						</div>";
					}
				}
				break;
			}
			if($sign=="BMW"){
				for($j=0; $j<count($array2);$j++){
				if($array2[$j]['year'] < 2011){
					echo "<div class='card'>
						<img class='images' src=" . $array2[$j]['image'] . ">
						<div class='description'>
						<div class='title'>" . $array2[$j]['maker'] . ' ' . $array2[$j]['model'] . "</div>
						<div class='price'>" . $array2[$j]['price'] . '$' . "</div>
						<div class='year'>" . $array2[$j]['year'] . 'years' . "</div>
						</div>
						</div>";
					}
				}
				break;
			}
			if($sign=="Audi"){
				for($j=0; $j<count($array3);$j++){
				if($array3[$j]['year'] < 2011){
					echo "<div class='card'>
						<img class='images' src=" . $array3[$j]['image'] . ">
						<div class='description'>
						<div class='title'>" . $array3[$j]['maker'] . ' ' . $array3[$j]['model'] . "</div>
						<div class='price'>" . $array3[$j]['price'] . '$' . "</div>
						<div class='year'>" . $array3[$j]['year'] . 'years' . "</div>
						</div>
						</div>";
					}
				}
				break;
			}
			if($sign=="Lada"){
				for($j=0; $j<count($array4);$j++){
				if($array4[$j]['year'] < 2011){
					echo "<div class='card'>
						<img class='images' src=" . $array4[$j]['image'] . ">
						<div class='description'>
						<div class='title'>" . $array4[$j]['maker'] . ' ' . $array4[$j]['model'] . "</div>
						<div class='price'>" . $array4[$j]['price'] . '$' . "</div>
						<div class='year'>" . $array4[$j]['year'] . 'years' . "</div>
						</div>
						</div>";
					}
				}
				break;
			}
		}
	}
}
if(isset($_GET['price'])){
	$price = $_GET['price'];
	if($price == 'expensive'){
		for($i=0; $i<count($cars);$i++){
			if($cars[$i]['price'] > 20000 && $sign == ""){
				echo "<div class='card'>
					<img class='images' src=" . $cars[$i]['image'] . ">
					<div class='description'>
					<div class='title'>" . $cars[$i]['maker'] . ' ' . $cars[$i]['model'] . "</div>
					<div class='price'>" . $cars[$i]['price'] . '$' . "</div>
					<div class='year'>" . $cars[$i]['year'] . 'years' . "</div>
					</div>
					</div>";
			}
			if($sign == 'Toyota'){
				for($j=0; $j<count($array1);$j++){
				if($array1[$j]['price'] > 20000){
					echo "<div class='card'>
						<img class='images' src=" . $array1[$j]['image'] . ">
						<div class='description'>
						<div class='title'>" . $array1[$j]['maker'] . ' ' . $array1[$j]['model'] . "</div>
						<div class='price'>" . $array1[$j]['price'] . '$' . "</div>
						<div class='year'>" . $array1[$j]['year'] . 'years' . "</div>
						</div>
						</div>";
					}
				}
				break;
			}
			if($sign=="BMW"){
				for($j=0; $j<count($array2);$j++){
				if($array2[$j]['price'] > 20000){
					echo "<div class='card'>
						<img class='images' src=" . $array2[$j]['image'] . ">
						<div class='description'>
						<div class='title'>" . $array2[$j]['maker'] . ' ' . $array2[$j]['model'] . "</div>
						<div class='price'>" . $array2[$j]['price'] . '$' . "</div>
						<div class='year'>" . $array2[$j]['year'] . 'years' . "</div>
						</div>
						</div>";
					}
				}
				break;
			}
			if($sign=="Audi"){
				for($j=0; $j<count($array3);$j++){
				if($array3[$j]['price'] > 20000){
					echo "<div class='card'>
						<img class='images' src=" . $array3[$j]['image'] . ">
						<div class='description'>
						<div class='title'>" . $array3[$j]['maker'] . ' ' . $array3[$j]['model'] . "</div>
						<div class='price'>" . $array3[$j]['price'] . '$' . "</div>
						<div class='year'>" . $array3[$j]['year'] . 'years' . "</div>
						</div>
						</div>";
					}
				}
				break;
			}
			if($sign=="Lada"){
				for($j=0; $j<count($array4);$j++){
				if($array4[$j]['price'] > 20000){
					echo "<div class='card'>
						<img class='images' src=" . $array4[$j]['image'] . ">
						<div class='description'>
						<div class='title'>" . $array4[$j]['maker'] . ' ' . $array4[$j]['model'] . "</div>
						<div class='price'>" . $array4[$j]['price'] . '$' . "</div>
						<div class='year'>" . $array4[$j]['year'] . 'years' . "</div>
						</div>
						</div>";
					}
				}
				break;
			}
		}
	}
} 
?>
</div>
<div class="menu">
<a href="W9T3.php">Home</a>|<a href="W9T3.php?maker=Toyota">Toyota</a>|<a href="W9T3.php?maker=BMW">BMW</a>|<a href="W9T3.php?maker=Audi">Audi</a>|<a href="W9T3.php?maker=Lada">Lada</a></div>

<div class="menu">
<a href="W9T3.php?year=old">Old cars (More than 7 years)</a>|<a href="W9T3.php?price=expensive">Expensive cars (more than 20.000$)</a></div>
</body>
</html>
