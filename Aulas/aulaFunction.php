<?php

    if (@$_POST['btn'] == 'btn3') {
        // Verifica se existe elemento dentro desse post
        Gravar("arquivo.txt");
    }

    if (@$_POST['btn'] == 'btn4') {
        Mostrar("arquivo.txt");
    }

    

    function Gravar($arquivo) {
        echo "Gravação ". $arquivo;
    }

    function Mostrar($arquivo) {
        echo "Mostrar";
    }

?>


<form method= "post">
        <button type= "submit" name = 'btn' value = "btn3">Gravar</button>
        <!-- sempre usar o name e o value, que é o valor que será utilizado -->
        <br> <br>

        <button type= "submit" name= "btn" value="btn4">Mostrar</button>
        <!-- Mesmo name para que não precise fazer outra verificação em relação ao valor -->
</form>