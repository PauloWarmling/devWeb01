<?php

class Conexao {
    private $host;
    private $usuario;
    private $senha;
    private $banco;
    private $conexao;

    public function __construct($host, $usuario, $senha, $banco) {
        $this->host = $host;
        $this->usuario = $usuario;
        $this->senha = $senha;
        $this->banco = $banco;
    }

    public function conectar() {
        $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);

        // Verificar se ocorreu algum erro na conexão
        if ($this->conexao->connect_error) {
            die("Erro na conexão com o banco de dados: " . $this->conexao->connect_error);
        }

        return $this->conexao;
    }

    public function fecharConexao() {
        // Fechar a conexão com o banco de dados
        if ($this->conexao) {
            $this->conexao->close();
        }
    }
    
}
?>
