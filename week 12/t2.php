<?php
require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);
$lessons = [["id"=>1,"code"=>"INF 301","title"=>"Foundations of Web technologies","grade"=>"F","FA"=>30,"Final"=>20,"credits"=>3],["id"=>2,"code"=>"CSS 220","title"=>"Electronics","grade"=>"A","FA"=>99,"Final"=>94,"credits"=>2],["id"=>3,"code"=>"CSS 221","title"=>"Programming abstraction","grade"=>"C","FA"=>67,"Final"=>69,"credits"=>3],["id"=>4,"code"=>"CSS 115","title"=>"English language","grade"=>"B","FA"=>85,"Final"=>87,"credits"=>2]];

echo $twig->render('second.html.twig', ['lessons' => $lessons]);

?>