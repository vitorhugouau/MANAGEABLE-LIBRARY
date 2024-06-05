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
        <h1 class="heading">ERROR : 505</h1>
        <br>
        <h2 class="heading">NENHUMA IMAGEM NO BANCO DE DADOS</h2>
    </div>
    <div class="meio">
        <div class="card">
            <div class="card-footer">
                <div class="card-cadastro">
                    <button type="submit" class="teste" id="teste">FAZER OUTRA CONSULTA</button>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------------ADICIONANDO DADOS NA TABELA--------------------------------------------->
    <script>
                document.getElementById("teste").addEventListener("click", function(event) {
                    event.preventDefault(); 
                        window.location.href = "consult_control.php";          
                });
    </script>
    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp
    4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
