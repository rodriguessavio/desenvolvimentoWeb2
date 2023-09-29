<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method = "post">
        <fieldset>
            <legend>Calculadora</legend>
            <label for="">1ª Número: </label> <input type="number" name="n1"> <br><br>
            <label for="">2ª Número: </label> <input type="number" name="n2"> <br>
            <br>
            <select name="op" id="op">
                <option value="+">somar</option>
                <option value="/">dividir</option>
                <option value="*">multiplicar</option>
                <option value="-">subtrair</option>
            </select>
            <input type="submit" value="Calcular">
        </fieldset>
    </form>

    <?php
        $n1 = @$_POST['n1'];
        $n2 = @$_POST['n2'];
        $op = @$_POST['op'];
        $result = 0;

        switch ($op) {
            case '+':
                $result = $n1+$n2;
                break;
            case '-':
                $result = $n1-$n2;
                break;
            case '/':
                $result = $n1/$n2;
                break;
            case '*':
                $result = $n1*$n2;
                break;
            default:
                $result = 0;
                break;
        }
        echo "
            <fieldset>
            <legend>Resultado</legend>
                $result
            </fieldset>
        ";
    ?>
</body>
</html>