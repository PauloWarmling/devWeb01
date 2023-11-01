<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz Aleatória em Tabela HTML</title>
</head>
<body>

<?php
// Defina os valores de x e y
$x = 5; // Número de linhas
$y = 5; // Número de colunas

// Função para gerar um número aleatório entre 1 e 1000
function rand1000() {
    return rand(1, 1000);
}

// Gere a matriz aleatória
$matriz = array();
for ($i = 0; $i < $x; $i++) {
    $linha = array();
    for ($j = 0; $j < $y; $j++) {
        $linha[] = rand1000();
    }
    $matriz[] = $linha;
}

// Exiba a matriz em uma tabela HTML
echo '<table border="1">';
foreach ($matriz as $linha) {
    echo '<tr>';
    foreach ($linha as $valor) {
        echo '<td>' . $valor . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>

</body>
</html>
