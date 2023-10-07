<?php
    session_start();


    if (isset($_COOKIE["correio"])) {
        
        $mensagens = unserialize($_COOKIE["correio"]);
        if (!empty($mensagens)) {
            foreach ($mensagens as $mensagem) {
                echo "<span>Assinado por:</span> " . $mensagem['nome'] . "<br>";
                echo "<span>Email:</span> " . $mensagem['email'] . "<br>";
                echo "<span>Mensagem:</span> " . $mensagem['mensagem'] . "<br>";
                echo "<span>Data:</span> " . $mensagem['data'] . "<br><br>";
            }
        }
    } else {
        echo "O cookie 'mensagens' não está definido.";
    }

?>

