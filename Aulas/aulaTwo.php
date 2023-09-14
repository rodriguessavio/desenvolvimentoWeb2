<?php
    // isset --> pergunta se existe elemento dentro
    // O @ ignora a variável não inicializada
    //php é pré processado
    $n = @$_POST['nome'];
    $n = trim($n);
    // trim retira os espaços iniciais e finais de uma string
    // Utilização de funções
    // $n = strlen($n);
    // código acima para ver o tamanho da string
    // echo $n;
    $sub = substr($n, 0, 2);
    // sub de substring

    echo "Substring ".$sub;

    // explode();
    // pega uma string e cria um vetor

    // $numero = rand(0, 100);
    // echo "</br>Numero ".$numero;

    $binario = [];

    // for($i = 1 ; $i <= 8 ; $i++) {
    //     $numero = rand(0, 1);
    //     $binario[$i] = $numero;
    //     echo $binario[$i];
    // }
    $dados = ['a', 'b', 'c', 'd'];
    echo "</br>";
    foreach($dados as $d) {
        echo $d;
    }
    echo '</br>';


?>
<!-- <body bgcolor= "<?php echo $n; ?>"></body> -->
<form action = "processa.php" method = "post">
    Usuário: <input type="text" name = "nome"></br>
    Senha: <input type="password" name = "senha"></br>
    <select name="status">
        <option value="1">Administrador</option>
        <option value="2">Usuário</option>
    </select>
    <button type="submit">Enviar</button>
</form>
