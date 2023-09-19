<h1>Jogo do Acerto</h1>

<form method="post" action="">
    <p>Digite um número entre 1 e 20</p>
    <input type="text" name="value">
    <button type="submit">Verificar</button>

    <fieldset>
        <legend>Resultado</legend>
        <?php
        $value = @$_POST['value'];
        $sorteado = rand(1, 20);
        
        if ($value == $sorteado) {
            echo "<h3 style='color: blue;'>VOCÊ ACERTOU!</h3>";
        } else {
            echo "<h3 style='color: red;'>VOCÊ ERROU</h3>";
        }
        

        echo "<p>Número Digitado: $value</p>";

        echo "<p>Números Sorteados:</p>";


        foreach ($valores as $numeroSorteado) {
            echo $numeroSorteado . " ";
        }

        
        
        // foreach ($valores as $numeroSorteado) {
        //     echo $numeroSorteado . " ";
        // }
        ?>
    </fieldset>
</form>
