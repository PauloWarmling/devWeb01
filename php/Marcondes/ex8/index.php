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
            Paulinho foi comprar uma moto nova. A empresa vende motos muito baratas pois utiliza Juros Simples para o cálculo das parcelas. Sabendo então que o valor a vista do moto é R$ 8.654,00. Crie um programa que calcule o valor das parcelas para as opções abaixo, sabendo que a taxa de juros aumenta 0,5% em cada nível e inicia em 1,5% para 24 vezes:
        </p>
        <ul>
            <li>24 vezes</li>
            <li>48 vezes</li>
            <li>60 vezes</li>
        </ul>
    </header>

    <main>
    <?php

        // Valor à vista da moto
        $preco_moto = 8654.00;

        // Taxa de juros inicial (1,5% para 24 vezes)
        $taxa_juros = 1.5;

        // Níveis de parcelamento
        $parcelas = [24, 48, 60];

        foreach ($parcelas as $num_parcelas) {
            // Cálculo da taxa de juros para o número de parcelas atual
            $taxa_juros_atual = $taxa_juros + ($num_parcelas - 24) * 0.5;
            
            // Cálculo do montante total a ser pago
            $montante_total = $preco_moto * (1 + ($num_parcelas * $taxa_juros_atual) / 100);
            
            // Cálculo do valor da parcela
            $valor_parcela = $montante_total / $num_parcelas;
        
    ?>

    <div class="result">
    <?php
        echo "<p>Para $num_parcelas vezes: R$ " . number_format($valor_parcela, 2, ',', '.') . " por parcela</p>";
    ?>
    </div>
    <?php 
        } 
    ?>
        <form id="form" method="GET">
            <div class="fieldset-wrapper">

                <div class="input-wrapper">
                    <label for="escolha">24 vezes</label>
                    <input type="radio" name="escolha" id="escolha" value="24">
                </div>

                <div class="input-wrapper">
                    <label for="escolha2">48 vezes</label>
                    <input type="radio" name="escolha" id="escolha2" value="48">
                </div>
                
                <div class="input-wrapper">
                    <label for="escolha3">60 vezes</label>
                    <input type="radio" name="escolha" id="escolha3" value="60">
                </div>

            </div>
            
            <div class="submit-wrapper">
                <input type="submit" value="Comprar" id="enviar">
            </div>

        </form>
        <?php
            if (isset($_GET['escolha'])) {
                $escolha = $_GET['escolha'];
            } else {
                $escolha = "Nenhuma opção selecionada";
            }
        ?>

        <div class="result">
            <?php
            echo "<p>Parcelar em " . $escolha . "x</p>";
            ?>
        </div>
    </main>

</body>
</html>