<?php 
require 'header.php';
$info = [];
$id = filter_input(INPUT_GET,'id');

if($id){
    $sql = $pdo->prepare('SELECT * FROM carro WHERE id = :id');
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0){
        $info = $sql->fetch(PDO::FETCH_ASSOC);
    }else{

    }
}else{
    header('location: index.php');
    exit;
}
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method='POST' action="carro_editar_action.php">
                    <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
                    <h1>CARRO</h1>
                    <br>
                    Modelo <br>
                    <input type="text" value="<?php echo $info['modelo']; ?>" name="modelo"><br>
                    Marca <br>
                    <input type="text" value="<?php echo $info['marca']; ?>" name="marca"><br>
                    ano <br>
                    <input type="text" value="<?php echo $info['ano']; ?>" name="ano"><br>
                    Quilometragem <br>
                    <input type="text" value="<?php echo $info['km']; ?>" name="km"><br>
                    cambio <br>
                    <input type="text" value="<?php echo $info['cambio']; ?>" name="cambio"><br>
                    combustivel <br>
                    <input type="text" value="<?php echo $info['combustivel']; ?>" name="combustivel"><br>
                    cor <br>
                    <input type="text" value="<?php echo $info['cor']; ?>" name="cor"><br>
                    valor <br>
                    <input type="number" value="<?php echo $info['valor']; ?>" name="valor"><br>

                    quantidade <br>
                    <input type="number" value="<?php echo $info['quantidade']; ?>" name="quantidade"><br>

                <br><br>
                <input type="submit" value="Cadastrar">

                </form>
            </div>
        </div>
    </div>
</section>
<?php require 'footer.php'; ?>