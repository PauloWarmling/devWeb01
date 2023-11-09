<?php
include_once("./model/pessoa.php");

$oPessoa = new Pessoa();

$oPessoa->setNome('Paulo');
$oPessoa->setSobrenome('Warmling');
$oPessoa->setDtnascimento('27/03/2001');

$oPessoa->getEndereco()->setLogradouro('Meu Logradouro');
$oPessoa->getEndereco()->setBairro('Sumaré');
$oPessoa->getEndereco()->setCidade('Rio do Sul');
$oPessoa->getEndereco()->setEstado('SC');

$oPessoa->getTelefone()->setTipo('celular');
$oPessoa->getTelefone()->setNome('Mãe');
$oPessoa->getTelefone()->setValor('47 9999999');

echo 'Nome Completo: '.$oPessoa->getNomeCompleto($oPessoa->getNome(), $oPessoa->getSobrenome()).'<br>';
echo 'Idade: '.$oPessoa->getIdade($oPessoa->getDtnascimento()).'<br>';
echo 'Endereço - Logradouro:  '. $oPessoa->getEndereco()->getLogradouro().
' Bairro: '.$oPessoa->getEndereco()->getBairro().
' Cidade: '.$oPessoa->getEndereco()->getCidade().
' Estado: '.$oPessoa->getEndereco()->getEstado();

?>