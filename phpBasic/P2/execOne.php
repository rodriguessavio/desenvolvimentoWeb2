<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post" style="margin-left: 650px;">
        <label for="">Nome: </label>
        <input type="text"  name="nome"> <br> <br>

        <label for="">Telefone: </label>
        <input type="text"  name="telefone"> <br> <br>

        <label for="">Email: </label>
        <input type="text" name="email"> <br> <br>

        <input type="submit" name="btn" value="Salvar"> <input type="submit" value="Apagar" name="btn">

    </form>
    <hr>
    <br>
    <h1 style="display:flex; justify-content: center;">Agenda</h1>

    <?php

        $nome = @$_POST['nome'];
        $telefone = @$_POST['telefone'];
        $email = @$_POST['email'];

        $arquivo = fopen("dados.txt", 'a');
        fwrite($arquivo, "$nome | $telefone | $email |\n");
        $arquivo1 = fopen("dados.txt", 'r');
        $texto = fread($arquivo1, filesize("dados.txt"));



        $dados = explode('|', $texto);

        echo "<table border = 1 style= 'margin: 0 auto;'>";

        echo "<tr>";

        for ($i = 0 ; $i < sizeof($dados)-1 ; $i++) {
            if ($i % 3 == 0) {
                echo "</tr>";
            }
            echo "<td>".$dados[$i]."</td>";

        }

        echo "</tr>";

        

    
    ?>
</body>
</html>