<?php
include_once('biblioteca_session.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/type.css">
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

        <li><a href="#">SERVIÇOS</a>
            <ul>
                <li><a href="cliente/serviço.php">CONTRATAR SERVIÇO</a></li>
            </ul>
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
        <h1 class="heading">BIBLIOTECA DE FOTOS</h1>

        <input type="text" placeholder="Pesquisar Imagem" id="search-box">
    
    <?php
    include('banco.php');

    $sql = "SELECT * FROM biblioteca";
    $result = $conexao->query($sql);
    
    // Verificando se há resultados e exibindo as imagens
    if ($result->num_rows > 0) {
        echo '<div class="container-image">';
        while($row = $result->fetch_assoc()) {
            // echo '<form action = "formulario.php" method = "post">';
            echo '<div class="container-image">';
            echo '<div class="image" data-title="' . $row["id"] . '">';
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row["imagem"]) . '" class="imagemDownload" alt="Imagem">';
            echo '<h3>' . $row["nome"] . '</h3>';
            echo '</div>';
            // echo '</form>';
            echo '<button id="buttonDownload">Baixar</button>';
            echo '</div>';
        }
        echo '</div>';
    } else {
        echo "0 resultados encontrados";
    }
    
    // Fechando a conexão com o banco de dados
    $conexao->close();
    ?>

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