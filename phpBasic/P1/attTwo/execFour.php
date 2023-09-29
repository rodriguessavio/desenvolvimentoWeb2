<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="execFour.php" method = "post">
        <label for="">Informe sua idade: </label>
        <input type="text" name= "idade" id = "idade">
        <input type="submit" value="Confirmar">
    </form>
</body>
</html>

<?php
    $idade = @$_POST['idade'];

    if ($idade >= 5 and $idade <= 7) {
        echo "<h3>infantil A</h3>";
    } else if($idade >= 8 and $idade <= 10) {
        echo "<h3>infantil B</h3>";
    }else if($idade >= 11 and $idade <= 13) {
        echo "<h3>juvenil A</h3>";
    }else if($idade >= 14 and $idade <= 17) {
        echo "<h3>juvenil B</h3>";
    } else if ($idade > 18){
        echo "<h3>Adulto</h3>";
    }

?>