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
        <h1 class="heading">CONSULTANDO IMAGENS</h1>
    </div>
    <!--------------------------------------ADICIONANDO DADOS NA TABELA--------------------------------------------->
    <div class="cont">
        <form method="POST" id="file" action="consult_select.php">
            <div>
                <p>SELECIONE A TABELA</p>
                <br>
                <select name="texto" id="texto" onchange="atualizarInput()">
                    <option value="album">ALBUM</option>
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
    }
    document.getElementById("meuForm").addEventListener("submit", function() {
        atualizarInput(); 
    });
</script>
    <!-------------------------------IMAGEM NA TELA-------------------------------------------------------------------->

    <!-----------------------------MENSAGEM PARA CONFIRMAÇÃO DE EXCLUSÃO------------------------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp
    4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
