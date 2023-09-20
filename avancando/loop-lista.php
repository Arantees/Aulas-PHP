<?php 

$idadeLista = [21, 23, 19, 25, 30, 41, 18];
$nomes = ["João","Maria","Pedro","Ana", "Joana", "Luzia","Lucas"];
/*for ($i = 0; $i < 7; $i++){
    echo "$idadeLista[$i]" .PHP_EOL;
} alterar o < 7 para count($nomevetor) para identificar automaticamente 
a quantidade de arrays
*/

for ($i = 0; $i < count($idadeLista); $i++){
    echo $idadeLista[$i] . PHP_EOL;
}

for($indice=0; $indice<count($nomes) ;$indice++){
    echo $nomes[$indice].PHP_EOL;
}



