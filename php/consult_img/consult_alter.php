<?php
include_once('../adm_session.php');
?>
<?php
include('../banco.php');


$texto = $_SESSION['nome'];

// Verifica se o ID do registro a ser editado foi enviado
if(isset($_POST['edit'])) {
    // Conecta ao banco de dados (substitua os valores conforme necessário)
    
    // Recupera o ID do registro a ser editado
    $edit = $_POST['edit'];
    
    // Consulta o banco de dados para obter os detalhes do registro a ser editado
    $sql = "SELECT * FROM $texto WHERE id = $edit";
    $result = $conexao->query($sql);
    
    if ($result->num_rows > 0) {
        // Exibe o formulário de edição
        $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/upload.css">
    <title>Exibição de Imagem</title>
</head>
<body>
    <nav>
        <ul class= "menu">
            <li><a href="../biblioteca.php">BIBLIOTECA</a></li>
            <li><a href="../control.php">VOLTAR</a></li>
        </ul>
    </nav>
    <div class="container">
        <h1 class="heading">EDITAR REGISTRO</h1>
    </div>

    <br>
    <h1></h1>
<br>
    <div class="cont">
        <form action="consult_name.php" method="post" onsubmit="return confirmarEdicao()">
            <div class="area">
                <input type="hidden" name="edit" value="<?php echo $row['id']; ?>">
                <label for="nome">NOME</label>
                    <input type="text" name="nome" id="nome" value="<?php echo $row['nome']; ?>">
            </div>
            <div>
                <input type="submit" value="SALVAR ALTERAÇÕES">
            </div>
        </form>
    </div>
</body>
<script>
        function confirmarEdicao() {
            return confirm("SALVAR AS ALTERAÇÕES?");
        }
    </script>
</html>
<?php
    } else {
        echo "Registro não encontrado.";
    }
}
?>

