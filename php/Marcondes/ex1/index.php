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
        <p>Criar um programa que execute a soma de três valores.</p>
         <ul>
            <li>Se a primeira variável for maior que 10, escrever o resultado da operação em azul</li>
            <li>Se a segunda variável for menor que a terceira, escrever o resultado em verde</li>
            <li>Se a terceira variável for menor que a primeira e a segunda variável escrever o resultado em vermelho</li>
         </ul>
    </header>

    <main>
        <form id="form" method="GET">
            <div class="fieldset-wrapper">

                <div class="input-wrapper">
                    <label for="number">Número 1</label>
                    <input type="text" name="number" id="number">
                </div>

                <div class="input-wrapper">
                    <label for="number2">Número 2</label>
                    <input type="text" name="number2" id="number2">
                </div>
                
                <div class="input-wrapper">
                    <label for="number3">Número 3</label>
                    <input type="text" name="number3" id="number3">
                </div>

            </div>
            
            <div class="submit-wrapper">
                <input type="submit" value="Somar" id="enviar">
            </div>

            
        </form>

        <?php

            $result = 0; // Inicialize a variável $result com 0

            if(isset($_GET['number'])){
                $n = intval($_GET['number']); // Converta o valor em número
                $result += $n; // Adicione o valor à variável $result
            }

            if(isset($_GET['number2'])){
                $n2 = intval($_GET['number2']); // Converta o valor em número
                $result += $n2; // Adicione o valor à variável $result
            }

            if(isset($_GET['number3'])){
                $n3 = intval($_GET['number3']); // Converta o valor em número
                $result += $n3; // Adicione o valor à variável $result
            }
        ?>

        <div class="result">
            <?php
                if ($n > 10) {
                    echo '<p style="color: blue;">Resultado: ' . $result . '</p>';
                } elseif ($n2 < $n3) {
                    echo '<p style="color: green;">Resultado: ' . $result . '</p>';
                } elseif ($n3 < $n && $n3 < $n2) {
                    echo '<p style="color: red;">Resultado: ' . $result . '</p>';
                } else {
                    echo '<p>Resultado: ' . $result . '</p>';
                }
            ?>
        </div>
        
    </main>

</body>
</html>