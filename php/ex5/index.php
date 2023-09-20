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
        Crie um programa que calcule a área de um triângulo retângulo, cuja fórmula segue abaixo. Crie as variáveis apropriadas para o cálculo em PHP e por fim exiba uma frase com o valor da operação.
        </p>

    </header>

    <main>
        <form id="form" method="GET">
            <div class="fieldset-wrapper">

                <div class="input-wrapper">
                    <label for="number">Base <span>(Em metros)</span></label>
                    <input type="text" name="base" id="number">
                </div>

                <div class="input-wrapper">
                    <label for="number">Altura <span>(Em metros)</span></label>
                    <input type="text" name="height" id="number">
                </div>

            </div>
            
            <div class="submit-wrapper">
                <input type="submit" value="Calcular" id="enviar">
            </div>

            
        </form>

        <?php

            $area = 0;

            if(isset($_GET['base'])){
                $base = intval($_GET['base']);
            }

            if(isset($_GET['height'])){
                $height = intval($_GET['height']);
            }
            $area = ($base * $height) / 2;

        ?>

        <div class="result">
            <?php
                echo "<p>Area do triangulo retangulo: ".$area." metros quadrados</p>"
            ?>
        </div>
        
    </main>

</body>
</html>