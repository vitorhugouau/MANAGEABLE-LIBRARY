<?php
include_once('adm_session.php');
?>
<?php

if(isset($_POST['edit']) && isset($_POST['nome']) && isset($_POST['sobrenome']) && isset($_POST['email']) && isset($_POST['senha'])) {
    
    include('banco.php');

    // recupera os dados enviados pelo formulário
    $edit = $_POST['edit'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // codigo sql para atualizar o registro 
    $sql = "UPDATE usuarios SET nome='$nome', sobrenome='$sobrenome', email='$email', 
    senha='$senha' WHERE id=$edit";

    if ($conexao->query($sql) === TRUE) {
        header('Location: inserindo.php'); 
    } else {
        echo "erro ao atualizar registro: " . $conexao->error;
    }
    $conexao->close();
} else {
    echo "dados incompletos.";
}
?>
