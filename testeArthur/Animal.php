<?php

class Animal {
    private $nome;
    private $tipo;
     public function __construct( $nome, $tipo) {
        $this->nome= $nome;
        $this->tipo =$tipo;
    }

    public function retornaNome():string{
        return $this->nome;
    }
    public function retornaTipo():string {
        return $this->tipo;
    }
}