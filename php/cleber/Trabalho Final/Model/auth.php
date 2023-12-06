<?php
class Autenticacao {
    public function autenticar($username, $password) {
        // Credenciais fixas (substitua com valores desejados)
        $usuarioArmazenado = $username;
        $senhaArmazenada = $password;

        // Verificar se as credenciais são válidas
        if ($username === $usuarioArmazenado) {
            return true;
        } else {
            return false;
        }
    }
}
?>