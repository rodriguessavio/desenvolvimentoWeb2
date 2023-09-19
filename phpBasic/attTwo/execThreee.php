<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Distância entre Pontos</title>
</head>
<body>
    <form action="execThreee.php" method="post">
        <p>Valores do Ponto 1</p>

        <label for="pontox1">Digite o valor do ponto x:</label>
        <input type="text" name="pontox1" id="pontox1" value="2">
        
        <label for="pontoy1">Digite o valor do ponto y:</label>
        <input type="text" name="pontoy1" id="pontoy1" value="3">

        <p>Valores do Ponto 2</p>

        <label for="pontox2">Digite o valor do ponto x:</label>
        <input type="text" name="pontox2" id="pontox2" value="5">
        
        <label for="pontoy2">Digite o valor do ponto y:</label>
        <input type="text" name="pontoy2" id="pontoy2" value="7">
        <input type="submit">
    </form>
</body>
</html>


    <?php
        $x1 = @$_POST['pontox1'];
        $y1 = @$_POST['pontoy1'];
        $x2 = @$_POST['pontox2'];
        $y2 = @$_POST['pontoy2'];
        

        $distancia = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));

        echo "<h2>d = $distancia</h2>"
    ?>
