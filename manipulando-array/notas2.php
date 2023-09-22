<?php

$notas= [
    'Ana' => 10,
    'Mateus' => 5,
    'Lucas' => 7,
    'Joao' => 8,
    'Laila' => 9 
];


echo "usando asort \n";
asort($notas);
var_dump($notas);

echo "usando arsort \n";
arsort($notas);
var_dump($notas);
