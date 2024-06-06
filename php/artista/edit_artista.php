<?php
include_once('../adm_session.php');
?>
<?php
include('../banco.php');
// Verifica se o ID do registro a ser editado foi enviado
if(isset($_POST['edit'])) {
    // Conecta ao banco de dados (substitua os valores conforme necessário)
    
    // Recupera o ID do registro a ser editado
    $edit = $_POST['edit'];
    
    // Consulta o banco de dados para obter os detalhes do registro a ser editado
    $sql = "SELECT * FROM artistas WHERE id = $edit";
    $result = $conexao->query($sql);
    
    if ($result->num_rows > 0) {
        // Exibe o formulário de edição
        $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Registro</title>
    <link rel="stylesheet" href="/css/alterando.css">
</head>
<body background="/imgnovas/ti.jpg">
<!---------------------------------------BOTAO PARA VOLTAR------------------------------------------------------->
    <nav>
        <ul class= "menu">
            <li><a href="crud_artista.php">VOLTAR</a></li>
        </ul>
    </nav>
<br>
    <h1>EDITAR REGISTRO</h1>
<br>
    <div class="cont">
        <form action="inserindo_artista.php" method="post" onsubmit="return confirmarEdicao()">
            <div class="area">
                <input type="hidden" name="edit" value="<?php echo $row['id']; ?>">
                
                <label for="artista">ARTISTA</label>
                    <input type="text" name="artista" id="artista" value="<?php echo $row['artista']; ?>">
            </div>
            <div class="area">
                <label for="idade">IDADE</label>
                    <input type="text" name="idade" id="idade" value="<?php echo $row['idade']; ?>">
            </div>
            
            <div class="area">
                <label for="id_equipamento">EQUIPAMENTO DE USO</label>
                    <input type="text" name="id_equipamento" id="id_equipamento" value="<?php echo $row['id_equipamento']; ?>">
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
