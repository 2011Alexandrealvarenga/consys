<?php require 'header.php';

$lista = [];
$sql = $conexao->query('SELECT * FROM cliente');
if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>
<section class="cliente">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Cliente</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table border="1" width="100%">
                    <tr>
                        <th>CODIGO</th>
                        <th>NOME</th>
                        <th>CPF</th>
                    </tr>
                    <?php foreach($lista as $cliente):?>
                    <tr>
                        <td><?php echo $cliente['id']?> </td>
                        <td><?php echo $cliente['nome']?> </td>
                        <td><?php echo $cliente['cpf']?> </td>
                    </tr>
                    <?php endforeach;?>
                </table>
            </div>
        </div>

    </div>
</section>
<?php require 'footer.php'?>