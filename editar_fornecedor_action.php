<?php 
require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$razao_social = filter_input(INPUT_POST, 'razao_social');
$cnpj = filter_input(INPUT_POST, 'cnpj');
$rua = filter_input(INPUT_POST, 'rua');
$bairro = filter_input(INPUT_POST, 'bairro');
$cidade = filter_input(INPUT_POST, 'cidade');
$estado = filter_input(INPUT_POST, 'estado');

if($id && $razao_social){
    $sql = $pdo->prepare('UPDATE fornecedor SET razao_social=:razao_social, cnpj=:cnpj, rua=:rua, bairro=:bairro, cidade=:cidade, estado=:estado WHERE id=:id
    ');
    $sql->bindValue(':id', $id);
    $sql->bindValue(':razao_social', $razao_social);
    $sql->bindValue(':cnpj', $cnpj);
    $sql->bindValue(':rua', $rua);
    $sql->bindValue(':bairro', $bairro);
    $sql->bindValue(':cidade', $cidade);
    $sql->bindValue(':estado', $estado);
    $sql->execute();

    header('location: consulta_fornecedor.php');
    exit;
}else{
    header('location: editar_fornecedor.php');
    exit;
}
?>