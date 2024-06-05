<?php
include_once('../adm_session.php');

if(isset($_POST['edit']) && isset($_POST['nome']) && isset($_POST['cpf']) && isset($_POST['datadenascimento']) && isset($_POST['sexo']) && isset($_POST['estadocivil']) && isset($_POST['estado']) && isset($_POST['logradouro']) && isset($_POST['numero']) && isset($_POST['complemento']) && isset($_POST['cidade']) && isset($_POST['email'])) {
    
    include('../banco.php');

    // recupera os dados enviados pelo formulário
    $edit = $_POST['edit'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $datadenascimento = $_POST['datadenascimento'];
    $sexo = $_POST['sexo']; 
    $estadocivil = $_POST['estadocivil']; 
    $estado = $_POST['estado'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $cidade = $_POST['cidade'];
    $email = $_POST['email'];

    // código SQL para atualizar o registro 
    $sql = "UPDATE clientes SET nome='$nome', cpf='$cpf', datadenascimento='$datadenascimento', sexo='$sexo', estadocivil='$estadocivil', estado='$estado', logradouro='$logradouro', numero='$numero', complemento='$complemento', cidade='$cidade', email='$email' WHERE id=$edit";

    if ($conexao->query($sql) === TRUE) {
        header('Location: crud_serviço.php'); 
    } else {
        echo "Erro ao atualizar registro: " . $conexao->error;
    }
    $conexao->close();
} else {
    echo "Dados incompletos.";
}
?>
