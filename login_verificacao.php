<?php 
include('header.php');
$conexao = conectarBanco();
$login = login($conexao);



if(isset($_POST['login'])){
  // if( isset($_POST['login']) === $login['login']){
    header('location: index.php');
  // }else{
    // echo 'erro ao fazer login';
  // }
 
}else{
  echo 'erro';
}

$conexao->close();
require('footer.php') ;?>