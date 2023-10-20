<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap');

        body {
            background-color: #fff;
            color: #000;
            font-family: 'Roboto Condensed', sans-serif;
        }

        .cont-princ {
            background-color: #000;
            color: #fff;
            display: flex;
            gap: 25px;
            justify-content: center;
            padding: 20px;
            width: 500px;
            margin: 0 auto;
            border-radius: 5px;
            align-items: center;
        }

        input[type="submit"] {
            background-color: #fff;
            border-radius: 4px;
            margin-left: 40px;
            border-color: #000;
            padding: 7px 14px;
        }

        input[type="submit"]:hover {
            background-color: #000;
            color: #fff;
        }

        .t2{
            margin-top: 30px;
        }

        .pessoas-cadastradas {
            display: flex;
            justify-content: center;
        }

    </style>
</head>
<body>
    <div class="cont-princ">
        <h1>Cadastro de Pessoas</h1>

        <form action="process.php" method="post">
            <label for="nome">Informe o nome:</label> <br>
            <input type="text" name="nome" required> <br>
            <label for="email">Informe o email:</label> <br>
            <input type="email" name="email" required> <br>
            <label for="cpf">Informe o cpf:</label><br>
            <input type="text" name="cpf" required> <br><br>
            <input type="submit" name='btn' value='Cadastrar'>
        </form>
    </div>

    
    <div class="pessoas-cadastradas">
        <h2 class="t2">Pessoas Cadastradas:</h2>
        <ul>
            <?php
                $file = fopen('logs.txt', 'r');
                while (($line = fgets($file)) !== false) {
                    list($nome, $email, $cpf) = explode('|', $line);
                    echo "<li>Nome: $nome, Email: $email, CPF: $cpf</li>";
                }
                fclose($file);
            ?>
        </ul>
    </div>

</body>
</html>
