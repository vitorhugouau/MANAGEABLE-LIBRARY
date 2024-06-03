<?php

$dbHost = "Localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName ="vitorhugo";      

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
/*
if($conexao->connect_error){
    echo "erro" .$conexao->connect_error;
}else{
    echo"conexao bem suceddisocacasca";
}
*/
?>

