<?php

   $vetor = array();
   
   $vetor = [1, 2, 3, 4, 5]; 

   $texto = "vasco da gama";


   //explode divide a string seguindo a passagem de delimitação de dados....
   $dados = explode(" ", $texto);

   echo $dados[0];
   echo "<br>";

    var_dump($vetor);
    echo "<br>";
    print_r($vetor);

    foreach($vetor as $v) {
        echo $v;
        echo "<br>";
    }
    // dd();
    // utilizado para adicionar uma nova página
    // entre as aspas é só passar o caminho
    // include('execTwo.php'); ==> Como exemplox
    // include_once, pesquisar sobre
    // number_format($vetor )

?> 