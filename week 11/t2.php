<?php
$cars = [["id"=>1,"maker"=>"Toyota","model"=>"Camry 50","price"=>30000],["id"=>2,"maker"=>"Mercedes","model"=>"C 100","price"=>20000],["id"=>3,"maker"=>"Daewoo","model"=>"Nexia","price"=>15000],["id"=>4,"maker"=>"Mercedes","model"=>"S 500","price"=>27000]];
$basket = null;
if (isset($_COOKIE["basket"])){
	$basket = json_decode($_COOKIE["basket"]);
}
else{
	$basket = [];
}
/* Enter your code here */
$all_goods = "";
foreach(json_decode($_COOKIE["basket"]) as $goods){
	if($goods == NULL){
		continue;
	}
	elseif(strpos($all_goods, $goods) == false){
		$all_goods .= " ". $goods;
	}
}
$word1 = "Add to basket";
$word2 = "Already in basket";
$for1 = "";
$for2 = "";
$for3 = "";
$for4 = "";
if(strpos($all_goods, "1") !== false){
	$for1 = "has";
}
if(strpos($all_goods, "2") !== false){
	$for2 = "has";
}
if(strpos($all_goods, "3") !== false){
	$for3 = "has";
}
if(strpos($all_goods, "4") !== false){
	$for4 = "has";
}
/**********************************************************************/
if($for1==""){
echo "<div>".$cars[0]['maker']." ".$cars[0]['model']." "."<a href='t2basket.php?id=".$cars[0]['id']."'>".$word1."</a>"."</div>";
}
if($for1=="has"){
	echo "<div>".$cars[0]['maker']." ".$cars[0]['model']." "."<span>".$word2."</span>"."</div>";
}
/*****************************/
if($for2==""){
echo "<div>".$cars[1]['maker']." ".$cars[1]['model']." "."<a  href='t2basket.php?id=".$cars[1]['id']."'>".$word1."</a>"."</div>";
}
if($for2=="has"){
	echo "<div>".$cars[1]['maker']." ".$cars[1]['model']." "."<span>".$word2."</span>"."</div>";
}
/*****************************/
if($for3==""){
echo "<div>".$cars[2]['maker']." ".$cars[2]['model']." "."<a href='t2basket.php?id=".$cars[2]['id']."'>".$word1."</a>"."</div>";
}
if($for3=="has"){
	echo "<div>".$cars[2]['maker']." ".$cars[2]['model']." "."<span>".$word2."</span>"."</div>";
}
/*****************************/
if($for4==""){
echo "<div>".$cars[3]['maker']." ".$cars[3]['model']." "."<a href='t2basket.php?id=".$cars[3]['id']."'>".$word1."</a>"."</div>";
}
if($for4=="has"){
	echo "<div>".$cars[3]['maker']." ".$cars[3]['model']." "."<span>".$word2."</span>"."</div>";
}
/***************************************************************************/
echo "<h1>In Basket</h1>";
if($all_goods==""){
	echo "In items Nothing";
}
else{
	echo "Items: ".$all_goods;
}
?>