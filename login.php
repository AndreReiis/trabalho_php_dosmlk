<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifica se o usuário existe e se a senha está correta
    if (isset($_SESSION['users'][$username]) && password_verify($password, $_SESSION['users'][$username])) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit;
    } else {
        $erro = "Usuário ou senha incorretos!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
<header>
    <h1>Login</h1>
</header>
<main>
    <?php if (isset($erro)) : ?>
        <p style="color: red;"><?= $erro ?></p>
    <?php endif; ?>
    <form action="login.php" method="post">
        <label for="username">Usuário:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit"> <a href="ingressos.php"> Entrar </a>  </button>  
    </form>
    <p>Não tem uma conta? <a href="registro.php">Registre-se</a></p>
</main>
</body>
</html>