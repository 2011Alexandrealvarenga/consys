<?php require 'header.php';
$lista = carro($conexao);
?>
<section class="carro">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Carro</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="adicionar_carro.php">Adicionar Carro</a><br>
                <table border="1" width="100%">
                    <tr>
                        <th>CODIGO</th>
                        <th>MARCA</th>
                        <th>COR</th>
                    </tr>
                    <?php
                    foreach($lista as $carro):
                    ?>
                    <tr>
                        <td><?php echo $carro['id']?></td>
                        <td><?php echo $carro['marca']?></td>
                        <td><?php echo $carro['cor']?></td>
                        <td>
                            <a href="editar_carro.php?id<?php echo $carro['id'];?> ">[ Editar ]</a> 
                            <a href="editar_carro.php?id<?php echo $carro['id'];?> ">[ Editar ]</a> 

                        </td>
                    </tr>
                    <?php
                    endforeach;
                    ?>
                </table>
            </div>
        </div>
    </div>
</section>

<?php
require 'footer.php';
?>