<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
</head>
<body>
    <h1>Cadastro de 10 Pessoas</h1>
    <form action="salvarDados.php" method="post">
        <?php for ($i = 1; $i <= 10; $i++) { ?>
            <h2>Pessoa <?php echo $i; ?></h2>
            <label for="nome<?php echo $i; ?>">Nome:</label>
            <input type="text" name="nome<?php echo $i; ?>" value="a"><br>

            <label for="sobrenome<?php echo $i; ?>">Sobrenome:</label>
            <input type="text" name="sobrenome<?php echo $i; ?>" value="a"><br>

            <label for="email<?php echo $i; ?>">Email:</label>
            <input type="text" name="email<?php echo $i; ?>" value="a"><br>

            <label for="senha<?php echo $i; ?>">Senha:</label>
            <input type="text" name="senha<?php echo $i; ?>" value="a"><br>

            <label for="cidade<?php echo $i; ?>">Cidade:</label>
            <input type="text" name="cidade<?php echo $i; ?>" value="a"><br>

            <label for="estado<?php echo $i; ?>">Estado:</label>
            <input type="text" name="estado<?php echo $i; ?>" value="a"><br>
        <?php } ?>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>
