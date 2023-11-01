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
        Crie um programa que calcule a área de um retângulo. Você deve configurar duas variáveis que representam os lados a e b desse quadrado em metros. Após o cálculo escrever uma frase com o resultado da operação, exemplo: “A área do retângulo de lados 3 e 2 metros é 6 metros quadrados.” Caso a área for maior que 10 escreva a frase usando a tag h1, se não, escrever com h3.
        </p>

    </header>

    <main>
        <form id="form" method="GET">
            <div class="fieldset-wrapper">

                <div class="input-wrapper">
                    <label for="number">lado A <span>(Em metros)</span></label>
                    <input type="text" name="a" id="number">
                </div>

                <div class="input-wrapper">
                    <label for="number">lado B <span>(Em metros)</span></label>
                    <input type="text" name="b" id="number">
                </div>

            </div>
            
            <div class="submit-wrapper">
                <input type="submit" value="Calcular" id="enviar">
            </div>

            
        </form>

        <?php

            $area = 0;

            if(isset($_GET['a'])){
                $a = intval($_GET['a']);
            }

            if(isset($_GET['b'])){
                $b = intval($_GET['b']);
            }
            $area = $a * $b;

        ?>

        <div class="result">
            <?php
            if($area > 10){
                echo '<h1>A área do retângulo de lados ' .$a. ' e '. $b. ' é ' .$area. ' metros quadrados</h1>';
            } else {
                echo '<h3>A área do retângulo de lados ' .$a. ' e '. $b. ' é ' .$area. ' metros quadrados</h3>';
            }
            ?>
        </div>
        
    </main>

</body>
</html>