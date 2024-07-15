<?php
include('../biblioteca_session.php');
include_once('../banco.php');

if(isset($_POST['submit'])){

    $artista = $_POST['artista'];
    $idade = $_POST['idade'];
    $id_equipamento = $_POST['id_equipamento'];
    

    $result = mysqli_query($conexao, "INSERT INTO artistas (artista, idade, id_equipamento) VALUES ('$artista', '$idade', '$id_equipamento')");
    if (!$result) {  
        echo "Erro: " . mysqli_error($conexao);
    } else {
        // Redirecionar para index.php após o envio bem-sucedido do formulário
        header('Location: crud_artista.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/serviço.css">
</head>
<body background="/imgnovas/rio.JPG" style="background-size: cover;">

   <header class="header">
        <a href="#" class="logo">
            <img src="" alt="">
        </a>
        <nav class="navbar">
        <!-- NADA -->
        </nav>
    </header>

    
    <h1>FORMULÁRIO</h1>

    <div class="meio">
                <div id="login">
                    <form id="cadastroForm" class="card" method = "POST" >
                     
                        <div class="card-header"> 
                           <h3>Preencha com as informações do artista</h3>
                            <div class="card-content">
                                <div class="card-content-area">
                                    <label for="artista">ARTISTA</label>
                                    <input type="text" name= "artista" id="artista" required>
                                 </div>
                                <div class="card-content-area">
                                     <label for="idade">IDADE</label>
                                    <input type="text" name="idade" id="idade" required>
                                 </div>
                                 <div class="card-content-area">
                                    <label for="id_equipamento">EQUIPAMENTO DE USO</label>
                                    <select name="id_equipamento" id="id_equipamento" required>
                                        <option value="">SELECIONE UM EQUIPAMENTO</option>
                                        <?php
                                        // Supondo que $conn seja sua conexão com o banco de dados
                                        $sql = "SELECT id_equipamento, nome FROM equipamentos";
                                        $resultado = $conexao->query($sql);

                                        if ($resultado->num_rows > 0) {
                                            while ($row = $resultado->fetch_assoc()) {
                                                echo "<option value='" . $row['id_equipamento'] . "'>" . $row['nome'] . "</option>";
                                            }
                                        } else {
                                            echo "<option value=''>Nenhum equipamento encontrado</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                 
                                </div>
                                
                            </div>
                            <div class="card-footer">
                            <button type="submit" class="submit" name="submit" id="enviar">ENVIAR</button>
                            </div>
                            <div class="card-cadastro">
                            <button type="submit" class="teste" id="teste">VOLTAR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <script>
                document.getElementById("teste").addEventListener("click", function(event) {
                    event.preventDefault(); 
                        window.location.href = "crud_artista.php";          
                });
            </script>
            <script>
                function atualizarInput() {
                    var select = document.getElementById("texto");
                    var input = document.getElementById("inputTexto");
                    var selectedOption = select.options[select.selectedIndex];
                    input.value = selectedOption.value;    
                }
                document.getElementById("meuForm").addEventListener("submit", function() {
                    atualizarInput(); 
                });
            </script>
           
</body> 
</html>

