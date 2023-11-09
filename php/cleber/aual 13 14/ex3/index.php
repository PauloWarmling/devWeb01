<?php

include_once("./model/pessoa.php");

$oPessoa = new Pessoa();
$oPessoa->setNome('Maria');
$oPessoa->setSobrenome('Silva');
$oPessoa->setDtnascimento('15/05/1970');

echo $oPessoa->toJson();

?>
