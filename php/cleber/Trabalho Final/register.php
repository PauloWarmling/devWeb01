<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Registrar</title>
</head>
<body>

    <header>
        <section>
            <div class="header-form">
                <h1>Registrar Cliente</h1>
            </div>
        </section>
    </header>

    <main>
        <div class="app">
            <form method="post" action='./assets/processaCadastro.php'>
                <fieldset>

                    <div class="fieldset-wrapper">

                        <div class="input-wrapper">
                            <label for="nome">Nome<span>(Digite o nome)</span></label>
                            <input type="text" id="nome" name="nome" required><br>
                        </div>

                        <div class="input-wrapper">
                            <label for="sobrenome">Sobrenome<span>(Digite o sobrenome)</span></label>
                            <input type="text" id="sobrenome" name="sobrenome" required><br>
                        </div>

                        <div class="input-wrapper">
                            <label for="data_nascimento">Data de Nascimento<span>(Digite a data de nascimento)</span></label>
                            <input type="date" id="data_nascimento" name="data_nascimento" required><br>
                        </div>

                        <div class="input-wrapper">
                            <label for="email">Endereço de E-mail<span>(Digite o endereço de e-mail)</span></label>
                            <input type="email" id="email" name="email" required><br>
                        </div>

                    </div>

                </fieldset>

                <div class="footer-form">

                    <div class="button-wrapper">
                        <input type="submit" value="Registrar">
                    </div>

                    <div class="button-wrapper">
                        <button type="submit" onclick="window.location.href = './dashboard.php'">Voltar</button>
                    </div>

                </div>
            </form>
        </div>
        
    </main>
</body>
</html>