<?php
require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

echo $twig->render('first.html.twig', ['car1' => 'Toyota', 
    'car2' => 'Mercedes', 'car3' => 'BMW']);

?>