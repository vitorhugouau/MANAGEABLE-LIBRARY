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
        <h1 class="heading">IMAGEM DO BANCO DE DADOS</h1>
    </div>
    
    <!--------------------------------------ADICIONANDO IMAGEM NA TELA--------------------------------------------->
    <?php
    include('banco.php');

   if(isset($_POST['delete_id'])) { // verifica se o formulário de exclusão foi submetido
       // verifica se recebeu o id
       $id = $_POST['delete_id'];
       // deleta o registro com base no ID
       $sql_delete = "DELETE FROM biblioteca WHERE id = $id";
       // executa a query 
       if ($conexao->query($sql_delete) === TRUE) {
           // Redireciona para outra página após a exclusão
           header('Location: control_library.php');
           exit(); // Garante que o script pare após o redirecionamento
       } else {
           echo "Erro ao deletar registro: " . $conexao->error;
       }
   }
   
    // Prepara a instrução SQL para recuperar os dados da imagem
    $sql = "SELECT id, nome, imagem FROM biblioteca ORDER BY id DESC LIMIT 1";
    // Executa a instrução SQL
    $result = $conexao->query($sql);

    // Verifica se há resultados
    if ($result->num_rows > 0) {
        // Recupera os dados da imagem
        $row = $result->fetch_assoc();
        $idImg = $row['id'];
        $imageName = $row['nome'];
        $imageData = $row['imagem'];
        
        // Exibe a imagem
        echo "<div class='container'> <div class='container-image'> <div class='image'
        <div class='imagem'><img src='data:image/jpeg;base64," . base64_encode($imageData) . 
        "' alt='$imageName' width='600px'>" .'NOME = ' . $imageName . ' ID = '.$idImg . " </div> </div> </div> </div>";
        
    } else {
        echo "Nenhuma imagem encontrada.";
    }
    
    // Fecha a conexão com o banco de dados
    ?>
   
   <table class="table">
       <thead>
           <th>ID</th>
           <th>NOME</th>
           <th>EDITAR</th>
       </thead>
       <tbody>
           <?php
           // Loop para exibir os resultados
           echo "<tr>
                   <td>" . $row["id"] . "</td>
                   <td>" . $row["nome"] . "</td>
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
                       <form method='POST' action='control_library.php'>
                           <input type='hidden' name='return' value='". $row["id"] ."'>
                           <button type='submit' class='btn btn-success'>CONCLUÍDO</button> 
                       </form>
                   </div>
                   </td>
               </tr>";
           ?>
       </tbody>
   </table>
   
    <!--------------------------------------ALTERANDO DADOS NA TABELA-------------------------------------------
    <div class="cont">
        <form  method="post" action="nomedaimg.php">
            <div class="area">
                <input type="hidden" name="edit" value="<?php //echo $row['id']; ?>">
                <label for="nome">NOME</label>
                    <input type="text" name="nome" id="nome" value="<?php // echo $row['nome']; ?>">
            </div>
            <div>
                <input type="submit" value="ALTERAR NOME">
            </div>
        </form>
    </div>
-->
<script>
        // confirmação de exclusão
        function confirmarExclusao() {
            return confirm("EXCLUIR ESTE REGISTRO?");
        }
    </script>
</body>
</html>
