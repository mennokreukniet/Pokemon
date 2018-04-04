<?php
require_once 'Pikachu.php';
require_once 'Charmeleon.php';

$pikachu = new Pikachu('Pika');
$charmeleon = new Charmeleon('Charmeleon');

echo $pikachu->name . ' has ' . $pikachu->health . ' health <br>';
echo $charmeleon->name . ' has ' . $charmeleon->health . ' health <br>';

echo $pikachu->attack($charmeleon, 5);
//array size thing

echo $charmeleon->name . ' has ' . $charmeleon->health . ' health left <br>';

echo $charmeleon->attack($pikachu, 1);

echo $pikachu->name . ' has ' . $pikachu->health . ' health left <br>';