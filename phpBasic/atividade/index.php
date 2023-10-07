<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: "Arial";
    }

    a, input[type="submit"] {
        background-color: #000;
        color: #fff;
        padding: 5px 10px;
        text-decoration: none;
        border-radius: 4px;
    }

    input[type="submit"]:hover {
        background-color: #fff;
        color: #000;
        transition: ease-in-out 1s linear;
    }

    a:hover {
        background-color: #fff;
        color: #000;
        transition: ease-in-out .5s linear;
    }

</style>
<body>

    <h1 style="display:flex; justify-content: center;">Livro de Visitantes</h1>
    <div class="mensagem">
        <?php
            session_start();

                $menssagens = unserialize($_COOKIE['correio']);
            

            if ($menssagens != "") {
                echo "<span>Assinado em </span>". $menssagens[count($menssagens) -1]['data']. " por <span>".$menssagens[count($menssagens) -1]['nome']."</span></br>".$menssagens[count($menssagens) -1]['mensagem'];
            }
        ?>
    </div>


    <form action="process.php" method="post" style="margin-left: 650px;">
        <label for="">Nome(*): </label>
        <input type="text"  name="nome" required> <br> <br>

        <label for="">Email(*): </label>
        <input type="email" name="email" required> <br> <br>

        <label for="">Mensagem: </label> <br>
        <textarea name="mensagem" id="mensagem" cols="30" rows="1" required></textarea> <br> <br>

        <input type="submit" name="btn" value="Assinar"> <input type="submit" value="Limpar" name="btn">

    </form>
    <br>

    <a href="menssagens.php">Ver mensagens</a>
</body>
</html>