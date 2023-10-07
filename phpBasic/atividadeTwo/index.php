<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>"FILA"</h1>

    <form action="" method="post">
        <input type="text" name="value">
        <input type="submit" name="btn" value="adicionar">
        <input type="submit" name="btn" value="subtrair">
    </form>

    <hr>

    <?php
    session_start();

    if (!isset($_SESSION['array'])) {
        $_SESSION['array'] = array();
    }

    $vetor = $_SESSION['array'];

    
    $value = $_POST['value'];

    if($_POST['btn'] == 'adicionar') {
        Adc($value);
    }

    if($_POST['btn'] == 'subtrair') {
        Sub($value);
    }
    

    function Adc($value) {
        global $vetor;

        if (isset($value)) {
            $vetor[] = $value;
            $_SESSION['array'] = $vetor;
        } else {
            echo 'valor incorreto';
        }
    }

    function Sub($value) {
        global $vetor;
        $indice = array_search($value, $vetor);
        if ($indice !== false) {
            array_splice($vetor, $indice, 1);
        }
        $_SESSION['array'] = $vetor;
    }
    if ($value !== false) {
        echo "Valor informado: ".$value;
    }else{
        echo "Valor não informado";
    }
    echo '<hr>';
    echo '<pre>';
    print_r($vetor);
    echo '</pre>';

    ?>
</body>
</html>
