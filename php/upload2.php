<?php
include_once('adm_session.php');
?><!DOCTYPE html>
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
            <li><a href="biblioteca.php">BIBLIOTECA</a></li>
            <li><a href="album.php">ÁLBUM</a></li>
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
                <input type="file" accept="image/jpeg" name="fileToUpload" id="fileInput" onchange="previewImage(event)"><br>
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
                    <img id="imagemExibida" src="#" alt="Imagem selecionada" style="display:none;" width="500px">
                </div>
            </div>
        </div>
    </div>
    <!-----------------------------MENSAGEM PARA CONFIRMAÇÃO DE EXCLUSÃO------------------------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp
    4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        function previewImage(event) {
            var input = event.target;
            var imagemExibida = document.getElementById('imagemExibida');
            imagemExibida.style.display = 'block';
            var reader = new FileReader();
            reader.onload = function() {
                imagemExibida.src = reader.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    </script>
</body>
</html>
