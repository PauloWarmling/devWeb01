<?php

namespace lab2\model;
class Pessoa {
    private $nome;
    private $sobrenome;
    private $dtnascimento;
    private $cpfcnpj;
    private $tipo;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getDtnascimento() {
        return $this->dtnascimento;
    }

    public function setDtnascimento($dtnascimento) {
        $this->dtnascimento = $dtnascimento;
    }

    public function getCpfcnpj() {
        return $this->cpfcnpj;
    }

    public function setCpfcnpj($cpfcnpj) {
        $this->cpfcnpj = $cpfcnpj;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getNomeCompleto($nome, $sobrenome){
        return $nome. ' ' .$sobrenome;
    }

}
?>