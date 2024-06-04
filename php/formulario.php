<?php
include_once('banco.php');


    // Query para selecionar a imagem do banco de dados
    $query = "SELECT imagem FROM biblioteca WHERE id = 15"; // Substitua "tabela" pelo nome da sua tabela e "1" pelo ID da imagem que deseja baixar

    $result = $conexao->query($query);

    // Verificar se a query retornou resultados
    if ($result->num_rows > 0) {
        // Obter a linha de resultado
        $row = $result->fetch_assoc();
        // Enviar a imagem codificada em base64 como resposta
        echo base64_encode($row['imagem']);
    } else {
        echo "Nenhuma imagem encontrada";
    }

    // Fechar conexão
    $conexao->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/cadastro.css">
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
                            <div class="card-content">
                                <div class="card-content-area">
                                    <label for="nome">NOME</label>
                                    <input type="text" name= "nome" id="nome" required>
                                 </div>
                                <div class="card-content-area">
                                     <label for="cpf">CPF</label>
                                    <input type="text" name="cpf" id="cpf" required>
                                 </div>
                                <div class="card-content-area">
                                <label for="estado">ESTADO</label>
                                <br>
                                    <select name="estado" id="estado" onchange="atualizar()" id="values">
                                        <option value="AC">ACRE</option>
                                        <option value="AL">ALAGOAS</option>
                                        <option value="AP">AMAPÁ</option>
                                        <option value="AM">AMAZONAS</option>
                                        <option value="BA">BAHIA</option>
                                        <option value="CE">CEARÁ</option>
                                        <option value="DF">DISTRITO FEDERAL</option>
                                        <option value="ES">ESPÍRITO SANTO</option>
                                        <option value="GO">GOIÁS</option>
                                        <option value="MA">MARANHÃO</option>
                                        <option value="MT">MATO GROSSO</option>
                                        <option value="MS">MATO GROSSO DO SUL</option>
                                        <option value="MG">MINAS GERAIS</option>
                                        <option value="PA">PARÁ</option>
                                        <option value="PB">PARAÍBA</option>
                                        <option value="PR">PARANÁ</option>
                                        <option value="PE">PERNAMBUCO</option>
                                        <option value="PI">PIAUÍ</option>
                                        <option value="RJ">RIO DE JANEIRO</option>
                                        <option value="RN">RIO GRANDE DO NORTE</option>
                                        <option value="RS">RIO GRANDE DO SUL</option>
                                        <option value="RO">RONDÔNIA</option>
                                        <option value="RR">RORAIMA</option>
                                        <option value="SC">SANTA CATARINA</option>
                                        <option value="SP">SÃO PAULO</option>
                                        <option value="SE">SERGIPE</option>
                                        <option value="TO">TOCANTINS</option>
                                     </select>
                                </div>
                                
                                <div class="card-content-area">
                                    <label for="estado">CIDADE</label>
                                    <input type="text" id="estado" name="estado" required>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="submit" id="downloadButton">BAIXAR</button>
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
                        window.location.href = "/php/biblioteca.php";          
                });
            </script>
            <script>
                $(document).ready(function() {
            // Quando o botão é clicado
            $('#downloadButton').click(function() {
                // Enviar uma solicitação AJAX para o servidor
                $.ajax({
                    url: 'baixar_imagem.php', // URL do seu endpoint no servidor
                    type: 'GET',
                    success: function(response) {
                        // Criar um link de download com a resposta do servidor (a imagem)
                        var link = document.createElement('a');
                        link.href = 'data:image/jpeg;base64,' + response; // Supondo que a resposta do servidor seja uma imagem codificada em base64
                        link.download = 'imagem.jpg'; // Nome do arquivo
                        document.body.appendChild(link);
                        link.click();
                        document.body.removeChild(link);
            }
        });
    });
});

            </script>
</body> 
</html>

