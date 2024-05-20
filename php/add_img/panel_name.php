<?php
include_once('../adm_session.php');
?>
<?php
try{
include('../banco.php');


$texto = $_SESSION['nome'];

if(isset($_POST['edit']) && isset($_POST['nome'])) {
    // recupera os dados enviados pelo formulário
    $edit = $_POST['edit'];
    $nome = $_POST['nome'];
    
    // código SQL para atualizar o registro 
    $sql = "UPDATE $texto SET nome='$nome', imagem=imagem WHERE id=$edit";

    if ($conexao->query($sql) === TRUE) {
        header('Location: panel_consult.php'); 
    } else {
        echo "Erro ao atualizar registro: " . $conexao->error;
    }
    $conexao->close();
} else {
    echo "Dados incompletos.";
}
}catch(Exception $e){
    echo $e->getMessage();
}
?>
