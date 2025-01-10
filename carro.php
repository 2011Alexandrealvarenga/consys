<!-- pagina2.php -->
<?php
include('inc/classes/config.php');
$conexao = conectarBanco();

// $info = [];
// $id = isset($_GET['id']);
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


// Verifique se há um ID de produto na URL
// if (isset($_GET['id'])) {
//     $idCarro = $_GET['id'];
//     $marca = $_GET['marca'];
//     $modelo = $_GET['modelo'];
//     $ano_fabricacao = $_GET['ano_fabricacao'];
//     $ano_modelo = $_GET['ano_modelo'];
//     $quilometragem = $_GET['quilometragem'];
//     $cor = $_GET['cor'];
//     $placa_final = $_GET['placa_final'];
//     $valor = $_GET['valor'];
//     $cambio = $_GET['cambio'];

// }
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
                <div class="col-12">
                    <div class="content-img">
                        <img src="assets/img/<?php echo $carro['imagem'];?>" class="destaque" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="content-desc">
                        <div class="dados">
                            
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