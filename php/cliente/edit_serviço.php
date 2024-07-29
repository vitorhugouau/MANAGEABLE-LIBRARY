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
    $sql = "SELECT * FROM clientes WHERE id = $edit";
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
            <li><a href="crud_serviço.php">VOLTAR</a></li>
        </ul>
    </nav>
<br>
    <h1>EDITAR REGISTRO</h1>
<br>
    <div class="cont">
        <form action="inserindo_serviço.php" method="post" onsubmit="return confirmarEdicao()">
            <div class="area">
                <input type="hidden" name="edit" value="<?php echo $row['id']; ?>">
                <label for="nome">NOME</label>
                    <input type="text" name="nome" id="nome" value="<?php echo $row['nome']; ?>">
            </div>
            <div class="area">
                <label for="cpf">CPF</label>
                    <input type="text" name="cpf" id="cpf" value="<?php echo $row['cpf']; ?>">
            </div>
            
            <div class="area">
                <label for="datadenascimento">DATA DE NASCIMENTO</label>
                    <input type="text" name="datadenascimento" id="datadenascimento" value="<?php echo $row['datadenascimento']; ?>">
            </div>
            <div class="area">
                <label for="email">EMAIL</label>
                    <input type="text" name="email" id="email" value="<?php echo $row['email']; ?>">
            </div>
            <div class="area">
            <label for="sexo">SEXO</label>
            <select name="sexo" id="sexo">
                <option value="Masculino" <?php if($row['sexo'] == 'Masculino') echo 'selected'; ?>>Masculino</option>
                <option value="Feminino" <?php if($row['sexo'] == 'Feminino') echo 'selected'; ?>>Feminino</option>
            </select>
            </div>

            <div class="area">
                <label for="estadocivil">ESTADO CIVIL</label>
                <select name="estadocivil" id="estadocivil">
                    <option value="Solteiro(a)" <?php if($row['estadocivil'] == 'Solteiro(a)') echo 'selected'; ?>>Solteiro(a)</option>
                    <option value="Casado(a)" <?php if($row['estadocivil'] == 'Casado(a)') echo 'selected'; ?>>Casado(a)</option>
                    <option value="Divorciado(a)" <?php if($row['estadocivil'] == 'Divorciado(a)') echo 'selected'; ?>>Divorciado(a)</option>
                    <option value="Viúvo(a)" <?php if($row['estadocivil'] == 'Viúvo(a)') echo 'selected'; ?>>Viúvo(a)</option>
                </select>
            </div>

            <div class="area">
                <label for="estado">ESTADO</label>
                <input type="text" name="estado" id="estado" value="<?php echo $row['estado']; ?>">
            </div>

            <div class="area">
                <label for="logradouro">LOGRADOURO</label>
                <input type="text" name="logradouro" id="logradouro" value="<?php echo $row['logradouro']; ?>">
            </div>

            <div class="area">
                <label for="numero">NÚMERO</label>
                <input type="text" name="numero" id="numero" value="<?php echo $row['numero']; ?>">
            </div>

            <div class="area">
                <label for="complemento">COMPLEMENTO</label>
                <input type="text" name="complemento" id="complemento" value="<?php echo $row['complemento']; ?>">
            </div>

            <div class="area">
                <label for="cidade">CIDADE</label>
                <input type="text" name="cidade" id="cidade" value="<?php echo $row['cidade']; ?>">
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
