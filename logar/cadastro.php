<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">

        <label for="">Usuario</label> <br>
        <input type="text" name = "user"><br>
        <label for="">Senha</label> <br>
        <input type="password" name = "senha"><br> <br>
        <input type="submit" name = "btn" value="Enviar"> <br>

    </form>

    <?php

        session_start();

        $user = @$_POST['user'];
        $senha = @$_POST['senha'];


        if(@$_POST['btn'] == 'Enviar') {
            cadastrar($user, $senha);
        }

        

        function cadastrar($user, $senha) {
            $_SESSION['cadastro'][] = array(
                'usuario' => $user,
                'senha' => $senha
            );
            echo "Usuário cadastrado!";
            header('Location: login.php');
        }

        foreach($_SESSION['cadastro'] as $k) {
            echo "usuario: ".$k['usuario']."<br>";
            echo "senha: ".$k['senha']."<br>";
        }

    ?>

</body>
</html>