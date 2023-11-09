<?php
    include('controller.php');

    $dados = new ControllerArq();

    $dados->Add('Ai dento');

    $nome = @$_POST['valor'];

    if(isset($_POST['valor'])) {
        $dados->Add($_POST['valor']);
    }

    if(isset($_POST['valor']) == 'Deletar') {

    }
    

?>

<form action="" method="post">
    
    <label for="">Dados:</label>
    <input type="text" name = "valor">
    <input type="submit" name = "btn" value="Enviar"> <br>
    <input type="submit" name="btn" value="Deletar">

</form>

<h1>Valores adicionados: </h1>


