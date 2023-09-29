<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method= "post">
        <label for="">Entre com uma lista de numeros separados por vígula para serem somados: </label>
        <input type="text" name = "value">
        <br>
        <input type="submit" value="Enviar">
    </form>
    <?php
        $value=@$_POST['value'];
        $vetor = explode(", ", $value );
        $result = 0;
        foreach ($vetor as $num) {
            $result += (float)$num;
        }

        echo "<h4>Resultado: $result</h4>";

    ?>
</body>
</html>