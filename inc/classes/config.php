<?php

try{
    $conexao = new PDO('mysql:dbname=bd_con_sys;host=localhost','root','');

}catch(PDOException $e) {
    echo 'ERRO:'.$e->getMessage();
}

define('ROTA', 'http://localhost:8080/PHP/projetos/consys/');

function carro($conexao){
    $sql = $conexao->query('SELECT * from carro');
    if($sql->rowCount() > 0){
        $lista = $sql->fetchAll();
        return $lista;
    }
}

?>