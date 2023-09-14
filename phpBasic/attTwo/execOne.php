<!DOCTYPE html>
<html>
<head>
<style>
  .red {
    color: red;
  }
  .gray {
    color: gray;
  }
</style>
</head>
<body>

<?php
$valor1 = 15;
$valor2 = 8;
$valor3 = 21;

$valores = [$valor1, $valor2, $valor3];
sort($valores);

foreach ($valores as $valor) {
    if ($valor === max($valores)) {
        echo "<span class='red'>$valor</span> ";
    } else {
        echo "<span class='gray'>$valor</span> ";
    }
}
?>

</body>
</html>
