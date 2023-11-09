<?php

    class Conexao {

        public $arquivo;

         
        function __construct() {

            $this->arquivo = fopen("arquivo.txt", "a");
    
        }

        function conn() {
            return $this->arquivo;
        }

    }

    $c = new Conexao();

    

?>