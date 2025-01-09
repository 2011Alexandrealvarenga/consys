<!-- pagina2.php -->
<?php
// Verifique se há um ID de produto na URL
if (isset($_GET['id'])) {
    $idCarro = $_GET['id'];
    $marca = $_GET['marca'];
    $modelo = $_GET['modelo'];
    $ano_fabricacao = $_GET['ano_fabricacao'];
    $ano_modelo = $_GET['ano_modelo'];
    $quilometragem = $_GET['quilometragem'];
    $cor = $_GET['cor'];
    $placa_final = $_GET['placa_final'];
    $valor = $_GET['valor'];
    $cambio = $_GET['cambio'];

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConSys - Concessionária</title>
    <!-- <link href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/carro.css">
</head>
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
                <div class="col-12 my-4">
                    pagina carro
                </div> 
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="content-img">
                        <img src="assets/img/fit.jpg" class="destaque" alt="">
                    </div>
                </div>
                <p><?php echo $idProduto;?></p>
                <div class="col-12">
                    <div class="content-desc">
                        <div class="dados">
                            
                            <div class="item-carro">
                                <span class="carac">Marca</span>
                                <span class="carac-item"><?php echo $marca;?></span>
                            </div>
                            <div class="item-carro">
                                <span class="carac">Modelo</span>
                                <span class="carac-item"><?php echo $modelo;?></span>
                            </div>
                            <div class="item-carro">
                                <span class="carac">Ano Fábricação</span>
                                <span class="carac-item"><?php echo $ano_fabricacao;?></span>
                            </div>
                            <div class="item-carro">
                                <span class="carac">Ano Modelo</span>
                                <span class="carac-item"><?php echo $ano_modelo;?></span>
                            </div>
                            <div class="item-carro">
                                <span class="carac">Cor</span>
                                <span class="carac-item"><?php echo $cor;?></span>
                            </div>
                            <div class="item-carro">
                                <span class="carac">Câmbio</span>
                                <span class="carac-item">Automático</span>
                            </div>
                            <div class="item-carro">
                                <span class="carac">Placa final</span>
                                <span class="carac-item">5</span>
                            </div>
                            <div class="item-carro">
                                <span class="carac">Quilometragem</span>
                                <span class="carac-item">125.000</span>
                            </div>
                        </div>
                        <div class="item-valor">
                            <span class="carac">Valor</span><br>
                            <span class="carac-item">R$ 25.000,00</span><br>
                            <div class="btn-verificar">
                                <a href="pagamento.php">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
    </footer>
</body>
</html>