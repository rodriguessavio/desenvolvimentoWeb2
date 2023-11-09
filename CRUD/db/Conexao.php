<?php

    include_once('config.php');


    class Conexao {

        public $con;
    
        public function __construct() {
            try {
                $this->con = new PDO('mysql:host='.HOST.';dbname='.DBNAME, USER, PASS);
            } catch (PDOException $e) {
                return $e->getMessage();
            }
            
        }
    
        public function conectar()  {
            return $this->con;
        }
    }


    $conexao = new conexao();

    $conexao->conectar();

?>