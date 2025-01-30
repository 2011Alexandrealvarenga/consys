<?php 
include('header.php');

$conexao = conectarBanco();
$sql = "SELECT 
fp.id, 
fp.Nome_completo,
fp.cpf,
fp.endereço,
fp.numero,
fp.complemento,
fp.bairro,
fp.cidade,
fp.vl_entrada,
fp.juros,
fp.qtd_parcelas,
fp.valor_cada_parcela,
fp.valor_t_parcela,
fp.vl_total_ent_mais_parc,
c.valor, 
c.modelo 
FROM forma_pagamento fp
JOIN carro c ON fp.fk_id_carro = c.id";

$result = $conexao->query($sql);
$conexao->close();
;?>
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
    <section class="lista-carro">
        <div class="container">
            <div class="row">   
                <div class="col">
                    <h3 class="title text-center">Lista de vendas</h3>
                    <table>
                        <tr>
                            <th>id Carro</th>
                            <th class="text-align-center">Modelo</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Endereço</th>
                            <th>Valor</th>
                            <th>Valor Entrada</th>
                            <th>Juros</th>
                            <th>Qtd Parcelas</th>
                            <th>VL Cada Parcelas</th>
                            <th>VL Total Parcelas</th>
                            <th>VL Total Ent Mais Parc</th>
                        </tr>
                        
                        <?php 
                       if ($result->num_rows > 0) {
                           while($row = $result->fetch_assoc()) {?>
                            <tr>
                            <td><?php echo $row["id"];?></td>
                            <td><?php echo $row["modelo"];?></td>
                            <td><?php echo $row["Nome_completo"];?></td>
                            <td><?php echo $row["cpf"];?></td>
                            <td><?php echo $row["endereço"] .' - nº'. $row["numero"] .' - '.$row["complemento"].' - '.$row["bairro"].' - '.$row["cidade"]; ?></td>
                            <td>R$ <?php echo $row["valor"];?></td>
                            <td>R$ <?php echo $row["vl_entrada"];?></td>
                            <td><?php echo $row["juros"];?>%</td>
                            <td>R$ <?php echo $row["qtd_parcelas"];?></td>
                            <td>R$ <?php echo $row["valor_cada_parcela"];?></td>
                            <td>R$ <?php echo $row["valor_t_parcela"];?></td>
                            <td>R$ <?php echo $row["vl_total_ent_mais_parc"];?></td>
                            </tr>
                            <?php }
                        } else {
                            echo "Nenhum resultado encontrado";
                        }
                    ;?>
                    
                    </table>
                </div>                  
            </div>
        </div>
    </section>
<?php require('footer.php') ;?>