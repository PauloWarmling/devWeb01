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
        Mariazinha foi comprar um carro novo esse carro custa R$ 22.500,00 a vista, mas como ela não tem esse dinheiro para comprar a vista, resolveu fazer um financiamento, que ficou em 60 parcelas de R$ 489,65. Escreva um programa que calcule o valor gasto só dos juros que serão pagos por Mariazinha em comparação ao valor a vista do carro.
        </p>

    </header>

    <main>
        <!-- <form id="form" method="GET">
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

        </form> -->

        <?php
            // Valores dados
            $preco_carro = 22500.00; // Preço do carro à vista
            $numero_parcelas = 60; // Número de parcelas
            $valor_parcela = 489.65; // Valor da parcela mensal

            // Cálculo do montante total pago
            $montante_total = $valor_parcela * $numero_parcelas;

            // Cálculo da taxa de juros mensal
            $taxa_juros_mensal = pow(($montante_total / $preco_carro), 1 / $numero_parcelas) - 1;

            // Cálculo do valor gasto com juros
            $valor_juros = $montante_total - $preco_carro;

            
        ?>

        <div class="result">
            <?php
                echo "<p>Mariazinha pagará R$ " . number_format($valor_juros, 2, ',', '.') . " em juros ao longo do financiamento.</p>"
            ?>
        </div>
        
    </main>

</body>
</html>