<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th, td {
        border: 1px solid black; 
        padding: 8px; 
        text-align: left; 
    }
    </style>
</head>
<body>

<form action="" method="post"> 

    <label for="">Nome:</label>
    <input type="text" name="nome">

    <label for="">Cpf:</label>
    <input type="text" name="cpf">

    <label for="">Fone:</label>
    <input type="text" name="fone">

    <button name="btn" value="b1">Cadastrar</button>

    </form>

    <br>

<?php
    include_once('../Controller/ClienteControllerDAO.php');

    $dados = new ClienteControllerDAO();

    $d = $dados->show();

    if(isset($_POST['btn']) && ($_POST['nome'] != null && $_POST['cpf'] != null && $_POST['fone'] != null)) {
        $dados->add($_POST['nome'], $_POST['cpf'], $_POST['fone']);
        header('location: Cliente.php');
    }

    // if(isset($code)) {
    //     $dados->remove($code);
    //     header('location: Cliente.php');
    // }



    echo "<table style='border: 1px solid black;'>";
        foreach($d as $r) {
            echo "<tr>";
                echo "<td>";
                    echo @$r['nome']."<br>";
                echo "</td>";

                echo "<td>";
                    echo @$r['cpf']."<br>";
                echo "</td>";

                echo "<td>";
                    echo @$r['fone']."<br>";
                echo "</td>";

                echo "<td>";
                echo '<a href="?' . $code = $r['id'] . '"><img src="../Public/img/att.svg" alt=""></a>';

                echo '<a href="?' . $code = $r['id'] . '"><img src="../Public/img/trash.svg" alt=""></a>';
                echo "</td>";

            echo "<tr>";
        }
    echo "</table>";

?>

</body>
</html>
