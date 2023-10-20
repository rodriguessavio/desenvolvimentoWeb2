<?php

Class Person {

    private $nome;
    private $email;
    private $cpf;

    function __construct($nome, $email, $cpf) {
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
    }

    function setNome ($nome) {
        $this->nome = $nome;
    }

    function getNome () {
       return $this->nome;
    }

    function setEmail ($email) {
        $this->email = $email;
    }

    function getEmail () {
        return $this->email;
    }

    function setCpf ($cpf) {
        $this->cpf = $cpf;
    }

    function getCpf () {
        return $this->cpf;
    }

}

?>