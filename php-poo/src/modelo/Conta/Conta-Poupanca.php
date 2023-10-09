<?php

 namespace Alura\Banco\Modelo\Conta;

 class ContaPoupanca extends Conta
 {
    public function sacar(float $valorSacar):void
    {
        $tarifaSaque= $valorSacar * 0.03;
        $valorSaque= $valorSacar + $tarifaSaque;
        if ($valorSaque > $this-> saldo){
            echo "Saldo indisponivel";
            return;
        }
        $this->saldo-=$valorSaque;
    }
    public function percentualTarifa(): float{
        return 0.5;
    }
 }