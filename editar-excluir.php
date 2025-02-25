<?php 
include('header.php');

$conexao = conectarBanco();

if(isset($_GET['excluir'])){
    $id = $_GET['excluir'];
    $sql = 'DELETE FROM carro WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}

$sql = "SELECT * FROM carro";
$stmt = $pdo->query($sql);
$carros = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
                            <th></th>
    
                        </tr>
                        
                        <?php 
                            foreach($carros as $carro):?>
?>
                            <tr>
                                <td><?php echo $carro['id'] ;?></td>
                                <td><?php echo $carro['modelo'] ;?></td>
                                <td>
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