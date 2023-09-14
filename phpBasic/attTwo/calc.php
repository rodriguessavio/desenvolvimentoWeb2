<?php

    $dia = @$_POST['dia']; 
    $mes = @$_POST['mes'];
    $ano = @$_POST['ano'];

    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $diaNascimento = $_POST["dia"];
        $mesNascimento = $_POST["mes"];
        $anoNascimento = $_POST["ano"];

        $dataNascimento = strtotime("$anoNascimento-$mesNascimento-$diaNascimento");
        $dataAtual = time();

        $diferencaSegundos = $dataAtual - $dataNascimento;

        $anos = floor($diferencaSegundos / (365 * 24 * 60 * 60));
        $diferencaSegundos -= $anos * 365 * 24 * 60 * 60;

        $meses = floor($diferencaSegundos / (30 * 24 * 60 * 60));
        $diferencaSegundos -= $meses * 30 * 24 * 60 * 60;

        $dias = floor($diferencaSegundos / (24 * 60 * 60));

        echo "Você tem $anos anos, $meses meses e $dias dias.";
    }
    ?>
