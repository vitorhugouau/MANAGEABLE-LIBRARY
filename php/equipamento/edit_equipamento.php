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
    $sql = "SELECT * FROM equipamentos WHERE id_equipamento = $edit";
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
            <li><a href="crud_equipamento.php">VOLTAR</a></li>
        </ul>
    </nav>
<br>
    <h1>EDITAR REGISTRO</h1>
<br>
    <div class="cont">
        <form action="inserindo_equipamento.php" method="post" onsubmit="return confirmarEdicao()">
            <div class="area">
                <input type="hidden" name="edit" value="<?php echo $row['id_equipamento']; ?>">
                
                <label for="nome">NOME</label>
                    <input type="text" name="nome" id="nome" value="<?php echo $row['nome']; ?>">
            </div>
            <div class="area">
                <label for="modelo">MODELO</label>
                    <input type="text" name="modelo" id="modelo" value="<?php echo $row['modelo']; ?>">
            </div>
            
            <div class="area">
                <label for="ano_fabricacao">ANO DE FABRICAÇÃO</label>
                    <input type="text" name="ano_fabricacao" id="ano_fabricacao" value="<?php echo $row['ano_fabricacao']; ?>">
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
