<?php

class Gato extends Animal
{
   private $somGato;

   public function __construct( $nome, $tipo) {
        parent::__construct($nome, $tipo);        
   }

   public function miar(){  
    echo "Esse é o som do gato >> Miau-MIAU-miau"; 
    return $this->somGato;     
   }
}