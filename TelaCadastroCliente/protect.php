<?php
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])){
    die("Você não pode acessar essa página porque não está logado.<p><a href=\"tela-login.html\">Entrar</a></p>");
}

?>
