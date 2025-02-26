<?php 
include('header.php');

$conexao = conectarBanco();

$anos = ['2001','2002','2003','2004','2005','2006','2007','2008','2009','2010','2011','2012','2013','2014','2015','2016','2017','2018','2019','2020','2021','2022','2023','2024'];
$placas = ['0','1','2','3','4','5','6','7','8','9'];
$cambios = ['Automático','Manual'];

// Verificar se o ID do carro foi passado na URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    
    // Buscar os dados do carro
    $sql = "SELECT * FROM carro WHERE id = $id";
    $result = $conexao->query($sql);
    
    // Verificar se o carro existe
    if ($result->num_rows > 0) {
        $carro = $result->fetch_assoc();
    } else {
        die("Carro não encontrado.");
    }
} else {
    die("ID do carro não especificado.");
}

// Atualizar os dados do carro
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $modelo = $_POST['modelo'];
    $valor = $_POST['valor'];
    $ano_fabricacao = $_POST['ano_fabricacao'];
    $ano_modelo = $_POST['ano_modelo'];
    $quilometragem = $_POST['quilometragem'];
    $cor = $_POST['cor'];
    $placa_final = $_POST['placa_final'];
    $imagem = $_POST['imagem'];
    $cambio = $_POST['cambio'];
    
    // Query para atualizar o modelo do carro
    $sqlUpdate = "UPDATE carro SET 
    modelo = '$modelo', 
    valor = '$valor',
    ano_fabricacao = '$ano_fabricacao',
    ano_modelo = '$ano_modelo',
    quilometragem = '$quilometragem',
    cor = '$cor',
    placa_final = '$placa_final',
    imagem = '$imagem',
    cambio = '$cambio',
    modelo = '$modelo' WHERE id = $id";
    
    if ($conexao->query($sqlUpdate) === TRUE) {
        // Redirecionar para a página principal após a atualização
        header('Location: carro-cadastro.php');
        exit;
    } else {
        echo "Erro ao atualizar o carro: " . $conexao->error;
    }
}

$conexao->close();
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
    <section class="lista-carro">
        <div class="container">
            <div class="row">   
                <div class="col">
                    <h1>Editar Carro</h1>

                    <form action="editar-carro.php?id=<?php echo $carro['id']; ?>" method="POST">
                        <label for="modelo">Modelo</label>
                        <input type="text" name="modelo" id="modelo" value="<?php echo $carro['modelo']; ?>"><br>

                        <label for="valor">Valor</label>
                        <input type="text" name="valor" id="valor" value="<?php echo $carro['valor']; ?>"><br>

                        <!-- <input type="text" name="ano_fabricacao" id="ano_fabricacao" value="<?php echo $carro['ano_fabricacao']; ?>"><br> -->
                        
                        <label for="ano_fabricacao">Ano de Fabricacao</label><br>
                        <select name="ano_fabricacao" id="ano_fabricacao">
                            <?php foreach ( $anos as $ano ) {?>
                            <option value="<?php echo $ano ;?>"><?php echo $ano ;?></option>                                 
                            <?php };?>
                        </select><br><br>

                        <label for="ano_modelo">Ano de Fabricacao</label><br>
                        <select name="ano_modelo" id="ano_modelo">
                            <?php foreach ( $anos as $ano ) {?>
                            <option value="<?php echo $ano ;?>"><?php echo $ano ;?></option>                                 
                            <?php };?>
                        </select><br><br>


                        <label for="quilometragem">Quilometragem:</label>
                        <input type="text" name="quilometragem" id="quilometragem" value="<?php echo $carro['quilometragem']; ?>"><br>

                        <label for="cor">Cor:</label>
                        <input type="text" name="cor" id="cor" value="<?php echo $carro['cor']; ?>"><br>

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

                        <label for="imagem">Imagem</label><br>
                        <input type="file" name="imagem" id="imagem"><br>  <br>

                        <button type="submit">Atualizar</button>
                    </form>

                    <br>
                    <a href="index.php">Voltar para a lista de carros</a>
                </div>                  
            </div>
        </div>
    </section>
<?php require('footer.php') ;?>