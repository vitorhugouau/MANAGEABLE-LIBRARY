<?php
include_once('../adm_session.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserindo</title>
    <link rel="stylesheet" href="/css/upload.css">
    <link rel="shortcut icon" href="/logos/icon.webp" type="image/x-icon">
</head>
<body>
    <!-------------------------------------upload/mostratela.php------------------------------------------------------->
    <!---------------------------------------ADICIONAR IMAGEM/ imagem.php------------------------------------------------------->
    <!---------------------------------------alterar nome/ nameimg.php------------------------------------------------------->
    <!---------------------------------------BOTAO PARA VOLTAR------------------------------------------------------->
    <nav>
        <ul class= "menu">
            <li><a href="../control.php">VOLTAR</a></li>
        </ul>
    </nav>
    <!--------------------------------------SELECIONE UMA IMAGEM---------------------------------------------------->
    <div class="container">
        <h1 class="heading">SELECIONE UMA FOTO</h1>
    </div>
    <!--------------------------------------ADICIONANDO DADOS NA TABELA--------------------------------------------->
    <div class="cont">
        <form method="POST" id="file" action="panel_img.php" enctype="multipart/form-data">
            <div class="area">
                <input type="file" accept="image/jpeg" name="fileToUpload" id="fileInput" onchange="previewImage(event)" required><br>
            </div>
            <div style="display: flex; align-items: center; justify-content: center; gap: 20px" class="container-selects">
                <p>SELECIONE A TABELA</p>
                <br>
                <select name="texto" id="texto" onchange="atualizarInput()">
                    <option value="biblioteca">BIBLIOTECA</option>
                    <option value="album">ALBUM</option>
                </select>
                <select style="display: none;" name="texto" onchange="atualizarInput()" id="values-img">
                    <option value="album">ALBUM</option>
                    <option value="imagens">IMAGENS</option>
                    <option value="cidade_alto">CIDADE DO ALTO</option>
                    <option value="nascer_sol">NASCER DO SOL</option>
                    <option value="rio">RIO</option>
                    <option value="vegetacao">VEGETAÇÃO</option>
                </select>
            </div> 
            <br>
            <div>
                 <input type="hidden" id="inputTexto" name="texto_selecionado">
            </div>
            <br>
            <div>
                 <input type="submit" class="submit" name="submit" id="submit" required>
            </div> 
        </form>
    </div>
    <script>
function atualizarInput() {
    var select = document.getElementById("texto");
    var input = document.getElementById("inputTexto");
    var selectedOption = select.options[select.selectedIndex];
    input.value = selectedOption.value;

    const selectFirst = document.querySelector('#texto');
    const selectBefore = document.getElementById('values-img');
    
    if (selectFirst.value === 'album' && selectBefore) {
        selectBefore.style.display = 'flex';
    } else {
        selectBefore.style.display = 'none';
    }
}

document.getElementById("meuForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Para evitar que o formulário seja enviado antes de atualizar o input
    atualizarInput();
    this.submit(); // Envia o formulário após atualizar o input
});

</script>
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
