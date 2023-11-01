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
        Juquinha seguindo o mesmo caminho que Paulinho foi comprar uma moto nova, mas pena que ele não sabia da mesma chance que Paulinho. A empresa que Juquinha foi comprar a moto utiliza juros compostos para calcular o valor das parcelas. As opções de compras estudadas por ele são as mesmas de Paulinho, ou seja 24, 36, 48 e 60 vezes o juro nesta empresa inicia em 2% para 24 vezes e aumenta 0,3% para as opções de parcelamento seguintes. Utilizando então a fórmula de juros composto que segue abaixo, calcule o valor da parcela para cada uma das opções a ser estudada por Juquinha.
        </p>
        <ul>
            <li>24 vezes</li>
            <li>24 vezes</li>
            <li>48 vezes</li>
            <li>60 vezes</li>
        </ul>
    </header>

    <main>
    <?php
        // Valor à vista da moto
        $preco_moto = 8654.00;

        // Níveis de parcelamento
        $parcelas = [24, 36, 48, 60];

        // Taxa de juros inicial (2% para 24 vezes)
        $taxa_juros = 0.02;

        foreach ($parcelas as $num_parcelas) {
            // Cálculo da taxa de juros para o número de parcelas atual
            $taxa_juros_atual = $taxa_juros + ($num_parcelas - 24) * 0.003;
            
            // Cálculo do valor da parcela usando a fórmula de juros compostos
            $valor_parcela = $preco_moto * (pow(1 + $taxa_juros_atual, $num_parcelas)) * $taxa_juros_atual / (pow(1 + $taxa_juros_atual, $num_parcelas) - 1);
            
            
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
                    <label for="escolha">36 vezes</label>
                    <input type="radio" name="escolha" id="escolha" value="36">
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