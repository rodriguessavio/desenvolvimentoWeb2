<?php
    class Usuario {

        private $nome;
        private $cpf;

        function __construct($nome, $cpf){
            $this->nome = $nome;
            $this->cpf = $cpf;
        }

        function setNome($nome) {
            $this->nome = $nome;
        }

        function getNome() {    
            return $this->nome;
        }   

        function setCpf($cpf) {
            $this->cpf = $cpf;
        }

        function getCpf() { 
            return $this->cpf;
        }


    }
?>