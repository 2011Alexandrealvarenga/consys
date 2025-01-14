<?php
require('header.php');
$conexao = conectarBanco();

if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM carro WHERE id = $id";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        // Exibe os detalhes do item
        $carro = $result->fetch_assoc();
        
    } else {
        echo "Item não encontrado.";
    }
}else{
    echo 'não foi passado id';
}
?>
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
    <section class="pagina-carro">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-img">
                        <img src="assets/img/<?php echo $carro['imagem'];?>" class="destaque" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="content-desc">
                        <div class="dados">
                            <div class="hidden d-none"><?php $carro['id'] ;?></div>
                            <div class="item-carro">
                                <span class="carac">Marca</span>
                                <span class="carac-item"><?php echo $carro['marca'];?></span>
                            </div>
                            <div class="item-carro">
                                <span class="carac">Modelo</span>
                                <span class="carac-item"><?php echo $carro['modelo'];?></span>
                            </div>
                            <div class="item-carro">
                                <span class="carac">Ano Fábricação</span>
                                <span class="carac-item"><?php echo $carro['ano_fabricacao'];?></span>
                            </div>
                            <div class="item-carro">
                                <span class="carac">Ano Modelo</span>
                                <span class="carac-item"><?php echo $carro['ano_modelo'];?></span>
                            </div>
                            <div class="item-carro">
                                <span class="carac">Cor</span>
                                <span class="carac-item"><?php echo $carro['cor'];?></span>
                            </div>
                            <div class="item-carro">
                                <span class="carac">Câmbio</span>
                                <span class="carac-item"><?php echo $carro['cambio'];?></span>
                            </div>
                            <div class="item-carro">
                                <span class="carac">Placa final</span>
                                <span class="carac-item"><?php echo $carro['placa_final'];?></span>
                            </div>
                            <div class="item-carro">
                                <span class="carac">Quilometragem</span>
                                <span class="carac-item"><?php echo $carro['quilometragem'];?></span>
                            </div>
                        </div>
                        <div class="item-valor">
                            <span class="carac">Valor</span><br>
                            <span class="carac-item">R$</span><span class="carac-item"><?php echo $carro['valor'];?></span><br>
                            <div class="btn-verificar">
                                <a href="pagamento.php?id=<?php echo $carro['id'] ;?>">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php require('footer.php') ;?>