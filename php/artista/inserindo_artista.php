<?php
include_once('../adm_session.php');

if(isset($_POST['edit']) && isset($_POST['artista']) && isset($_POST['idade']) && isset($_POST['id_equipamento'])) {
    
    include('../banco.php');

    // recupera os dados enviados pelo formulário
    $edit = $_POST['edit'];
    $artista = $_POST['artista'];
    $idade = $_POST['idade'];
    $id_equipamento = $_POST['id_equipamento'];
    

    // código SQL para atualizar o registro 
    $sql = "UPDATE artistas SET artista='$artista', idade='$idade', id_equipamento='$id_equipamento' WHERE id=$edit";

    if ($conexao->query($sql) === TRUE) {
        header('Location: crud_artista.php'); 
    } else {
        echo "Erro ao atualizar registro: " . $conexao->error;
    }
    $conexao->close();
} else {
    echo "Dados incompletos.";
}
?>
