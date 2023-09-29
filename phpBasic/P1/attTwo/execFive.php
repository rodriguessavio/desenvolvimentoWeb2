<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculo de Salário</h1>

    <form action="" method = "post">
        <label for="funcao">Informe o cargo: </label>
        <input type="text" name="funcao" id="funcao">
        <br>
        <br>
        <label for="salario">Informe o salário: </label>
        <input type="numeric" name= "salario">
        <br>
        <input type="submit" value = "Calcular">
    </form>

    <?php
        $cargo = $_POST['funcao'];
        $salario = $_POST['salario'];
        $Nsalario = 0;
        if ($cargo == "Gerente") {
            $Nsalario = ($salario * 0.10) + $salario;
        } else if ($cargo == "Engenheiro") {
            $Nsalario = ($salario * 0.20) + $salario;
        } else if ($cargo == "Técnico") {
            $Nsalario = ($salario * 0.30) + $salario;
        } else {
            $Nsalario = ($salario * 0.40) + $salario;
        }

        echo "<h3>Salário antigo: $salario</h3>";
        echo "<h3>Novo Salário: $Nsalario</h3>";
        $diferenca = $Nsalario-$salario;
        echo "<h3>Diferença: $diferenca</h3>";
    ?>
</body>
</html>