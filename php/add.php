<?php
include_once('adm_session.php');
?>
<?php
// Configurações do banco de dados
include('banco.php');
// Verifica se o formulário foi submetido
if(isset($_POST["submit"])) {
    // Obtém os dados da imagem
    $imageName = $_FILES['fileToUpload']['name'];
    $imageData = addslashes(file_get_contents($_FILES['fileToUpload']['tmp_name']));

    // Prepara a instrução SQL para inserir os dados da imagem no banco de dados
    $sql = "INSERT INTO biblioteca (nome, imagem) VALUES ('$imageName', '$imageData')";

    // Executa a instrução SQL
    if ($conexao->query($sql) === TRUE) {
        echo "Imagem enviada com sucesso.";
        header('Location: library.php');
    } else {
        echo "Erro ao enviar imagem: " .$conexao->error;
    }
}

$conexao->close();
?>

