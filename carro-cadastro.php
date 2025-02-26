<?php 
include('header.php');

$conexao = conectarBanco();
$anos = ['2001','2002','2003','2004','2005','2006','2007','2008','2009','2010','2011','2012','2013','2014','2015','2016','2017','2018','2019','2020','2021','2022','2023','2024'];
$placas = ['0','1','2','3','4','5','6','7','8','9'];
$cambios = ['Automático','Manual'];

// Excluir o carro, se o ID for passado via GET
if (isset($_GET['excluir'])) {
    $id = intval($_GET['excluir']); // Sanitizar para garantir que seja um número inteiro
    
    // Verificar se o ID é válido (positivo)
    if ($id > 0) {
        // Primeiro, excluir os registros na tabela forma_pagamento que fazem referência ao carro
        $sqlDeleteFormaPagamento = "DELETE FROM forma_pagamento WHERE fk_id_carro = $id";
        
        if ($conexao->query($sqlDeleteFormaPagamento) === TRUE) {
            // Agora, excluir o carro da tabela carro
            $sqlDeleteCarro = "DELETE FROM carro WHERE id = $id";
            
            if ($conexao->query($sqlDeleteCarro) === TRUE) {
                // Redireciona para a página principal após a exclusão
                header('Location: carro-cadastro.php');
                exit;
            } else {
                echo "Erro ao excluir o carro: " . $conexao->error;
            }
        } else {
            echo "Erro ao excluir os registros na forma_pagamento: " . $conexao->error;
        }
    } else {
        echo "ID inválido para exclusão.";
    }
}


$carros = consultarCarros($conexao);


$conexao->close();
;?>
<style>
    th, td, tr{border:1px solid black; padding: 4px;}
</style>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Consys</h1>
                </div>
            </div>
        </div>
    </header>
    <section class="carro-cadastro">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <form action="carro-cadastro-envio.php" method="POST"  enctype="multipart/form-data">
                            <label for="marca">Marca</label><br>
                            <input type="text" name="marca" id="marca"><br>

                            <label for="modelo">Modelo</label><br>
                            <input type="text" name="modelo" id="modelo"><br>

                            <label for="valor">Valor</label><br>
                            <input type="text" name="valor" id="valor"><br>
                            
                            <label for="ano_fabricacao">Ano de Fabricacao</label><br>
                            <select name="ano_fabricacao" id="ano_fabricacao">
                                <?php foreach ( $anos as $ano ) {?>
                                <option value="<?php echo $ano ;?>"><?php echo $ano ;?></option>                                 
                                <?php };?>
                            </select><br><br>

                            <label for="ano_modelo">Ano de Modelo</label><br>
                            <select name="ano_modelo" id="ano_modelo">
                                <?php foreach ( $anos as $ano ) {?>
                                <option value="<?php echo $ano ;?>"><?php echo $ano ;?></option>                                 
                                <?php };?>
                            </select><br><br>

                            <label for="quilometragem">Quilometragem</label><br>
                            <input type="text" name="quilometragem" id="quilometragem"><br>

                            <label for="cor">Cor</label><br>
                            <input type="text" name="cor" id="cor"><br>

                            <label for="placa_final">Placa Final</label><br>
                            <select name="placa_final" id="placa_final">                                
                            <?php foreach ( $placas as $placa ) {?>
                                <option value="<?php echo $placa ;?>"><?php echo $placa ;?></option>                                 
                                <?php };?>
                            </select><br>                            

                            <label for="cambio">Câmbio</label><br>
                            <select name="cambio" id="cambio">
                                <?php foreach ( $cambios as $cambio ) {?>
                                <option value="<?php echo $cambio ;?>"><?php echo $cambio ;?></option>                                 
                                <?php };?>
                            </select><br><br>

                            <label for="image">Imagem</label><br>
                            <input type="file" name="image" id="image"><br>                            

                            <button>Cadastrar</button>
                        </form>                       
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">   
                <div class="col">
                    <h3 class="title text-center">Lista de vendas</h3>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th class="text-align-center">Modelo</th>
                            <th>Valor</th>
                            <th>Ano Fab</th>
                            <th>Ano Modelo</th>
                            <th>Quilometragem</th>
                            <th>Cor</th>
                            <th>Placa Final</th>
                            <th>Câmbio</th>
                        </tr>                        
                        <?php foreach($carros as $carro):?>
                            <tr>
                                <td><?php echo $carro['id'] ;?></td>
                                <td><?php echo $carro['modelo'] ;?></td>
                                <td><?php echo $carro['valor'] ;?></td>
                                <td><?php echo $carro['ano_fabricacao'] ;?></td>
                                <td><?php echo $carro['ano_modelo'] ;?></td>
                                <td><?php echo $carro['quilometragem'] ;?></td>
                                <td><?php echo $carro['cor'] ;?></td>
                                <td><?php echo $carro['placa_final'] ;?></td>
                                <td><?php echo $carro['cambio'] ;?></td>
                                <td>
                                    <a href="editar-carro.php?id=<?php echo $carro['id']; ?>">Editar</a>
                                    <a href="?excluir=<?php echo $carro['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir?');">Excluir</a>
                                </td>
                            </tr>                        
                        <?php endforeach; ?>
                    </table>
                </div>                  
            </div>
        </div>
    </section>

<?php require('footer.php') ;?>