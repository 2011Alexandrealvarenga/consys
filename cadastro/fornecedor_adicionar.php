<?php 
require ('../config.php');

$razao_social = filter_input(INPUT_POST, 'razao_social');
$cnpj = filter_input(INPUT_POST, 'cnpj');
$rua = filter_input(INPUT_POST, 'rua');
$bairro = filter_input(INPUT_POST, 'bairro');
$cidade = filter_input(INPUT_POST, 'cidade'); 
$estado = filter_input(INPUT_POST, 'estado');

if($cnpj){
    $sql = $pdo->prepare('SELECT * FROM fornecedor WHERE cnpj = :cnpj');
    $sql->bindValue(':cnpj', $cnpj);
    $sql->execute();
    if($sql->rowCount() === 0){
        $sql = $pdo->prepare('INSERT INTO fornecedor (razao_social, cnpj, rua, bairro, cidade, estado) values (:razao_social, :cnpj, :rua, :bairro, :cidade, :estado)');
        $sql->bindValue(':razao_social', $razao_social);
        $sql->bindValue(':cnpj', $cnpj);
        $sql->bindValue(':rua', $rua);
        $sql->bindValue(':bairro', $bairro);
        $sql->bindValue(':cidade', $cidade);
        $sql->bindValue(':estado', $estado);
        $sql->execute();

        header('location: ../index.php');
        exit;
    }else{
        header('location: fornecedor.php');
    }
}else{
        header('location: fornecedor.php');
    }
?>