<?php
    class Carro {

        public $modelo;
        public $ano;
        public $marca;

        function __construct() {
            $this->modelo = "Sem modelo";
            $this->ano = 0;
            $this->marca = "Sem marca";
        }

        function setModelo ($modelo) {
            $this->modelo = $modelo;
        }

        function getModelo () {
            echo $this->modelo;
        }

        function setAno ($ano) {
            $this->ano = $ano;
        }

        function getAno () {
            echo $this->ano;
        }

        function setMarca ($marca) {
            $this->marca = $marca;
        }

        function getMarca () {
            echo $this->marca;
        }
    }

        $teste = new Carro();
        $teste->setModelo('Ethios');
        $teste->setAno(2010);
        $teste->setMarca("Toyota");


        $teste->getModelo();
        echo "</br>";
        $teste->getMarca();
        echo "</br>";
        $teste->getAno();
?>