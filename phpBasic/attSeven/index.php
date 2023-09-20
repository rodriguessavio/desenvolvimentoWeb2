<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Prato do Dia</h1>
    <?php
        $refeicoes_da_semana = [
            0 => [
                'dia' => "Domingo",
                'prato' => "Lasanha a quatro queijos",
                'preco' => 12.60
            ],
            1 => [
                'dia' => "Segunda",
                'prato' => "Frango ao molho madeira",
                'preco' => 10.00
            ],
            2 => [
                'dia' => "Terça",
                'prato' => "Arroz à grega",
                'preco' => 9.40
            ],
            3 => [
                'dia' => "Quarta",
                'prato' => "Feijoada à moda da casa",
                'preco' => 11.20
            ],
            4 => [
                'dia' => "Quinta",
                'prato' => "Nhoque paulista",
                'preco' => 8.50
            ],
            5 => [
                'dia' => "Sexta",
                'prato' => "Bacalhau ao forno",
                'preco' => 15.20
            ],
            6 => [
                'dia' => "Sábado",
                'prato' => "Feijão Branco",
                'preco' => 10.00
            ]
        ];
        
        $dia_da_semana = date("w");
        $refeicao_do_dia = $refeicoes_da_semana[$dia_da_semana];
        
        $nome_dia_da_semana = $refeicao_do_dia['dia'];
        $prato_do_dia = $refeicao_do_dia['prato'];
        $preco_do_dia = $refeicao_do_dia['preco'];

        echo "Hoje é $nome_dia_da_semana <br>";

        echo "Nossa sugestão para hoje é:". $prato_do_dia."<br>";
        echo "Preço: $preco_do_dia <br>";
        
    ?>
</body>
</html>