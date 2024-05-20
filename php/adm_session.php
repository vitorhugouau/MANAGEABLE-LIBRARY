<?php
session_start();

// Verificar se o usuário está logado
if(isset($_SESSION['nome'])) {
    $usuario = $_SESSION['nome'];
} else {
    // Se o usuário não estiver logado, redirecionar para a página de login
    header('Location: /php/adm.php');
    exit();
}

?>