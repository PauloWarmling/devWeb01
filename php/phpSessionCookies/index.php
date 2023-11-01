<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="processaLogin.php" method="POST">
        <label for="username">Usuário:</label>
        <input type="text" name="username" id="username" required><br>
        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" required><br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>