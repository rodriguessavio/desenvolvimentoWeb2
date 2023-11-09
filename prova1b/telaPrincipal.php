<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Controle Financeiro</h1>

    <p> Descrição: </p>
    <p>1 = entrada</p>
    <p>0 = saida</p>
    <?php
        session_start();
        echo "<h3>Seja bem vindo de volta ". $_SESSION['cadastro'][0]['usuario']."...</h3>";
    ?>
    <div class="entrada_dados">

        <form action="" method="post">

            <label for="descricao">Descrição</label> <br>
            <input type="text" name="descricao"> <br>

            <label for="valor">Valor</label> <br>
            <input type="number" name="valor"> <br> <br>


            <input type="radio" name="e/s" value="1"> Entradas
            <input type="radio" name="e/s" value="0"> Saida

            <br>
            <br>

            <input type="submit" name="btn" value="Adicionar">
            <input type="submit" name = "btn" value="Excluir">
            <input type="submit" name="btn" value="Sair">
            
        </form>
    </div>

    <div class="resultados">
        <?php

            // if ($_SESSION['logado'] != 'yes') {
            //     header('Location: cadastro.php');
            // }

            // if ($_SESSION['logado'] == 'yes') {
            //     $_SESSION['logado'] = 'no';
            // }


            $desc = @$_POST['descricao'];
            $valor = @$_POST['valor'];
            $entrada = @$_POST['e/s'];

            if(!isset($_SESSION['logado']) || $_SESSION['logado'] != true) {
                header("Location: cadastro.php");
            }

            if(@$_POST['btn'] == 'Excluir') {
                excluir();
            }

            if(@$_POST['btn'] == 'Sair') {
                sair();
            }
            
            if (!isset($_SESSION['vetor'])) {

                $_SESSION['menssagem'] = array();
    
            }
            // $_SESSION['vetor'] = [];

            $_SESSION['vetor'][] = array(
                'descricao' => $desc,
                'valor' => $valor,
                'entrada' => $entrada
            );

            // $vetorResumido = $_SESSION['vetor'];

            foreach($_SESSION['vetor'] as $value) {
                if($value['entrada'] == '1') {
                    @$vEntradas += $value['valor'];
                } 
                if($value['entrada'] == '0') {
                    @$vSaidas += $value['valor'];
                }
            }

            @$vTotal = $vEntradas - $vSaidas;

            echo '<div class="valores">';
            echo '<div class="i1">Entradas</div>';
            echo @$vEntradas;
            $vEntradas;
            echo '<div class="i2">Saídas</div>';
            echo @$vSaidas."<br>";
            echo '<div class="i3">Total</div>';
            echo $vTotal;
            echo '</div>';

            $arquivo = fopen('registros.txt', 'a');
            if ($desc != null && $valor != null && $entrada != null) {
                fwrite($arquivo, "$desc| $valor | $entrada |\n");

                $arquivo1 = fopen('registros.txt', 'r');
                $texto = fread($arquivo1, filesize('registros.txt'));



                $dados = explode('|', $texto);

                

                echo "<table border = 1 style= 'margin: 0 auto;'>";

                echo "<tr>";

                for ($i = 0 ; $i < sizeof($dados)-1 ; $i++) {
                    if ($i % 3 == 0) {
                        echo "</tr>";
                    }
                    echo "<td>".$dados[$i]."</td>";

                }

                echo "</tr>";
            }

            function excluir() {
                $_SESSION['vetor'] = [];
                unlink('registros.txt');
            }

            function sair() {
                $_SESSION['logado'] = false;
                header("Location: cadastro.php");
            }

        ?>
        
    </div>

    
</body>
</html>
