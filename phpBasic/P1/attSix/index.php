<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

    <?php
        session_start();
        $user = @$_POST['user'];
        $senha = @$_POST['pass'];

        $_SESSION['user'] = $user;
        $_SESSION['senha'] = $senha;

        if ($_SESSION['user'] == "Admin" && $_SESSION['senha'] == "admin") {
            header('Location: logado.php');
        }
    ?>
    <div class="login">
        <form action="" method="post">
            <h2>Login</h2>

            <label for="">Usuário:</label><br>
            <input type="text" name="user">
            <br>
            <label for="">Senha:</label><br>
            <input type="password" name="pass">
            <br>
            <input type="submit" value="Entrar"> <input type="submit" value="Limpar">

        </form>
    </div>

    <style>

        .login {
            display: flex;
            justify-content: center;
            background-color: #fff;
        }
        h2 {
            background-color: green;
        }
    </style>
</body>
</html>