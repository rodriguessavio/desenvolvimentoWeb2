<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Sistema de Votação - IFPI</h1>

    <h3>
        Qual candidato você escolhe para presidente do gremio estudantil?
    </h3>
    <br>

    <fieldset class="f1">
        <img src="img/darth.jpg" class="darth" alt="">
        <p><b>Darth Vader</b> - Candidato 01</p>
        <img src="img/homer.png" alt="">
        <p><b>Homer Simpson</b> - Candidato 02</p>
    </fieldset>

    <div class="btns">
        <form method="post">
            <input type="submit" name="btn" value="Darth Vader">
            <input type="submit" name="btn" value="Homer Simpson">
            <input type="submit" name="btn" value="Branco">
            <input type="submit" name="btn" value="Nulo">
        </form>
    </div>

    <fieldset class="f2">
        <legend>Resultado Parcial</legend>
        <?php

            session_start();    
            
            if (isset($_SESSION['DT']) && isset($_SESSION['NL']) && isset($_SESSION['HM']) && isset($_SESSION['BR'])) {
                $DT = 0; 
                $NL = 0; 
                $BR  = 0; 
                $HM = 0;
            } 
                $DT = @$_SESSION['DT'];
                $HM = @$_SESSION['HM'];
                $BR = @$_SESSION['BR'];
                $NL = @$_SESSION['NL'];
            
            


            switch (@$_POST['btn']) {
                case 'Darth Vader':
                    $DT++;
                    @$_SESSION['DT'] = $DT;
                break;

                case 'Homer Simpson':
                    $HM++;
                    @$_SESSION['HM'] = $HM;
                break;

                case 'Branco':
                    $BR++;
                    @$_SESSION['BR'] = $BR;
                break;

                case 'Nulo':
                    $NL++;
                    @$_SESSION['NL'] = $NL;
                break;
            }

            $total = @$_SESSION['NL'] + @$_SESSION['BR'] + @$_SESSION['HM'] + @$_SESSION['DT'];

            $pBR = (@$_SESSION['BR']/$total) *100;

            $pNL = (@$_SESSION['NL']/$total) *100;

            $pHM = (@$_SESSION['HM']/$total) *100;
            
            $pDT = (@$_SESSION['DT']/$total) *100;
            
            
            echo "Candidato 01 - ".round($pDT)."%<br><hr align='left' style='width:". ($pDT+150)."px; border-color: blue; height: 7px; background: blue; border-radius: 5px;'>"; ;
            echo "Candidato 02 - ".round($pHM)."%<br><hr align='left' style='width:". ($pHM+150)."px; border-color: red; height: 7px; background: red; border-radius: 5px;'>";
            echo "Branco - ".round($pBR)."%<br><hr align='left' style='width:". ($pBR+150)."px; border-color: white; height: 7px; background: white; border-radius: 5px;'>";
            echo "Nulo - ".round($pNL)."%<br><hr align='left' style='width:". ($pNL+150)."px; border-color: gray; height: 7px; background: gray; border-radius: 5px;'>";

            // session_unset();

            

            
        ?>
    </fieldset>

</body>
</html>