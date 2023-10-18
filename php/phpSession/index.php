<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Staatliches&display=swap" rel="stylesheet">
</head>
<body>
    <form action="login.php" method="post">
        <div class="painel">
            <div class="input-wrapper">
                <label for="username">Nome de Usuário:</label>
                <input type="text" name="username" id="username" required>
            </div>
            
            <div class="input-wrapper">
                <label for="password">Senha:</label>
                <input type="password" name="password" id="password" required>
            </div>
            
            <div class="action">
                <div class="button">
                    <input type="submit" value="Login">
                </div>

                <div class="button">
                    <a href="register.php">Cadastrar</a>
                </div>
            </div>
        </div>
    </form>
</body>
</html>