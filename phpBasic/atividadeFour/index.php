<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculadora de Impostos e Taxas</h1>

    <form action="" method="post">

        <label for="imposto">Imposto(%):</label>
        <input type="number" name="imposto"> <br><br>
        <label for="taxa">Taxa de Serviço(%):</label>
        <input type="number" name="taxa"> <br><br>
        <label for="preco">Preço do Combustível(R$):</label>
        <input type="number" name="preco"> <br> <br>

        <input type="submit" name = "btn" value="Calcular">
        <br>
        <br>

    </form>

    <?php

        $imposto = @$_POST['imposto'];
        $taxa = @$_POST['taxa'];
        $preco = @$_POST['preco'];

        if (@$_POST['btn'] == 'Calcular') {
            $total = ($preco - ($preco * $imposto/100)) - ($preco*$taxa/100);
            echo "Imposto: ".$imposto/100 * $preco. "</br>";
            echo "Taxa de Serviço: ".$taxa/100 * $preco. "</br>";
            echo "Total: ".$total. "</br>";
        }

    ?>
</body>
</html>