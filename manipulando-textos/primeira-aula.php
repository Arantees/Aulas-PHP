<?php

$nome = 'Lucas Arantes';

$ehDaMinhaFamilia = str_contains($nome, 'Arantes');

if ($ehDaMinhaFamilia) {
    echo "$nome é da minha família" . PHP_EOL;
} else {
    echo "$nome não é da minha família" . PHP_EOL;
}
