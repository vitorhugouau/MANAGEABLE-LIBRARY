<?php
include_once('adm_session.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserindo</title>
    <link rel="stylesheet" href="/css/control.css">
</head>
<body>
    <!-----------------------------------BOTAO PARA VOLTAR------------------------------------------------------->
    <nav>
        <ul class= "menu">
            <li><a href="biblioteca.php">BIBLIOTECA</a></li>
            <li><a href="album.php">ÁLBUM</a></li>
            <li><a href="panelcontrol.php">PAINEL DE CONTROLE 2</a></li>
        </ul>
    </nav>
    <!---------------------------------SELECIONE UMA IMAGEM---------------------------------------------------->
    <div class="container">
        <h1 class="heading">PAINEL DE CONTROLE</h1>
    </div>
    <!------------------------------ADICIONANDO DADOS NA TABELA--------------------------------------------->
    <div class="container">
        <form action="" method="post">
            <div class="area">
                <input type="submit" value="EDITAR USUARIOS" formaction="inserindo.php">
                <input type="submit" value="ADICIONAR IMAGEM AO BANCO" formaction="upload.php">
                <input type="submit" value="CONSULTAR IMAGEM" formaction="consult_img/consult_control.php">
            </div>
            <div class="area">
            <input type="submit" value="BIBLIOTECA" formaction="control_library.php">
            </div>
            <div class="area">
            <input type="submit" value="ADICIONANDO IMAGENS NOS ALBUNS" formaction="add_img/panel_control.php">
            </div>

        </form>
    </div>
    <!-------------------------------IMAGEM NA TELA-------------------------------------------------------------------->
</body>
</html>
