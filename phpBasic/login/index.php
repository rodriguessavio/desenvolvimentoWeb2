<?php
session_start();

// Verifique se o usuário está logado
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    // O usuário já está logado, redirecione para a página de perfil
    header("location: profile.php");
    exit();
}

// Verifique se o formulário de login foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = "usuario"; // Substitua com o nome de usuário real
    $password = "senha";   // Substitua com a senha real

    if ($_POST["username"] === $username && $_POST["password"] === $password) {
        // Autenticação bem-sucedida, crie uma variável de sessão para armazenar o estado de login
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;

        // Redirecione para a página de perfil após o login
        header("location: profile.php");
        exit();
    } else {
        $login_error = "Credenciais inválidas. Tente novamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
    </form>
    <?php if (isset($login_error)) { echo "<p>$login_error</p>"; } ?>
</body>
</html>
