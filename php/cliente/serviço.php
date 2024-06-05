<?php
include('../biblioteca_session.php');
include_once('../banco.php');

if(isset($_POST['submit'])){

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $datadenascimento = $_POST['datadenascimento'];
    $sexo = $_POST['sexo']; 
    $estadocivil = $_POST['estadocivil']; 
    $estado = $_POST['estado'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $cidade = $_POST['cidade'];
    $email = $_POST['email'];

    $result = mysqli_query($conexao, "INSERT INTO clientes (nome, cpf, email, datadenascimento, sexo, estadocivil, estado, logradouro, numero, complemento, cidade) VALUES ('$nome', '$cpf', '$email', '$datadenascimento', '$sexo', '$estadocivil', '$estado', '$logradouro', '$numero', '$complemento', '$cidade')");
    if (!$result) {  
        echo "Erro: " . mysqli_error($conexao);
    } else {
        // Redirecionar para index.php após o envio bem-sucedido do formulário
        header('Location: ../biblioteca.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/serviço.css">
</head>
<body background="/imgnovas/rio.JPG" style="background-size: cover;">

   <header class="header">
        <a href="#" class="logo">
            <img src="" alt="">
        </a>
        <nav class="navbar">
        <!-- NADA -->
        </nav>
    </header>

    
    <h1>FORMULÁRIO</h1>

    <div class="meio">
                <div id="login">
                    <form id="cadastroForm" class="card" method = "POST" >
                     
                        <div class="card-header"> 
                           <h3>Preencha com suas informações pessoais</h3>
                            <div class="card-content">
                                <div class="card-content-area">
                                    <label for="nome">Nome</label>
                                    <input type="text" name= "nome" id="nome" required>
                                 </div>
                                <div class="card-content-area">
                                     <label for="cpf">Cpf</label>
                                    <input type="text" name="cpf" id="cpf" required>
                                 </div>
                                 <div class="card-content-area">
                                     <label for="datadenascimento">Data de nascimento</label>
                                    <input type="date" name="datadenascimento" id="datadenascimento" required>
                                 </div>
                                 <div class="card-content-area">
                                    <label for="sexo">Sexo</label>
                                    <div class="radio-buttons">
                                        <label for="masculino">Masculino</label>
                                        <input type="radio" name="sexo" id="masculino" value="Masculino" required>
                                        <label for="feminino">Feminino</label>
                                        <input type="radio" name="sexo" id="feminino" value="Feminino" required>
                                    </div>
                                </div>
                                <div class="card-content-area">
                                    <label for="estadocivil">Estado Civil</label>
                                    <div class="radio-buttons">
                                        <label for="solteiro">Solteiro(a)</label>
                                        <input type="radio" name="estadocivil" id="solteiro" value="Solteiro(a)" required>
                                        <label for="casado">Casado(a)</label>
                                        <input type="radio" name="estadocivil" id="casado" value="Casado(a)" required>
                                        <label for="divorciado">Divorciado(a)</label>
                                        <input type="radio" name="estadocivil" id="divorciado" value="Divorciado(a)" required>
                                        <label for="viuvo">Viúvo(a)</label>
                                        <input type="radio" name="estadocivil" id="viuvo" value="Viúvo(a)" required>
                                    </div>
                                </div>
                                <div class="card-content-area">
                                <label for="estado">ESTADO</label>
                                    <select name="estado" id="estado" onchange="atualizarInput()" id="values">
                                        <option value="AC">ACRE</option>
                                        <option value="AL">ALAGOAS</option>
                                        <option value="AP">AMAPÁ</option>
                                        <option value="AM">AMAZONAS</option>
                                        <option value="BA">BAHIA</option>
                                        <option value="CE">CEARÁ</option>
                                        <option value="DF">DISTRITO FEDERAL</option>
                                        <option value="ES">ESPÍRITO SANTO</option>
                                        <option value="GO">GOIÁS</option>
                                        <option value="MA">MARANHÃO</option>
                                        <option value="MT">MATO GROSSO</option>
                                        <option value="MS">MATO GROSSO DO SUL</option>
                                        <option value="MG">MINAS GERAIS</option>
                                        <option value="PA">PARÁ</option>
                                        <option value="PB">PARAÍBA</option>
                                        <option value="PR">PARANÁ</option>
                                        <option value="PE">PERNAMBUCO</option>
                                        <option value="PI">PIAUÍ</option>
                                        <option value="RJ">RIO DE JANEIRO</option>
                                        <option value="RN">RIO GRANDE DO NORTE</option>
                                        <option value="RS">RIO GRANDE DO SUL</option>
                                        <option value="RO">RONDÔNIA</option>
                                        <option value="RR">RORAIMA</option>
                                        <option value="SC">SANTA CATARINA</option>
                                        <option value="SP">SÃO PAULO</option>
                                        <option value="SE">SERGIPE</option>
                                        <option value="TO">TOCANTINS</option>
                                     </select>
                                </div>
                                <div class="card-content-area">
                                    <div class="form-group">
                                        <label for="logradouro">Logradouro:</label>
                                        <input type="text" id="logradouro" name="logradouro">
                                    </div>
                                    <div class="form-group">
                                        <label for="numero">Número:</label>
                                        <input type="text" id="numero" name="numero">
                                    </div>
                                    <div class="form-group">
                                        <label for="complemento">Complemento:</label>
                                        <input type="text" id="complemento" name="complemento">
                                    </div>
                                    <div class="form-group">
                                        <label for="estado">Cidade</label>
                                        <input type="text" id="cidade" name="cidade" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="estado">E-mail para contato</label>
                                        <input type="text" id="email" name="email" required>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="card-footer">
                            <button type="submit" class="submit" name="submit" id="enviar">ENVIAR</button>
                            </div>
                            <div class="card-cadastro">
                            <button type="submit" class="teste" id="teste">VOLTAR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <script>
                document.getElementById("teste").addEventListener("click", function(event) {
                    event.preventDefault(); 
                        window.location.href = "../biblioteca.php";          
                });
            </script>
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
           
</body> 
</html>

