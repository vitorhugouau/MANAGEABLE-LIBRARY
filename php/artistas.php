<?php
include_once('biblioteca_session.php');
?>
<?php
    //--------------------------adicionar dados ------------------------------------------------------------------------------------

    include('banco.php');
    
    //--------------------------deletar dados ------------------------------------------------------------------------------------
    if(isset($_POST['delete_id'])) { // verifica se o formulário de exclusão foi submetido
        // verifica se recebeu o id
        $id = $_POST['delete_id'];
        // deleta o registro com base no ID
        $sql_delete = "DELETE FROM artistas WHERE id = $id";
        // executa a query 
        if ($conexao->query($sql_delete) === TRUE) {
            function sucesso(){
                echo "<h1>REGISTRO DELETADO COM SUCESSO.</h1>";
            }
        } else {
            echo "Erro ao deletar registro: " . $conexao->error;
        }
    }
    $sql = "SELECT 
    artistas.artista,
    artistas.idade,
    equipamentos.id_equipamento,
    equipamentos.nome AS nome_equipamento,
    equipamentos.modelo,
    equipamentos.ano_fabricacao
FROM 
    artistas
JOIN 
    equipamentos ON artistas.id_equipamento = equipamentos.id_equipamento;
";
    // executa a query
    $resultado = $conexao->query($sql);

?>
 <!------------------------------------------------------------------------------------>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserindo</title>
    <link rel="stylesheet" href="/css/table.css">
</head>
<body background="/imgnovas/iacanga.JPEG" style="background-repeat: no-repeat;
   
    
    ">
<!---------------------------------------BOTAO PARA VOLTAR------------------------------------------------------->
    <nav>
        <ul class= "menu">
            <li><a href="biblioteca.php">BIBLIOTECA</a></li>
            <li><a href="album.php">ÁLBUM</a></li>
            <li><a href="biblioteca.php">VOLTAR</a></li>
        </ul>
    </nav>
<!-------------------------------------PHP-------------------------------------------------------------->
        <?php
            
            if(isset($_POST['delete_id'])) { //se o botao de delete for clicado 
                sucesso();
             }
            ?>
<!--------------------------------------ADICIONANDO DADOS NA TABELA----------------------------------------------------------------------->
                                            <br>      
    <!-------------------------------TABELA COM OS DADOS----------------------------------------------------->
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>ARTISTA</th>
            <th>IDADE</th>
            <th>EQUIPAMENTO DE USO</th>
            <th>MODELO</th>
            <th>ANO DE FABRICAÇÃO</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        
        while ($dados = $resultado->fetch_assoc()) {
            echo "<tr>
                <td>" . $dados["id_equipamento"] . "</td>
                <td>" . $dados["artista"] . "</td>
                <td>" . $dados["idade"] . "</td>
                <td>" . $dados["nome_equipamento"] . "</td>
                <td>" . $dados["modelo"] . "</td>
                <td>" . $dados["ano_fabricacao"] . "</td>
                <td>  
                    
                </td>
            </tr>";
        }
        ?>
    </tbody>
</table>

<script>
function confirmarExclusao() {
    return confirm('Você tem certeza que deseja excluir este equipamento?');
}
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp
    4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

