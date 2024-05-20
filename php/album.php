<?php
include_once('biblioteca_session.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/album.css">
    <title>BIBLIOTECA</title>
</head>
<body>
    <nav>
    <ul class="menu">
        <li><a href="biblioteca.php">HOME</a></li> 
        <li><a href="#">SOBRE</a>
            <ul>
                <li><a href="https://www.dji.com/br/support/product/mavic-air">EQUIPAMENTOS USADOS</a></li>
            </ul>
        </li>
        <li><a href="#">ÁLBUM</a>
        </li>
        <li><a href="#">CONTATO</a>
            <ul><a href="https://www.instagram.com/vitor_filmes?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">INSTAGRAM</a></ul>
        </li>
        <li><a href="adm.php">PAINEL DE CONTROLE</a></li>
        <li class="logout">
            <div class="card">
                <button type="submit" class="submit" id="sair">SAIR</button>
            </div>
        </li>
    </ul>
</nav>
    <div class="container">
            <h1 class ="heading">SELECIONE UMA OPÇÃO </h1>

        <div class="container-image">
            <div class="image" data-title="cidade toda">
                <a href="albuns/cidadedoalto.php"><img src="/imgnovas/A2086B802610D4AC6B00D8F6C8D255E0.jpg" alt=""></a>
                <h3>CIDADE DO ALTO</h3>
            </div>
            <div class="image" data-title="manha">
                <a href="albuns/nascerdosol.php"><img src="/imgnovas/DJI_0046.JPG" alt=""></a>
                <h3>NASCER DO SOL</h3>
            </div>
            <div class="image" data-title="praia">
                <a href="albuns/rio.php"><img src="/imgnovas/rio/1.jpg" alt=""></a>
                <h3>RIO</h3>
            </div>
            <div class="image" data-title="vegetação">
                <a href="albuns/vegetacao.php"><img src="/imgnovas/vegetação/principal.jpg" alt=""></a>
                <h3>VEGETAÇÃO</h3>
            </div>
        </div>    
    </div>

    <script src="/js/main.js"></script>
    <script>
        document.getElementById("sair").addEventListener("click", function(event) {
            event.preventDefault(); 
                window.location.href = "logout.php";          
        });
    </script>
    
</body>
</html>