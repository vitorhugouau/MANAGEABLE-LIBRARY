<?php
include_once('biblioteca_session.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/estilo.css">
    <title>Document</title>
    
</head>

<body background="/img/nova1920.jpg">
<nav>
    <ul class="menu">
        <li><a href="#">HOME</a></li> 
        <li><a href="#">SOBRE</a>
            <ul>
                <li><a href="https://www.dji.com/br/support/product/mavic-air">EQUIPAMENTOS USADOS</a></li>
            </ul>
        </li>
        <li><a href="album.php">ÁLBUM</a>
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

<!--<div class="caixa">
     <header>
        <div class="bemvindo">
            <h1 class="vindo">Bem Vindo <?php echo $nome?></h1>
        </div>
    </header> 
</div>-->

    <div class="container">
        <h1 class="heading">BIBLIOTECA DE FOTOS</h1>

        <input type="text" placeholder="Pesquisar Imagem" id="search-box">
        <div class="container-image">
            <div class="image" data-title="cidade toda">
                <img src="/imgnovas/A2086B802610D4AC6B00D8F6C8D255E0.jpg" alt="">
                <h3>CIDADE DO ALTO</h3>
            </div>
            <div class="image" data-title="manha">
                <img src="/imgnovas/DJI_0046.JPG" alt="">
                <h3>NASCER DO SOL</h3>
            </div>
            <div class="image" data-title="praia">
                <img src="/imgnovas/DC0BA660DD51D7CF60947E38295486DD.jpeg" alt="">
                <h3>PRAIA DE IACANGA</h3>
            </div>
            <div class="image" data-title="lago">
                <img src="/imgnovas/LAGO.jpg" alt="">
                <h3>LAGO</h3>
            </div>
            <div class="image" data-title="praia">
                <img src="/imgnovas/praia.jpg" alt="">
                <h3>PRAIA</h3>
            </div>
            <div class="image" data-title="lagocima">
                <img src="/imgnovas/lagocima.jpg" alt="">
                <h3>LAGO MUNICIPAL</h3>
            </div>
            <div class="image" data-title="rua led">
                <img src="/imgnovas/rualed.jpg" alt="">
                <h3>RUAS DE LED</h3>
            </div>
            <div class="image" data-title="matriz">
                <img src="/imgnovas/matriz.jpg" alt="">
                <h3>MATRIZ</h3>
            </div>
            <div class="image" data-title="areia">
                <img src="/imgnovas/areia.jpg" alt="">
                <h3>PRAIA MUNICIPAL</h3>
            </div>
            <div class="image" data-title="beirario">
                <img src="/imgnovas/beira.jpg" alt="">
                <h3>GÍNASIO DE ESPORTES</h3>
            </div>
            <div class="image" data-title=" bairro">
                <img src="/imgnovas/bairro.jpg" alt="">
                <h3>BAIRRO NOVO</h3>
            </div>
            <div class="image" data-title="iacanga">
                <img src="/imgnovas/IACA.jpg" alt="">
                <h3>IACANGA DO ALTO</h3>
            </div>
            <div class="image" data-title="VERDE">
                <img src="/imgnovas/DJI_0066.JPG" alt="">
                <h3>CIDADE</h3>
            </div>
            <div class="image" data-title="cidade">
                <img src="/imagens/1500.JPG" alt="">
                <h3>CIDADE DO ALTO</h3>
            </div>

            <div class="image" data-title="céu">
                <img src="/imagens/atualiza.jpg" alt="">
                <h3>CÉU AZUL</h3>
            </div>

            <div class="image" data-title="mato">
                <img src="/imagens/telaverde.jpg" alt="">
                <h3>MATO</h3>
            </div>
            <div class="image" data-title="noite">
                <img src="/imagens/NOITE.jpg" alt="">
                <h3>NOITE</h3>
            </div>
            <div class="image" data-title="cima">
                <img src="/imagens/decima.jpg" alt="">
                <h3>CIMA</h3>
            </div>
            <div class="image" data-title="fim do dia">
                <img src="/imagens/7.jpg" alt="">
                <h3>FIM DO DIA</h3>
            </div>
            <div class="image" data-title="chuva rosa">
                <img src="/imagens/8.jpg" alt="">
                <h3>CHUVA ROSA</h3>
            </div>
            <div class="image" data-title="rio verde">
                <img src="/imagens/rioverde.jpg" alt="">
                <h3>RIO VERDE</h3>
            </div>
            <div class="image" data-title="centro planejado">
                <img src="/imagens/foto/planejado.jpg" alt="">
                <h3>CENTRO PLANEJADO</h3>
            </div>
            <div class="image" data-title="vista de cima">
                <img src="/imagens/foto/vistadecima.jpg" alt="">
                <h3>CIDADE DO ALTO</h3>
            </div>
            <div class="image" data-title="6PM">
                <img src="/imagens/foto/6pm.JPG" alt="">
                <h3>CIDADE AO AMANHECER</h3>
            </div>
            <div class="image" data-title="avenida">
                <img src="/imagens/foto/avenidanoite.jpg" alt="">
                <h3>AVENIDA</h3>
            </div>
            <div class="image" data-title="chuva">
                <img src="/imagens/foto/comchuva.jpg" alt="">
                <h3>CHUVA NO RIO</h3>
            </div>
            <div class="image" data-title="semchuva">
                <img src="/imagens/foto/semchuva.jpg" alt="">
                <h3>NUVEM</h3>
            </div>
        
        </div>
    </div>

    <script src="/js/main.js"></script>

    <script>
        document.getElementById("sair").addEventListener("click", function(event) {
            event.preventDefault(); 
                window.location.href = "index.php";          
        });
    </script>
</body>
</html>