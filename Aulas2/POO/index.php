<?php

    class Produto {
        // Características da classe
        public $nome;
        public $valor;

        //construtor:
        function __construct() {
            // pode passar parâmetros
            $this->nome = "sem produto";
            $this->valor = 0;
        }

        function setNome($nome) {
            $this->nome = $nome;
        }

        function getNome() {
            echo $this->nome;
            // pode usar o return
        }

        function setValor($valor) {
            $this->valor = $valor;
        }

        function getValor() {
            echo $this->valor;
        }

    }

        $p = new Produto();
        $p->setNome('Celular');
        $p->setValor(90.0);

        $p->getNome();
        echo "</br>";
        $p->getValor();

?>