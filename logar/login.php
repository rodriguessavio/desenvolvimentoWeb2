<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Tela de login</h1>

    <form action="" method="post">

        <label for="">Usuario</label> <br>
        <input type="text" name = "user"><br>
        <label for="">Senha</label> <br>
        <input type="password" name = "senha"><br> <br>
        <input type="submit" name = "btn" value="Enviar"> <br>

    </form>

    <?php

        session_start();

        $usuario = @$_POST['user'];
        $senha = @$_POST['senha'];

        if(@$_POST['btn'] == 'Enviar') {
            logar($usuario, $senha);
        }

        function logar($usuario, $senha) {

            foreach($_SESSION['cadastro'] as $key) {
                
                if ($key['usuario'] == $usuario  && $key['senha'] == $senha){
                    header('Location: principal.php');
                }
                
            }
        }

    ?>
</body>
</html>