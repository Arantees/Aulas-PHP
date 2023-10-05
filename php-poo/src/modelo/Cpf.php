<?php

    namespace Alura\Banco\Modelo;

    class CPF {
        private $cpf;   
        

        public function __construct(string $cpf)
        {  
            $this->cpf= $cpf;
            $this->validacpf($cpf);
        }  

        private function validacpf(string $cpf)
        {
            if (strlen($cpf) < 11 || strlen($cpf) > 15)
            {
                echo "CPF precisa de 11 caracteres, contando "." e \"-"/ " (usar apenas numero)";
                exit();
            }
            $this->cpf= $cpf;
        }
        public function recuperaCpf(): string
        {
            return $this->cpf;
        }
    }