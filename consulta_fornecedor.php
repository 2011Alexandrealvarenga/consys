<?php require 'header.php'; 

$lista = [];
$sql = $pdo->query("SELECT * FROM fornecedor");
if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <table width="100%" border="1">
                <tr>
                    <th>ID</th>
                    <th>Razao Social</th>
                    <th>CNPJ</th>
                    <th>Rua</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                </tr>
                <?php foreach($lista as $usuario): ?>
                    <tr>
                        <td><?php echo $usuario['id']; ?></td>
                        <td><?php echo $usuario['razao_social']; ?></td>
                        <td><?php echo $usuario['cnpj']; ?></td>
                        <td><?php echo $usuario['rua']; ?></td>
                        <td><?php echo $usuario['bairro']; ?></td>
                        <td><?php echo $usuario['cidade']; ?></td>
                        <td><?php echo $usuario['estado']; ?></td>
                    </tr>
                <?php endforeach; ?>    
            </table>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>