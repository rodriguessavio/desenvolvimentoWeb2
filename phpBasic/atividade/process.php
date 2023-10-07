<?php

    session_start();

    if (isset($_POST['btn']) && $_POST['btn'] == 'Assinar') {
        Assinar();
    }

    if (isset($_POST['btn']) && $_POST['btn'] == 'Limpar') {
        Limpar();
    }

    function Assinar() {

        $nome = @$_POST['nome'];
        $email = @$_POST['email'];
        $mensagem = @$_POST['mensagem'];

        if (!isset($_SESSION['menssagem'])) {

            $_SESSION['menssagem'] = array();

        }

        $data = date("d/m/y");

        $_SESSION['menssagem'][] = array(
            'nome' => $nome,
            'email' => $email,
            'mensagem' => $mensagem,
            'data' => $data
        );
    }

    function Limpar() {
        if (isset($_SESSION['menssagem'])) {
            unset($_SESSION['menssagem']);
        }
    }

    setcookie("correio", serialize($_SESSION['menssagem']));

    header("Location: index.php");


?>