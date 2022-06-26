<?php require '../../classes/config.php';

$marca = filter_input(INPUT_POST, 'marca');
$cor = filter_input(INPUT_POST, 'cor'); 

if($marca){
    $sql = $conexao->prepare('SELECT * from carro WHERE marca = :marca');
    $sql->bindValue(':marca', $marca);
    $sql->execute();

    if($sql->rowCount() === 0){
        $sql = $conexao->prepare('INSERT INTO carro (marca, cor) VALUE (:marca, :cor)');
        $sql->bindValue(':marca', $marca);
        $sql->bindValue(':cor', $cor);
        $sql->execute();

        header('location: ../../carro.php');
    }else{
        header('location: ../../carro.php');
        exit;
    }
}else{
    header('location: ../adicionar.php');
}
?>
