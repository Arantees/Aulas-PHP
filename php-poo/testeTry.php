<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;

$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');

try {
    $lucas = new Titular(new CPF('123.456.781-01'), 'lucas', $endereco);

}catch(InvalidArgumentException | LengthException $exception){
    echo $exception -> getMessage().PHP_EOL;
}

var_dump($lucas);