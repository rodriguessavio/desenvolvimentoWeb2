<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .principal {
            display: flex;
            justify-content: center;
        }

        button {
            padding: 5px 10px;
        }

    </style>
</head>

<body>
    <div class="principal">
        <form action="" method="post">
        <h2>Financeiro IFPI 2.0</h2>
            <div>
                <input type="text" placeholder="Nome de Usuário" name="usuario" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Senha" name="senha" required>
            </div>
            <br>
            <button name="btn" value="login">Login</button>
        </form>
    </div>

    <?php

        session_start();

        //guardar na session

        $_SESSION['cadastro'][] = array(
            'usuario' => 'savio',
            'senha' => '15122003'
        );

        $usuario = @$_POST['usuario'];
        $senha = @$_POST['senha'];

        //mudar a senha para data de nascimento
        if(@$_POST['btn'] == 'login') {
            if ($usuario == $_SESSION['cadastro'][0]['usuario'] && $senha == $_SESSION['cadastro'][0]['senha']) {
                // echo "Usuário cadastrado!";
                $_SESSION['logado'] = true;
                header('Location: telaPrincipal.php');
            }    else {
                echo "Credencias inválidas";
            }
        }

    ?>
</body>

</html>
