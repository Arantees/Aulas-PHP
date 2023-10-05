<?php 

require_once 'src/Modelo/Conta/Conta.php';
require_once 'src/Modelo/Endereco.php';
require_once 'src/Modelo/Pessoa.php';
require_once 'src/Modelo/Conta/Titular.php';
require_once 'src/Modelo/Cpf.php';
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Conta;

$endereco = new Endereco( cidade:'São Paulo', bairro: 'qualquer bairro', rua: 'uma ai', numero: '754');
$Lucas = (new Titular(new CPF('123.456.789-10'), 'Lucas Arantes', $endereco));
$primeiraConta = new Conta($Lucas);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo PHP_EOL;
echo $primeiraConta->recuperaNome() . PHP_EOL;
echo $primeiraConta->recuperaCpf()->recuperaCpf() . PHP_EOL;
echo $primeiraConta->retornaSaldo() . PHP_EOL;

echo PHP_EOL;

$Patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($Patricia);
$segundaConta -> depositar(1500);
echo $segundaConta->recuperaNome() . PHP_EOL;
echo $segundaConta->recuperaCpf()->recuperaCpf() . PHP_EOL;
echo $segundaConta->retornaSaldo() . PHP_EOL;

