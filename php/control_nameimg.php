<?php
include_once('adm_session.php');
?>
<?php
include('banco.php');

if(isset($_POST['edit']) && isset($_POST['nome'])) {
    // recupera os dados enviados pelo formulário
    $edit = $_POST['edit'];
    $nome = $_POST['nome'];
    
    // código SQL para atualizar o registro 
    $sql = "UPDATE biblioteca SET nome='$nome', imagem=imagem WHERE id=$edit";

    if ($conexao->query($sql) === TRUE) {
        header('Location: control_revision.php'); 
    } else {
        echo "Erro ao atualizar registro: " . $conexao->error;
    }
    $conexao->close();
} else {
    echo "Dados incompletos.";
}
?>
