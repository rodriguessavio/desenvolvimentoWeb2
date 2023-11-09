<?php

    include_once('Conexao.php');
    class ControllerArq {

        function Add($texto) {

            $c = new Conexao();
            // Instanceamos a conexao

            fwrite( $c->conn(), $texto.", ");

            //Acima o arquivo é criado a partir de outra classe e já escrito algo nela
        }

        function Delete() {
            $c = new Conexao('w');
        }



    }
?>