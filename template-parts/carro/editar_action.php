<?php require '../../header.php';

$id = filter_input(INPUT_POST, 'id');
$marca = filter_input(INPUT_POST, 'marca');
$cor = filter_input(INPUT_POST, 'cor');

if($id){
    $sql = $conexao->prepare('UPDATE carro SET marca=:marca, cor=:cor where id=:id');
    $sql->bindValue(':id', $id);
    $sql->bindValue(':marca', $marca);
    $sql->bindValue(':cor', $cor);
    $sql->execute();

    header('location: ../../carro.php');
    exit;
}else{
    header('location: ../../editar.php');
    exit;
}
?>