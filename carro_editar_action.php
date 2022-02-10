<?php 
require 'config.php';
$id = filter_input(INPUT_POST, 'id');
$modelo = filter_input(INPUT_POST, 'modelo');
$marca = filter_input(INPUT_POST, 'marca');
$ano = filter_input(INPUT_POST, 'ano');
$km = filter_input(INPUT_POST, 'km');
$cambio = filter_input(INPUT_POST, 'cambio');
$combustivel = filter_input(INPUT_POST, 'combustivel');
$cor = filter_input(INPUT_POST, 'cor');
$valor = filter_input(INPUT_POST, 'valor');
$quantidade = filter_input(INPUT_POST, 'quantidade');

if($modelo && $marca){
    $sql = $pdo->prepare('UPDATE carro SET modelo=:modelo, marca=:marca, ano=:ano, km=:km, cambio=:cambio, combustivel=:combustivel, cor=:cor, valor=:valor, quantidade=:quantidade WHERE id=:id');
    $sql->bindValue(':id', $id);
    $sql->bindValue(':modelo', $modelo);
    $sql->bindValue(':marca', $marca);
    $sql->bindValue(':ano', $ano);
    $sql->bindValue(':km', $km );
    $sql->bindValue(':cambio', $cambio);
    $sql->bindValue(':combustivel', $combustivel);
    $sql->bindValue(':cor', $cor);
    $sql->bindValue(':valor', $valor);
    $sql->bindValue(':quantidade', $quantidade);
    $sql->execute();

    header('location: consulta_carro.php');
    exit;
}else{
    header('cadastro_carro.php');
    exit;
}

?>