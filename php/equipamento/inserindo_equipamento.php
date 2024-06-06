<?php
include_once('../adm_session.php');

if(isset($_POST['edit']) && isset($_POST['nome']) && isset($_POST['modelo']) && isset($_POST['ano_fabricacao'])) {
    
    include('../banco.php');

    // recupera os dados enviados pelo formulário
    $edit = $_POST['edit'];
    $nome = $_POST['nome'];
    $modelo = $_POST['modelo'];
    $ano_fabricacao = $_POST['ano_fabricacao'];
    

    // código SQL para atualizar o registro 
    $sql = "UPDATE equipamentos SET nome='$nome', modelo='$modelo', ano_fabricacao='$ano_fabricacao' WHERE id_equipamento=$edit";

    if ($conexao->query($sql) === TRUE) {
        header('Location: crud_equipamento.php'); 
    } else {
        echo "Erro ao atualizar registro: " . $conexao->error;
    }
    $conexao->close();
} else {
    echo "Dados incompletos.";
}
?>
