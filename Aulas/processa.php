<?php

$nome = @$_POST['nome'];
$senha = @$_POST['senha'];
$status = @$_POST['status'];

if ($nome == "admin" && $senha == "123" && $status == 1) {
    echo "Bem vindo, <strong> $nome </strong>";
} else if ($nome == "maria" && $senha == "124" && $status == 2){
    echo "Bem vinda, <strong> $nome </strong>";
} else{
    echo "Erro no login";
}

?>