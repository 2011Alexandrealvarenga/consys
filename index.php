<?php 
$pdo = new PDO('mysql:dbname=consys_db;host=localhost','root','');

$sql = $pdo->query('SELECT * FROM carro');

echo 'total: '.$sql->rowCount();

$dados = $sql->fetchALL(PDO::FETCH_ASSOC);


echo '<pre>';
print_r($dados);
;?>
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
    <link rel="stylesheet" href="assets/css/home.css">
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
    <section class="lista-carro">
        <div class="container">
            <div class="row">   
                <?php foreach($dados as $car) {
                    ?>
                    <div class="col-4 my-4">
                        <div class="content-item-carro">
                            <div class="item">
                                <img src="assets/img/<?php echo $car['imagem'] ;?>" class="img-carro">
                                <ul>
                                    <li><b>id:</b> <?php echo $car['id'] ;?></li>
                                    <li><b>Marca:</b> <?php echo $car['marca'] ;?></li>
                                    <li><b>Modelo:</b> <?php echo $car['modelo'] ;?></li>
                                    <li><b>Ano fabricação:</b> <?php echo $car['ano_fabricacao'] ;?></li>
                                    <li><b>Ano Modelo:</b> <?php echo $car['ano_modelo'] ;?></li>
                                    <li><b>Quilometragem:</b> Km:<?php echo $car['quilometragem'] ;?></li>
                                    <li><b>Cor:</b> <?php echo $car['cor'] ;?></li>
                                    <li><b>Placa Final:</b> <?php echo $car['placa_final'] ;?></li>
                                    <li><b>R$ <?php echo $car['valor'] ;?></b></li>
                                </ul>
                                <div class="btn-verificar">
                                    <a href="carro.php">Verificar</a>
                                </div>
                            </div>
                        </div>
                    </div>                     
                <?php };?>             
            </div>
        </div>
    </section>
    <footer>
    </footer>
</body>
</html>