<?php
include_once('../biblioteca_session.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/albuns/vegetacao.css">
    <title>BIBLIOTECA</title>
</head>
<body>
    <nav>
    <ul class="menu">
        <li><a href="../biblioteca.php">HOME</a></li> 
        <li><a href="#">SOBRE</a>
            <ul>
                <li><a href="https://www.dji.com/br/support/product/mavic-air">EQUIPAMENTOS USADOS</a></li>
            </ul>
        </li>
        <li><a href="../album.php">ÁLBUM</a>
        </li>
        <li><a href="#">CONTATO</a>
            <ul><a href="https://www.instagram.com/vitor_filmes?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">INSTAGRAM</a></ul>
        </li>
        <li><a href="../adm.php">PAINEL DE CONTROLE</a></li>
        <li class="logout">
            <div class="card">
                <button type="submit" class="submit" id="sair">SAIR</button>
            </div>
        </li>
    </ul>
</nav>
    <div class="container">
            <h1 class ="heading">VEGETAÇÃO</h1>

            <?php
    include('../banco.php');

    $sql = "SELECT * FROM vegetacao";
    $result = $conexao->query($sql);
    
    // Verificando se há resultados e exibindo as imagens
    if ($result->num_rows > 0) {
        echo '<div class="container-image">';
        while($row = $result->fetch_assoc()) {
            echo '<div class="container-image">';
            echo '<div class="image" data-title="' . $row["id"] . '">';
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row["imagem"]) . '" alt="Imagem">';
            echo '</div>';
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

    <script>
        document.getElementById("sair").addEventListener("click", function(event) {
            event.preventDefault(); 
                window.location.href = "../logout.php";          
        });
    </script>
</body>
</html>