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
        Joãozinho recebeu R$ 50,00 reais de seu pai para ir à feira comprar frutas e verduras. Ele comprou maçã, melancia, laranja, repolho, cenoura, batatinha. Crie um programa que calcule o valor gasto com cada produto comprado, sendo o resultado do valor individual do produto em Kg multiplicado pela quantidade em Kg comprada por Joãozinho. Ao final escrever uma frase com o valor da compra, para um previsão se o dinheiro será o suficiente para pagar a conta, caso falte dinheiro escrever uma frase em vermelho com o valor que ficou acima do disponível por Joãozinho, e não, escrever uma fase em azul e o valor que Joãozinho ainda poderia gastar. Caso o valor da compra seja exatamente igual ao R$ 50,00 disponível, escreva uma frase em verde afirmando que o saldo para compras foi esgotado.        </p>

    </header>

    <main>
        <form id="form" method="GET">
            <div class="fieldset-wrapper">

                <div class="input-wrapper">
                    <label for="apple">Maçã <span>(R$2.5 o kg)</span></label>
                    <input type="text" name="apple" id="apple">
                </div>

                <div class="input-wrapper">
                    <label for="watermelon">Melancia <span>(R$1.8 o kg)</span></label>
                    <input type="text" name="watermelon" id="watermelon">
                </div>

                <div class="input-wrapper">
                    <label for="orange">Laranja <span>(R$1.0 o kg)</span></label>
                    <input type="text" name="orange" id="orange">
                </div>

                <div class="input-wrapper">
                    <label for="cabbage">Repolho <span>(R$3.0 o kg)</span></label>
                    <input type="text" name="cabbage" id="cabbage">
                </div>

                <div class="input-wrapper">
                    <label for="littlePotato">Batatinha <span>(R$2.8 o kg)</span></label>
                    <input type="text" name="littlePotato" id="littlePotato">
                </div>

            </div>
            
            <div class="submit-wrapper">
                <input type="submit" value="Comprar" id="enviar">
            </div>

            
        </form>

        <?php
            // Preços dos produtos por Kg
            $preco_macas = 2.5;
            $preco_melancia = 1.8;
            $preco_laranja = 1.0;
            $preco_repolho = 3.0;
            $preco_cenoura = 2.2;
            $preco_batatinha = 2.8;

            // Quantidades em Kg compradas por Joãozinho
            $quantidade_macas = isset($_GET['apple']) ? floatval($_GET['apple']) : 0.0;
            $quantidade_melancia = isset($_GET['watermelon']) ? floatval($_GET['watermelon']) : 0.0;
            $quantidade_laranja = isset($_GET['orange']) ? floatval($_GET['orange']) : 0.0;
            $quantidade_repolho = isset($_GET['cabbage']) ? floatval($_GET['cabbage']) : 0.0;
            $quantidade_cenoura = isset($_GET['carrot']) ? floatval($_GET['carrot']) : 0.0;
            $quantidade_batatinha = isset($_GET['littlePotato']) ? floatval($_GET['littlePotato']) : 0.0;

            // Cálculo do valor gasto com cada produto
            $valor_macas = $preco_macas * $quantidade_macas;
            $valor_melancia = $preco_melancia * $quantidade_melancia;
            $valor_laranja = $preco_laranja * $quantidade_laranja;
            $valor_repolho = $preco_repolho * $quantidade_repolho;
            $valor_cenoura = $preco_cenoura * $quantidade_cenoura;
            $valor_batatinha = $preco_batatinha * $quantidade_batatinha;

            // Cálculo do valor total da compra
            $total_compra = $valor_macas + $valor_melancia + $valor_laranja + $valor_repolho + $valor_cenoura + $valor_batatinha;

            // Dinheiro disponível com Joãozinho
            $dinheiro_disponivel = 50.0;
        ?>

        <div class="result">
            <?php
                if ($total_compra < $dinheiro_disponivel) {
                        echo "<p>O valor da compra foi de R$ " . $total_compra . ". Joãozinho ainda poderia gastar R$ " . ($dinheiro_disponivel - $total_compra) . ".</p>";
                    } elseif ($total_compra > $dinheiro_disponivel) {
                        echo '<p style="color: red;">O valor da compra foi de R$ ' . $total_compra . '. Joãozinho ficou R$ ' . ($total_compra - $dinheiro_disponivel) . ' acima do disponível.</p>';
                    } else {
                        echo '<p style="color: green;">O saldo para compras foi esgotado.</p>';
                    }
            ?>
        </div>
        
    </main>

</body>
</html>