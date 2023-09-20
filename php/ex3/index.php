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
        <p>
            Crie um programa que calcule a área de um quadrado. Você deve configurar uma 
            variável que representa o comprimento dos lados de um quadrado em metros.
            Após o cálculo escrever uma frase com o resultado da operação, exemplo: 
            “A área do quadrado de lado 3 metros é 9 metros quadrados”
        </p>

    </header>

    <main>
        <form id="form" method="GET">
            <div class="fieldset-wrapper">

                <div class="input-wrapper">
                    <label for="number">Comprimento dos lados do quadrado <span>(Em metros)</span></label>
                    <input type="text" name="number" id="number">
                </div>

            </div>
            
            <div class="submit-wrapper">
                <input type="submit" value="Calcular" id="enviar">
            </div>

            
        </form>

        <?php

            $area = 0;
            if(isset($_GET['number'])){
                $n = intval($_GET['number']);
            }
            $area = $n * $n;

        ?>

        <div class="result">
            <?php
                echo '<p>A área do quadrado de lado '. $n .' é '. $area .' metros quadrados</p>';
            ?>
        </div>
        
    </main>

</body>
</html>