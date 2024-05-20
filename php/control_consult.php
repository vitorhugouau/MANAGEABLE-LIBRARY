<?php
include_once('adm_session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/viewimg.css">
    <title>Exibição de Imagem</title>
</head>
<body>
    <nav>
        <ul class= "menu">
            <li><a href="biblioteca.php">BIBLIOTECA</a></li>
            <li><a href="upload.php">ADICIONANDO IMAGEM</a></li>
            <li><a href="control.php">VOLTAR</a></li>
        </ul>
    </nav>
    <div class="container">
        <h1 class="heading">CONSULTANDO IMAGENS NO BANCO DE DADOS "biblioteca"</h1>
    </div>
    
    <!--------------------------------------CONSULTANDO IMAGEM NA TELA--------------------------------------------->
    <table class="table">
    <thead>
        <th>ID</th>
        <th>NOME</th>
        <th>IMAGEM</th>
        <th>EDITAR</th>
    </thead>
    <tbody>
        
        <!--------------------------------------DELETANDO IMAGEM NA TELA--------------------------------------------->
        <?php
        // Conecta ao banco de dados
        include('banco.php');
    
       if(isset($_POST['delete_id'])) { // verifica se o formulário de exclusão foi submetido
           // verifica se recebeu o id
           $id = $_POST['delete_id'];
           // deleta o registro com base no ID
           $sql_delete = "DELETE FROM biblioteca WHERE id = $id";
           // executa a query 
           if ($conexao->query($sql_delete) === TRUE) {
               // Redireciona para outra página após a exclusão
               header('Location: control_consult.php');
               exit(); // Garante que o script pare após o redirecionamento
           } else {
               echo "Erro ao deletar registro: " . $conexao->error;
           }
       }
        
        // Consulta para recuperar todas as imagens do banco de dados
        $sql = "SELECT id, nome, imagem FROM biblioteca";
        $result = $conexao->query($sql);

        // Verifica se há resultados
        if ($result->num_rows > 0) {
            // Loop através dos resultados
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td class= 'id'>" . $row["id"] . "</td>
                        <td class= 'imagem'>" . $row["nome"] . "</td>
                        <td class='image-cell'><img src='data:image/jpeg;base64," . base64_encode($row["imagem"]) . "' alt='Imagem' style='max-width: 350px;'></td>
                        <td>
                            <div class='button-container'>
                                <form method='POST' action='control_altername.php'>
                                    <input type='hidden' name='edit' value='". $row["id"] ."'>
                                    <button type='submit' class='btn btn-success'>EDITAR</button> 
                                </form>
                                <form method='POST'>
                                    <input type='hidden' name='delete_id' value='". $row["id"] ."'> 
                                    <button type='submit' onclick='return confirmarExclusao()' class='btn btn-danger'>EXCLUIR</button>   
                                </form>
                                <form method='POST' action='biblioteca1.php'>
                                    <input type='hidden' name='return' value='". $row["id"] ."'>
                                    <button type='submit' class='btn btn-success'>VIZUALIZAR</button> 
                                </form>
                            </div>
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Nenhuma imagem encontrada.</td></tr>";
        }
        // Fecha a conexão com o banco de dados
        $conexao->close();
        ?>
    </tbody>
</table>
<script>
        // confirmação de exclusão
        function confirmarExclusao() {
            return confirm("EXCLUIR ESTE REGISTRO?");
        }
    </script>
   
   
</body>
</html>
