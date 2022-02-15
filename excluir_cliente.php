<?php 
require 'config.php';

$id = filter_input(INPUT_GET, 'id');

if($id){
    $sql = $pdo->prepare('DELETE FROM cliente WHERE id=:id');
    $sql->bindValue(':id', $id);
    $sql->execute();

    header('location: consulta_cliente.php');
    exit;
}else{
    header('location: consulta_cliente.php');
    exit;
}
?>