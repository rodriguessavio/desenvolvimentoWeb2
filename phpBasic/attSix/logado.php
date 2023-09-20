<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>SisIFPI</h1>
        <a href="#">Início</a>
        <input type="submit" value="sair" name = "sair">
        <?php
        session_start();
            $nome_usuario = $_SESSION['user'];
            echo "<h3>Usuário $nome_usuario logado no sistema...</h3>";
        ?>
    </div>
</body>
</html>