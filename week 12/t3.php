<?php
require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

$conn = new mysqli("localhost", "root", "", "lessons");
$results = $conn->query("SELECT * FROM twigdata");

$lessons = [];
if ($results->num_rows > 0) {
    while($row = $results->fetch_assoc()) {
		array_push($lessons ,["id"=>$row['id'],"code"=>$row['code'],"title"=>$row['title'],"grade"=>$row['grade'],"FA"=>$row['FA'],"Final"=>$row['Final'],"credits"=>$row['credits']]);
	}
}

echo $twig->render('second.html.twig', ['lessons' => $lessons]);

?>