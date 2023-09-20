<?php

$idade = 17;
$numeroPessoas = 2;

echo "Você só pode entrar se tiver no minimo 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;
if ($idade >= 18) {
    echo "Você tem $idade anos!!" . PHP_EOL;
    echo "Você pode entrar sozinho";
} else {
    if ($idade >= 16 && $numeroPessoas > 1) {
        echo "Você tem $idade anos, está acompanhado(a), então pode entrar";
    } else {
        echo "Você tem $idade anos!!" . PHP_EOL;
        echo "você não pode entrar";
    }
}
echo PHP_EOL;
echo "Adeus";
 
if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos e está acompanhado(a), então pode entrar.";
} else {
    echo "Você só tem $idade anos. Você não pode entrar";
}

echo PHP_EOL;
echo "Adeus!";