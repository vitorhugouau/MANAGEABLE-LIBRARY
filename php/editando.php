<?php
include_once('adm_session.php');
?>
<?php

if(isset($_POST['edit']) && isset($_POST['nome']) && isset($_POST['sobrenome']) && isset($_POST['cidade']) && isset($_POST['estado'])) {
    
    include('banco.php');

    // recupera os dados enviados pelo formulário
    $edit = $_POST['edit'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    // codigo sql para atualizar o registro 
    $sql = "UPDATE teste SET nome='$nome', sobrenome='$sobrenome', cidade='$cidade', 
    estado='$estado' WHERE id=$edit";

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
