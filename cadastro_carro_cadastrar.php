<?php 
require ('config.php');
// $id = filter_input(INPUT_POST, 'id');
$marca= filter_input(INPUT_POST, 'marca');
$modelo= filter_input(INPUT_POST, 'modelo');
$ano = filter_input(INPUT_POST, 'ano');
$km= filter_input(INPUT_POST, 'km');
$cambio= filter_input(INPUT_POST, 'cambio');
$combustivel= filter_input(INPUT_POST, 'combustivel');
$cor= filter_input(INPUT_POST, 'cor');
$valor= filter_input(INPUT_POST, 'valor');
$quantidade = filter_input(INPUT_POST, 'quantidade');

if($modelo && $marca && $km){
    $sql = $pdo->prepare('SELECT * FROM carro WHERE marca = :marca');
    $sql->bindValue(':marca', $marca);
    $sql->execute();

    if($sql->rowCount() === 0){
        $sql = $pdo->prepare('INSERT INTO carro (marca, modelo, ano, km, cambio, combustivel, cor, valor, quantidade) VALUES (:marca, :modelo, :ano, :km, :cambio, :combustivel, :cor, :valor, :quantidade)');
        $sql->bindValue(':marca', $marca);
        $sql->bindValue(':modelo', $modelo);
        $sql->bindValue(':ano', $ano);
        $sql->bindValue(':km', $km);
        $sql->bindValue(':cambio', $cambio);
        $sql->bindValue(':combustivel', $combustivel);
        $sql->bindValue(':cor', $cor);
        $sql->bindValue(':valor', $valor);
        $sql->bindValue(':quantidade', $quantidade);
        $sql->execute();

        header('location: ../index.php');        
    }else{
        header('cadastro_carro.php');        
    }
}
    else{
        header('cadastro_carro.php');
        exit;
}