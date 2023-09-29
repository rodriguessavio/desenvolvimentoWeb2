<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
    
        <label for="">Nome: </label>
        <input type="text" value="digite seu nome:" name="nome"> <br>

        <label for="">Telefone: </label>
        <input type="text" value="digite seu telefone..." name="telefone"> <br>

        <label for="">Email: </label>
        <input type="text" value="digite seu email" name="email"> <br>

        <input type="submit" name="btn" value="Salvar"> <input type="submit" value="Apagar" name="btn">

    </form>


    <?php

        $nome = @$_POST['nome'];
        $telefone = @$_POST['telefone'];
        $email = @$_POST['email'];

        $arquivo = fopen("dados.txt", 'a');

        

    
    ?>
</body>
</html>