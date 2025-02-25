<?php
function conectarBanco() {
    $host = "localhost";       
    $usuario = "root";         
    $senha = "";               
    $banco = "consys_db";  

    $conexao = new mysqli($host, $usuario, $senha, $banco);

    if ($conexao->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
    }

    return $conexao;
}
$page = basename($_SERVER['PHP_SELF']);

function consultarCarros($conexao) {
    $sql = "SELECT * FROM carro"; 
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        return $resultado;
    } else {
        return null; 
    }
}
function login($login, $senha, $conexao){
     $sql = "SELECT * FROM login WHERE login = '$login' AND senha = '$senha'";
     $result = $conexao->query($sql);
     return $result;
}

