<?php

try{
    $conexao = new PDO('mysql:dbname=bd_con_sys;host=localhost','root','');

}catch(PDOException $e) {
    echo 'ERRO:'.$e->getMessage();
}

?>