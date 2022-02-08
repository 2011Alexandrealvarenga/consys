<?php 
require ('../config.php');

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

if($cpf){
    $sql = $pdo->prepare('SELECT * FROM cliente WHERE cpf = :cpf');
    $sql->bindValue(':cpf', $cpf);
    $sql->execute();
    
    if($sql->rowCount() === 0){
        $sql = $pdo->prepare('INSERT INTO cliente (nome, cpf, data_nascimento, rg, email, telefone, rua, bairro, cidade, estado) VALUES (:nome, :cpf, :data_nascimento, :rg, :email, :telefone, :rua, :bairro, :cidade, :estado)');
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
        header('location: ../index.php');

    }else{
        header('location: cliente.php');
    }

}else{
        header('location: cliente.php');
        exit;
    }
?>