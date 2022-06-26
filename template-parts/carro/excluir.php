<?php require '../../classes/config.php';

$id= filter_input(INPUT_GET, 'id');

if($id){
    $sql = $conexao->prepare('delete from carro where id = :id');
    $sql->bindValue(':id', $id);
    $sql->execute();
}
header("location: ../../carro.php");
exit;
?>