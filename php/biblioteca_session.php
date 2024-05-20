<?php
session_start();

// Verificar se o usuário está logado
if(isset($_SESSION['email'])) {
    $nome = $_SESSION['email'];
} else {
    // Se o usuário não estiver logado, redirecionar para a página de login
    header('Location: /php/index.php');
    exit();
}
?>