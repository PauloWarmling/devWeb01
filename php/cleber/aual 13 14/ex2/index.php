<?php

include_once("./model/pessoa.php");

$oMae = new Pessoa();
$oMae->setNome('Maria');
$oMae->setSobrenome('Silva');
$oMae->setDtnascimento('15/05/1970');

$oPai = new Pessoa();
$oPai->setNome('José');
$oPai->setSobrenome('Silva');
$oPai->setDtnascimento('20/08/1968');

$oIrmao = new Pessoa();
$oIrmao->setNome('Carlos');
$oIrmao->setSobrenome('Silva');
$oIrmao->setDtnascimento('10/12/1995');


$aFamilia = [$oMae, $oPai, $oIrmao];


$fileContent = '';

foreach ($aFamilia as $pessoa) {
    $fileContent .= "Nome: " . $pessoa->getNomeCompleto($pessoa->getNome(), $pessoa->getSobrenome()) . "\n";
    $fileContent .= "Data de Nascimento: " . $pessoa->getDtnascimento() . "\n";
    $fileContent .= "Idade: " . $pessoa->getIdade($pessoa->getDtnascimento()) . " anos\n";
    $fileContent .= "-----------------\n";
}

$file = fopen("familia.txt", "w");
fwrite($file, $fileContent);
fclose($file);

echo "Conteúdo da família salvo no arquivo familia.txt <br>";

echo "<a href='familia.txt'>Acessar arquivo</a>"
?>
