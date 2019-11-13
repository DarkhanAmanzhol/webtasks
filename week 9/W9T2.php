<a href="W9T2.php?category=sport&format=data">Sport news</a> | <a href="W9T2.php?category=politics&format=data">Politic news</a><br/><br/>
<a href="W9T2.php?category=sport&format=json">Sport news (JSON)</a> | <a href="W9T2.php?category=politics&format=json">Politic news (JSON)</a><br/><br/>

<?php
$news = ["sport"=>["C. Ronaldo has scored three goals in last five matches","Golovkin has won match for title"],"politics"=>["Trump has cancelled his visit to North Korea, because of sanction","N. Nazarbayev has approved new version of alphabet"]];
/* JSON Content */
$url = "data.json";
$data = file_get_contents($url);
$characters = json_decode($data);
/* Data Content*/
$type = $_GET['category'];
$format = $_GET['format'];
switch($type){
	case 'sport':
		if($format=="data"){
			echo json_encode($news['sport'][0]);
			echo '<br/><hr>';
			echo json_encode($news['sport'][1]);
			echo '<br/><hr>';
		}
		else{
			echo $characters[0]->title;
			echo '<br/><hr>';
			echo $characters[1]->title;
			echo '<br/><hr>';
		}
		break;
	case 'politics':
		if($format=="data"){
			echo json_encode($news['politics'][0]);
			echo '<br/><hr>';
			echo json_encode($news['politics'][1]);
			echo '<br/><hr>';
		}
		else{
			echo $characters[2]->title;
			echo '<br/><hr>';
			echo $characters[3]->title;
			echo '<br/><hr>';
		}
		break;
}
?>