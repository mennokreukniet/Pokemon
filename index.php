<?php
require_once 'Pikachu.php';
require_once 'Charmeleon.php';

$pikachu = new Pikachu('Pika');
$charmeleon = new Charmeleon('Charmeleon');

print_r($pikachu->name . ' has ' . $pikachu->health . ' health <br>');
print_r($charmeleon->name . ' has ' . $charmeleon->health . ' health <br>');

echo $pikachu->attack($charmeleon, 0);

print_r($charmeleon->name . ' has ' . $charmeleon->health . ' health left <br>');

echo $charmeleon->attack($pikachu, 1);

print_r($pikachu->name . ' has ' . $pikachu->health . ' health left <br>');