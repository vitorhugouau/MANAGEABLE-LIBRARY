<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserindo</title>
    <link rel="stylesheet" href="/css/upload.css">
</head>
<body>
    <!---------------------------------------BOTAO PARA VOLTAR------------------------------------------------------->
    <nav>
        <ul class= "menu">
            <li><a href="biblioteca.php">VOLTAR PARA BIBLIOTECA</a></li>
            <li><a href="upload.php">ADICIONANDO IMAGEM</a></li>
        </ul>
    </nav>
    <!--------------------------------------SELECIONE UMA IMAGEM---------------------------------------------------->
    <div class="container">
        <h1 class="heading">SELECIONE UMA FOTO</h1>
    </div>
    <!--------------------------------------ADICIONANDO DADOS NA TABELA--------------------------------------------->
    <div class="cont">
        <form method="POST" id="file" action="imagem.php" enctype="multipart/form-data">
            <div class="area">
                <input type="file" accept="image/jpeg" name="fileToUpload" id="fileInput"><br>
            </div>
            <div>
                <input type="submit" class="submit" name="submit" id="submit" required>
            </div> 
        </form>
    </div>
    <!-------------------------------IMAGEM NA TELA-------------------------------------------------------------------->
    <div class="container">
        <div class="container-image">
             <div class="image" data-title="cidade toda">
                <div class="imagem">
                    <img id="imagemExibida" src="#" alt="Imagem selecionada" style="display:none;" width=500px>
                    <!-- Botões 
                    <button class="acaoBotao" id="botaoAcao" onclick="acaoBotao()">DESEJA INSERIR ESSA FOTO NO SITE?</button>
                    <button class="acaoBotao" id="botaoAcao1" onclick="acaoBotao1()">SIM</button>
                    <button class="acaoBotao" id="botaoAcao2" onclick="acaoBotao2()">NÃO</button> -->
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------TRATANDO A IMAGEM PARA APARECER AO SUBMIT-------------------------------------
    <script>
        document.getElementById('file').addEventListener('submit', function(e) {
            e.preventDefault(); // Impede o envio automático do formulário

            var file = document.getElementById('fileInput').files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    console.log("Imagem carregada com sucesso!");
                    var image = document.getElementById('imagemExibida');
                    console.log("Caminho da imagem: " + e.target.result);
                    image.src = e.target.result;
                    image.style.display = 'block';
                    // Exibindo os botões após a imagem ser carregada
                    document.querySelectorAll('.acaoBotao').forEach(function(btn) {
                        btn.style.display = 'inline-block';
                    });
                };
                reader.readAsDataURL(file);
            } else {
                alert("Nenhuma imagem selecionada!");
            }
        });

        // Função de ação do botão
        function acaoBotao() {
            // Adicione a lógica desejada para a ação do botão aqui
        }
        function acaoBotao1() {
            // Adicione a lógica desejada para a ação do botão aqui
            alert("sim");
        }
        function acaoBotao2() {
            // Adicione a lógica desejada para a ação do botão aqui
            alert("não");
        }
    </script> -->

    <!-----------------------------MENSAGEM PARA CONFIRMAÇÃO DE EXCLUSÃO------------------------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp
    4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>