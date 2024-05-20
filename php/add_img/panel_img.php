<?php
include_once('../adm_session.php');
?>
<?php

try{
include('../banco.php');


if(isset($_POST["submit"])) {
    
    $texto = @$_POST['texto'];
    $imageName = @$_FILES['fileToUpload']['name'];
    $imageData = addslashes(file_get_contents(@$_FILES['fileToUpload']['tmp_name']));

    
    $sql = "INSERT INTO $texto (nome, imagem) VALUES ('$imageName', '$imageData')";

    if ($conexao->query($sql) === TRUE) {
        $_SESSION ['nome'] = $texto;
        echo "Imagem enviada com sucesso.";
        header('Location: panel_table.php');
    } else {
        echo "Erro ao enviar imagem: ";
        echo "<a href='panel_control.php'>VOLTAR</a>";  
        
    }
}
}catch(Exception $e){
    echo $e-> getMessage();
}
$conexao->close();
?>

