<?php 
require 'config.php';
$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$data_nascimento = filter_input(INPUT_POST, 'data_nascimento');
$cpf = filter_input(INPUT_POST, 'cpf');
$rg = filter_input(INPUT_POST, 'rg');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone');
$rua = filter_input(INPUT_POST, 'rua');
$bairro = filter_input(INPUT_POST, 'bairro');
$cidade = filter_input(INPUT_POST, 'cidade');
$estado = filter_input(INPUT_POST, 'estado');

if($id && $nome && $cpf){
    $sql = $pdo->prepare('UPDATE cliente SET nome=:nome, data_nascimento=:data_nascimento, cpf=:cpf, rg=:rg, email=:email, telefone=:telefone, rua=:rua, bairro=:bairro, cidade=:cidade, estado=:estado WHERE id=:id');
    $sql->bindValue(':id', $id);
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':data_nascimento', $data_nascimento);
    $sql->bindValue(':cpf', $cpf);
    $sql->bindValue(':rg', $rg);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':telefone', $telefone);
    $sql->bindValue(':rua', $rua);
    $sql->bindValue(':bairro', $bairro);
    $sql->bindValue(':cidade', $cidade);
    $sql->bindValue(':estado', $estado);
    $sql->execute();

    header('location: consulta_cliente.php');
    exit;
}else{
    header('location: editar_cliente.php');
}
?>