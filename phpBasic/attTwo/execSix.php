<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Média</title>
</head>
<body>
    <h1>Calculo de Média</h1>
    <form action="" method="post">
        <label for="identificacao">Digite seu número de identificação</label>
        <br><br>
        <input type="text" id="identificacao" name="identificacao">
        <br><br>
        <label for="nota1">Informe suas três notas respectivamente: </label>
        <br><br>
        <label for="nota1">Nota 1:</label>
        <input type="number" id="nota1" max="10" min="0" name="nota1">
        <br><br>
        <label for="nota2">Nota 2:</label>
        <input type="number" id="nota2" max="10" min="0" name="nota2">
        <br><br>
        <label for="nota3">Nota 3:</label>
        <input type="number" id="nota3" max="10" min="0" name="nota3">
        <br><br>
        <label for="ME">Informe abaixo sua média dos exercícios:</label> <br><br>
        <input type="number" id="ME" name="ME">
        <input type="submit" value="Calcular">
    </form>
    
    <?php
        if(isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3']) && isset($_POST['ME'])) {
            $n1 = $_POST['nota1'];
            $n2 = $_POST['nota2'];
            $n3 = $_POST['nota3'];
            $ME = $_POST['ME'];

            $ma = ($n1 + ($n2 * 2) + ($n3 * 3) + $ME) / 7;
            $conceito = "";

            if ($ma == 9) {
                $conceito = "A";
            } else if ($ma < 9 && $ma >= 7.5) {
                $conceito = "B";
            } else if ($ma >= 6 && $ma < 7.5) {
                $conceito = "C";
            } else if ($ma >= 4 && $ma < 6) {
                $conceito = "D";
            } else if ($ma < 4.0) {
                $conceito = "E";
            }

            echo "Você apresenta conceito: $conceito";
            echo "<br> $ma";
        } else {
            echo "Preencha todos os campos antes de calcular a média.";
        }
    ?>
</body>
</html>
