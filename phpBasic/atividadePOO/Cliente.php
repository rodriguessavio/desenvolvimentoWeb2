<?php
    class Cliente {

        public $nome;
        public $celular;
        public $email;
        public $cpf;

        function __construct() {
            $this->nome = "Sem nome";
            $this->celular = "(00) 0 0000-0000";
            $this->email = "xxxxxx@xxxxxx.com.br";
            $this->cpf = "yyy.yyy.yyy-yy";
        }

        function setNome ($nome) {
            $this->nome = $nome;
        }

        function getNome () {
            echo $this->nome;
        }

        function setCelular ($celular) {
            $this->celular = $celular;
        }

        function getCelular () {
            echo $this->celular;
        }

        function setEmail ($email) {
            $this->email = $email;
        }

        function getEmail () {
            echo $this->email;
        }

        function setCpf ($cpf) {
            $this->cpf = $cpf;
        }

        function getCpf () {
            echo $this->cpf;
        }
    }

        $savio = new Cliente();
        $savio->setNome('Sávio Rodrigues');
        $savio->setCelular('(86) 9 9487-2237');
        $savio->setEmail("Saviorodrigues@gmail.com");
        $savio->setCpf("070.437.443-49");


        $savio->getNome();
        echo "</br>";
        $savio->getCelular();
        echo "</br>";
        $savio->getEmail();
?>