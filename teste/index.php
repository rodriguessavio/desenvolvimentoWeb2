<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <form action="" method = "post" >
        <input type="submit" name = "btn" value="contador">
    </form>

    <?php
        session_start();

        if (isset($_SESSION['cont'])) {
            $i = 0;
        }

        $i = @$_SESSION['cont'];

        function contar() {
            global $i;
            $i++;
            $_SESSION['cont'] = $i;

        }   

        if (@$_POST['btn'] == 'contador') {
            contar();
            echo $i;
        }

    ?>  
</body>
</html>