<?php
    // serve para guardar informações do usuário na própria máquina, do usuário no caso

    setcookie('produto', 'carro', time() + 160);


    // ficaria para 'sempre'

    echo $_COOKIE['produto'];

?>