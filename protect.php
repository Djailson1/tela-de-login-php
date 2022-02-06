<?php

if(!isset($_SESSION)) {
    session_start();
}


if(!isset($_SESSION['id'])) {
    die("Você não pode acesssar essa página porque não esta logado. <p><a href=\"index.php\">Entrar</a></p>");
}
?>