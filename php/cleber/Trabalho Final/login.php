<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Login</title>
</head>
<body>

    <header>
        <section>
            <div class="header-form">
                <h1>Login</h1>
            </div>
        </section>
    </header>

    <main>
        <div class="app">
            <form method="post" action='./assets/processaLogin.php' id='form'>
                <fieldset>

                    <div class="fieldset-wrapper">

                        <div class="input-wrapper">
                            <label for="username">Usuário<span>(Digite seu nome de usuário)</span></label>
                            <input type="text" id="username" name="username" required><br>
                        </div>

                        <div class="input-wrapper">
                            <label for="password_hash">Senha<span>(Digite sua senha)</span></label>
                            <input type="password" id="password" name="password" required><br>
                        </div>

                    </div>

                </fieldset>


                <div class="footer-form">

                    <div class="button-wrapper">
                        <input type="submit" value="login" id="login">
                    </div>

                </div>
            </form>
        </div>
    </main>
</body>
</html>