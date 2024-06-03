<?php
session_start();
include_once('biblioteca_session.php');
include_once('banco.php');

if(isset($_POST['usuario']) && isset($_POST['senha'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Utilizando declarações preparadas para evitar injeção de SQL
    $sql = "SELECT * FROM adm WHERE usuario = ? AND senha = ?";
    $stmt = mysqli_prepare($conexao, $sql); //cria um objeto de instrução (statement), consulta SQL como uma string.
    mysqli_stmt_bind_param($stmt, "ss", $usuario, $senha); //recebe argumentos objeto, uma string tipos parâmetros (strings).
    mysqli_stmt_execute($stmt); //executa a instrução preparada com os parâmetros fornecidos.
    $result = mysqli_stmt_get_result($stmt); //obtém o resultado da execução da instrução.

    if (mysqli_num_rows($result) > 0) {
        // login bem-sucedido
        $row = mysqli_fetch_assoc($result); //extrai a primeira linha do resultado da consulta como uma matriz associativa.
        $_SESSION['nome'] = $row['usuario']; //variável chamada 'nome_usuario' com o valor do campo 'nome' 

        // Redirecionar para a página de teste
        header('Location: control.php');
        exit();
    } else {
        $erro = "Credenciais inválidas. Tente novamente.";
    }
}

mysqli_close($conexao);
?>

<!DOCTYPE html>
 <html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="/js/fetch.js"></script>

    <link rel="stylesheet" href="/css/adm.css">
</head>
<body background="/imgnovas/ti2.jpg">
    <header class="header">
    </header> 

    <h1>GERENCIADOR DO SISTEMA</h1>

    <div class="meio">
        <div class="form-container">
            <!-- Formulário de login -->
            <div id="login">
                <form id="loginForm" class="card" method="POST">
                    <h3>ADMINISTRADOR</h3>
                    <div class="card-header"> 
                            <div class="card-content">
                                <div class="card-content-area">
                                    <label for="loginusuario">E-MAIL</label>
                                    <input type="text" name="usuario" id="usuario" autocomplete="off">
                                </div>
                                <div class="card-content-area">
                                    <label for="loginSenha">SENHA</label>
                                    <input type="password" name="senha" id="senha" autocomplete="off">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="submit">ENTRAR</button>
                            </div>
                    </div>
                    <?php if(isset($erro)) { ?>
                    <p class="error-message"><?php echo $erro; ?></p>
                     <?php } ?>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
