<?php require 'header.php'; 
$lista = carro($conexao);
?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    Bem Vindo a ConSys
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h2>Veja a lista de Carros</h2>
                </div>
                <div class="col-12">
                    <table border="1" width="100%">
                        <tr>
                            <th>ID</th>
                            <th>CARRO</th>
                            <th>COR</th>
                        </tr>
                        <?php foreach ($lista as $carros):?>
                        <tr>
                            <td><?php echo $carros['id']?></td>
                            <td><?php echo $carros['marca']?></td>
                            <td><?php echo $carros['cor']?></td>
                        </tr>
                        <?php endforeach;?>
                    </table>
                </div>
            </div>
        </div>
    </section>
<?php require 'footer.php';?>