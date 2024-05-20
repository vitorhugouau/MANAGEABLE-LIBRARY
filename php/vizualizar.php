<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibição de Imagem</title>
</head>
<body>
    <h2>Imagem do Banco de Dados</h2>
    <?php
    include('banco.php');
    // Prepara a instrução SQL para recuperar os dados da imagem
    $sql = "SELECT nome, imagem FROM imagens ORDER BY id DESC LIMIT 1";
    // Executa a instrução SQL
    $result = $conexao->query($sql);

    // Verifica se há resultados
    if ($result->num_rows > 0) {
        // Recupera os dados da imagem
        $row = $result->fetch_assoc();
        $imageName = $row['nome'];
        $imageData = $row['imagem'];

        // Exibe a imagem
        echo "<img src='data:image/jpeg;base64," . base64_encode($imageData) . "' alt='$imageName' width='600px'> ";
        
    } else {
        echo "Nenhuma imagem encontrada.";
    }

    // Fecha a conexão com o banco de dados
    $conexao->close();
    ?>
</body>
</html>
