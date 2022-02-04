<?php require '../header.php'; 

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$login = filter_input(INPUT_POST, 'login');
$senha = filter_input(INPUT_POST, 'senha');

if($login){
    $sql = $pdo->prepare("SELECT * FROM usuario WHERE login = :login");

    $sql->bindValue(':login', $login);
    $sql->execute();
    
    if($sql->rowCount() === 0){
        $sql = $pdo->prepare("INSERT INTO usuario (nome, email, login, senha) VALUES (:nome, :email, :login, :senha)");        
        $sql->bindValue(':login', $login);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', $senha);        
        $sql->execute();
        header('location: ../index.php');
    }else{
        header('location: usuario.php');
    }
}else{
    header('location: usuario.php');
    exit;
}

require 'footer.php'; ?>