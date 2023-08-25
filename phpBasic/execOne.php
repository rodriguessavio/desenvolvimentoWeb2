<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Média</title>
</head>
<style>
    body {
        background-color: #000;
        color: #fff;
    }

    .formulario {
        width: 500px;
        height: 200px;
        background: #000080;
        padding: 20px;
        margin: 0 auto;
    }

    div h2 {
        background: #fff;
        color: #000;
        padding: 5px;
        margin-left: 20px;
    }

    h3 {
        margin-left: 597px;
    }
</style>
<body>



<div class= "formulario">
    <h2>Calculadora de Média</h2>
    <form method="post" action="">
        Nota 1: <input type="number" name="nota1" required><br><br>
        Nota 2: <input type="number" name="nota2" required><br><br>
        <input type="submit" name="calcular" value="Calcular Média">
    </form>
</div>

<?php
if ($_POST['calcular']) {
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $media = ($nota1 + $nota2) / 2;

    echo "<h3>A média entre as notas $nota1 e $nota2 é: $media</h3>";
}
?>

</body>
</html>
