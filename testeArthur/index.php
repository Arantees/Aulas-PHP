<?php

require_once 'Animal.php';
require_once 'Cachorro.php';
require_once 'Gato.php';

$cachorro1 = new Cachorro(nome: "Thor", tipo:"Canino");
echo "Nome do cachorro: ". $cachorro1->retornaNome() .PHP_EOL;
echo "Tipo: ". $cachorro1->retornaTipo() .PHP_EOL; 
echo $cachorro1->latir() .PHP_EOL;

$gato1 = new Gato(nome:"Phoebe", tipo: "Felino");
echo "Nome do Gato: ". $gato1->retornaNome() .PHP_EOL;
echo "Tipo: ". $gato1->retornaTipo() .PHP_EOL; 
echo $gato1->miar() .PHP_EOL;


