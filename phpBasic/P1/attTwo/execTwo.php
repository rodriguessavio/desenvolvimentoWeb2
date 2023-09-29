<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Idade</title>
</head>
<body>
    <h1>Calculadora de Idade</h1>
    <form action = "" method="post">
        <label for="dia">Dia de Nascimento:</label>
        <input type="number" name="dia" required min="1" max="31">
        <label for="mes">Mês de Nascimento:</label>
        <input type="number" name="mes" required min="1" max="12">
        <label for="ano">Ano de Nascimento:</label>
        <input type="number" name="ano" required min="1900" max="2099">
        <input type="submit" value="Calcular Idade">
    </form>
    <?php
        $dia = @$_POST['dia']; 
        $mes = @$_POST['mes'];
        $ano = @$_POST['ano'];

        $diaT = date("d");
        $mesT = date("m");
        $anoT = date("Y");

        $diaT = $diaT - $dia;
        $mesT = -1 * ($mesT - $mes);
        $anoT = $anoT - $ano;

        echo "<p>você tem $anoT anos, $mesT meses e $diaT dias</p>"
    ?>
</body>
</html>
