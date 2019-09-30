<?php
require_once __DIR__ . '/vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader);

echo $twig->render('index.html', array(
    'users'=> array(
        array('name' => 'Liisa', 'age' => '20', 'location' => 'Tartu'),
        array('name' => 'Peeter', 'age' => '22', 'location' => 'Tallinn'),
        array('name' => 'Karin', 'age' => '34', 'location' => 'Pärnu')
    ),
   

));
?>