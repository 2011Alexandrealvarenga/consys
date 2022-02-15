<?php 
require 'header.php'; 

$lista = [];
$sql = $pdo->query("SELECT * FROM cliente");
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
                        <th>NOME</th>
                        <th>DATA NASC</th>
                        <th>CPF</th>
                        <th>RG</th>
                        <th>EMAIL</th>
                        <th>TELEFONE</th>
                        <th>RUA</th>
                        <th>BAIRRO</th>
                        <th>CIDADE</th>
                        <th>ESTADO</th>
                        <th>AÇÃO</th>
                    </tr>
                        <?php foreach($lista as $usuario): ?>
                        <tr>
                            <td><?php echo $usuario['id']; ?></td>
                            <td><?php echo $usuario['nome']; ?></td>
                            <td><?php echo $usuario['data_nascimento']; ?></td>
                            <td><?php echo $usuario['cpf']; ?></td>
                            <td><?php echo $usuario['rg']; ?></td>
                            <td><?php echo $usuario['email']; ?></td>
                            <td><?php echo $usuario['telefone']; ?></td>
                            <td><?php echo $usuario['rua']; ?></td>
                            <td><?php echo $usuario['bairro']; ?></td>
                            <td><?php echo $usuario['cidade']; ?></td>
                            <td><?php echo $usuario['estado']; ?></td>
                            <td>
                                <a href="editar_cliente.php?id=<?php echo $usuario['id']; ?>">[ Editar] </a>                         
                            </td>
                        </tr>
                        <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</section>


<?php require 'footer.php'; ?>