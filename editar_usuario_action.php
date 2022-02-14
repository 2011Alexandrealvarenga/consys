<?php 
require 'config.php';
$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$login = filter_input(INPUT_POST, 'login');
$senha = filter_input(INPUT_POST, 'senha');

if($id && $nome && $email){
    $sql = $pdo->prepare("UPDATE usuario SET nome=:nome, email=:email, login=:login, senha=:senha WHERE id=:id");

    $sql->bindValue(':id', $id);
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':login', $login);
    $sql->bindValue(':senha', $senha);
    $sql->execute();

    header('location: consulta_usuario.php');
    exit;

}else{
    header('location: cadastro_usuario.php');
}
?>