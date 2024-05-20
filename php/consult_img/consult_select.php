<?php
include_once('../adm_session.php');
?>
<?php

try{
include('../banco.php');


if(isset($_POST["submit"])) {
    
    $texto = @$_POST['texto'];

    $sql = "SELECT * FROM $texto";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION ['nome'] = $texto;
        header('Location: consult_table.php');
    } else {
        echo "Erro ao enviar imagem: ";
        echo "<a href='consult_control.php'>VOLTAR</a>";  
        
    }
}
}catch(Exception $e){
    echo $e-> getMessage();
}
$conexao->close();
?>

