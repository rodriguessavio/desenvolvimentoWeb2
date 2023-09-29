<?php
    echo "Arquivo";

    // $arquivo = fopen("arquivo.txt", 'a'); Cria o arquivo e repete a última linha

    // a = append, r = read, w = write(apaga tudo e escreve de novo)
    $arquivo = fopen("arquivo.txt", 'a');

    fwrite($arquivo, "\n ifpi"); 
    // fwrite escreve determinado conteúdo dentro do arquivo

    // $arquivo = fopen("arquivo.txt", 'r'); 
    $texto = fread($arquivo1, filesize('arquivo.txt'));
    // fread coloca o arquivo na web, no caso o conteúdo
    
    // tenho que passar o nome do arquivo
?>