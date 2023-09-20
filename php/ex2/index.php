<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header-content"></div>
        <h1>Exercício php</h1>
        <p>Crie um programa para testar é um número é divisível por 2.</p>
         <ul>
            <li>Caso for verdade escrever a frase “Valor divisível por 2</li>
            <li>Caso for falso escrever a frase “O valor não é divisível por 2</li>
         </ul>
    </header>

    <main>
        <form id="form" method="GET">
            <div class="fieldset-wrapper">

                <div class="input-wrapper">
                    <label for="number">Número</label>
                    <input type="text" name="number" id="number">
                </div>

            </div>
            
            <div class="submit-wrapper">
                <input type="submit" value="Verificar" id="enviar">
            </div>

            
        </form>

        <?php

            if(isset($_GET['number'])){
                $n = intval($_GET['number']); // Converta o valor em número
            }


        ?>

        <div class="result">
            <?php
                if ($n % 2) {
                    echo '<p>O valor não é divisível por 2</p>';
                } else {
                    echo '<p>Valor divisível por 2</p>';
                }
            ?>
        </div>
        
    </main>

</body>
</html>