<?php
session_start();

// Verifique se o usuário está logado
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    // O usuário não está logado, redirecione para a página de login
    header("location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Página de Perfil</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo $_SESSION["username"]; ?>!</h2>
    <p>Esta é a sua página de perfil. Você está logado.</p>
    
    <a href="index.php">Logout</a>
</body>
</html>
