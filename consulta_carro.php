<?php 
require 'header.php'; 
$lista = [];
$sql = $pdo->query("SELECT * FROM carro");
if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table width="100%" border="1">
                    <tr>
                        <th>ID</th>
                        <th>MODELO</th>
                        <th>MARCA</th>
                        <th>ANO</th>
                        <th>KM</th>
                        <th>CAMBIO</th>
                        <th>COMBUSTIVEL</th>
                        <th>COR</th>
                        <th>VALOR</th>
                        <th>QTD</th>
                        <th>AÇÃO</th>
                    </tr>
                    <?php foreach($lista as $usuario): ?>
                        <tr>
                            <td><?php echo $usuario['id']; ?></td>
                            <td><?php echo $usuario['modelo']; ?></td>
                            <td><?php echo $usuario['marca']; ?></td>
                            <td><?php echo $usuario['ano']; ?></td>
                            <td><?php echo $usuario['km']; ?></td>
                            <td><?php echo $usuario['cambio']; ?></td>
                            <td><?php echo $usuario['combustivel']; ?></td>
                            <td><?php echo $usuario['cor']; ?></td>
                            <td><?php echo $usuario['valor']; ?></td>
                            <td><?php echo $usuario['quantidade']; ?></td>
                            <td>
                                <a href="editar-carro.php?id=<?php echo $usuario['id']; ?>">[ Editar] </a>    
                                <a href="excluir_carro.php?id=<?php echo $usuario['id']; ?>" onclick="return confirm('Tem certesa que deseja excluir?')";>[Excluir]</a>                     

                            </td>
                        </tr>

                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</section>
<?php require'footer.php'; ?>