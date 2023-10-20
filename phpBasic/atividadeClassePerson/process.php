<?php

include_once('Controller.php');

    session_start();

    $controller = new Controller();

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];

    $controller->addPerson($nome, $email, $cpf);
    $controller->saveToFile();

    header("Location: viewsPerson.php");

?>
