<?php

namespace Alura\Banco\Modelo\Conta;

class Conta
{
    private $titular;
    private $saldo=0;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {  
        $this->titular = $titular;
        $this->saldo;
        Conta::$numeroDeContas++;
    }
    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function recuperaCpf()
    {
        return $this->titular->recuperaCpf();
    }

    public function recuperaNome(): string
    {
        return $this->titular->recuperanome();
    }
    public function sacar(float $valorSacar)
    {
        if($valorSacar > $this -> saldo){
            echo "Saldo indisponivel";
            return;
      }
        $this->saldo -=$valorSacar;      
    }

    public function depositar($valorDepositar){
        if($valorDepositar < 0){
            echo "O valor precisa ser maior que zero";
            return;
        }
            $this ->saldo += $valorDepositar;        
     }

    public function tranferir(float $transferencia, Conta $contaDestino)
    {
        if($transferencia > $this->saldo){
            echo "Saldo indisponivel";
        }
        $this->sacar($transferencia);
        $contaDestino->depositar($transferencia);
    }

    public function retornaSaldo():float
    {
        return $this ->saldo;
    }    
  

public static function recuperaNumeroDeContas(): int
    {
        return Conta::$numeroDeContas;
    }
}



