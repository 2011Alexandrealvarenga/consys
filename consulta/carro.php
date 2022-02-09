<?php 
require ("../header.php");
$lista = [];
$sql = $pdo->query("SELECT * FROM carro");
if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>
