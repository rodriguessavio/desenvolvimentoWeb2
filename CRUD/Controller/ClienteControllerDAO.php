<?php

    include_once('../db/Conexao.php');

    class ClienteControllerDAO {

        public $conexao;

        public function __construct() {
            $this->conexao = (new Conexao()) -> conectar();
        }

        public function show() {
            $sql = 'select * from cliente';

            $result = $this->conexao->prepare($sql);

            $result->execute();

            return $result;
        }

        public function add($nome, $cpf, $fone) {

            $sql = "insert into cliente (nome, cpf, fone) values (:nome, :cpf, :fone)";

            $add = $this->conexao->prepare($sql);

            $add->bindValue(":nome", $nome);
            $add->bindValue(":cpf", $cpf);
            $add->bindValue(":fone", $fone);
            $add->execute();

        }

        public function remove($id) {

            $sql = "delete from cliente where id = (:id)";

            $remove = $this->conexao->prepare($sql);

            $remove->bindValue(":id", $id);
            $remove->execute();

        }


    }


?>