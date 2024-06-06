<?php
include('../biblioteca_session.php');
include_once('../banco.php');

if(isset($_POST['submit'])){

    $nome = $_POST['nome'];
    $modelo = $_POST['modelo'];
    $ano_fabricacao = $_POST['ano_fabricacao'];
    

    $result = mysqli_query($conexao, "INSERT INTO equipamentos (nome, modelo, ano_fabricacao) VALUES ('$nome', '$modelo', '$ano_fabricacao')");
    if (!$result) {  
        echo "Erro: " . mysqli_error($conexao);
    } else {
        // Redirecionar para index.php após o envio bem-sucedido do formulário
        header('Location: crud_equipamento.php');
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
                           <h3>Preencha com as informações do equipamento</h3>
                            <div class="card-content">
                                <div class="card-content-area">
                                    <label for="nome">NOME</label>
                                    <input type="text" name= "nome" id="nome" required>
                                 </div>
                                <div class="card-content-area">
                                     <label for="modelo">MODELO</label>
                                    <input type="text" name="modelo" id="modelo" required>
                                 </div>
                                 <div class="card-content-area">
                                     <label for="ano_fabricacao">ANO DE FABRICAÇÃO</label>
                                    <input type="text" name="ano_fabricacao" id="ano_fabricacao" required>
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
                        window.location.href = "crud_equipamento.php";          
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

