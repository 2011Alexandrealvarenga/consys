<?php 
include('header.php');

$conexao = conectarBanco();

$dados_carro = consultarCarros($conexao);

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
                <?php foreach($dados_carro as $car) {;?>
                    <div class="col-4 my-4">
                        <div class="content-item-carro">
                            <div class="item">
                                <img src="assets/img/<?php echo $car['imagem'] ;?>" class="img-carro">
                                <div class="lista">
                                    <p><b>id:</b> <?php echo $car['id'] ;?></p>
                                    <p><b>Marca:</b> <?php echo $car['marca'] ;?></p>
                                    <p><b>Modelo:</b> <?php echo $car['modelo'] ;?></p>
                                    <p><b>Ano fabricação:</b> <?php echo $car['ano_fabricacao'] ;?></p>
                                    <p><b>Ano Modelo:</b> <?php echo $car['ano_modelo'] ;?></p>
                                    <p><b>Quilometragem:</b> Km:<?php echo $car['quilometragem'] ;?></p>
                                    <p><b>Cor:</b> <?php echo $car['cor'] ;?></p>
                                    <p><b>Placa Final:</b> <?php echo $car['placa_final'] ;?></p>
                                    <p><b>Câmbio:</b> <?php echo $car['cambio'] ;?></p>
                                    <p><b>R$ <?php echo $car['valor'] ;?></b></p>
                                </div>
                                <div class="btn-verificar">
                                    <a href="carro.php?id=<?php echo $car['id'] ;?>">Verificar</a>
                                </div>
                            </div>
                        </div>
                    </div>                     
                <?php };?>                    
            </div>
        </div>
    </section>
<?php require('footer.php') ;?>