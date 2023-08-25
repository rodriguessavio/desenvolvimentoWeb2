<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Média</title>
</head>
<body>

<h2>Calculadora de Média</h2>

<form method="post" action="">
    Nota 1: <input type="number" name="nota1" step="0.01" required><br><br>
    Nota 2: <input type="number" name="nota2" step="0.01" required><br><br>
    <input type="submit" name="calcular" value="Calcular Média">
</form>

<?php
if (isset($_POST['calcular'])) {
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];

    $media = ($nota1 + $nota2) / 2;

    echo "<h3>A média entre as notas $nota1 e $nota2 é: $media</h3>";
}
?>

</body>
</html>
