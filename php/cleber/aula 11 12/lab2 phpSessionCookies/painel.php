<?php
if (isset($_COOKIE["username"])) {
    echo "Seus Dados<br>";
    echo "Nome: " . $_COOKIE["username"].'<br>';
    echo "Sessão início da sessão: " . $_COOKIE["session_start_time"].'<br>';
    echo "Última sessão: " . $_COOKIE["last_request_time"].'<br>';
} else {
    echo "O Cookie 'username' não foi definido!";
}
?>