<?php

$properties = [
    'firstname' => 'Tom',
    'surname' => 'Riddle',
    'house' => 'Slytherin',
];

$properties1 = $properties2 = $properties3 = $properties;

/*sort($properties1);
var_dump($properties1);

asort($properties3);
var_dump($properties3);

ksort($properties2);
var_dump($properties2); */

$keys = array_keys($properties);
var_dump($keys);

$values = array_values($properties);
var_dump($values);

$size = count($properties);
var_dump($size);

$igraci = [
    0 => "Ronaldo",
    1 => "Rivaldo",
    2 => "Figo",
];