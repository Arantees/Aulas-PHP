<?php

class Cachorro extends Animal
{
   private $somEmitido;

   public function __construct($nome, $tipo) {
        parent::__construct($nome, $tipo);               
   }

   public function latir(){
    echo "esse é o som do cachorro >> AU-AU-AU";
    return $this->somEmitido;    
   }
}