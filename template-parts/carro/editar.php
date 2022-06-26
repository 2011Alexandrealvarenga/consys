<?php require '../../header.php';
$info = [];
$id = filter_input(INPUT_GET, 'id');

if($id){
    $sql = $conexao->prepare("SELECT * FROM carro WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0){
        $info = $sql->fetch(PDO::FETCH_ASSOC);
    }else{
    echo 'else';
    }
}else{
    header("location: index.php");
    exit;
}
?>
<section class="editcar">
    <div class="container">    
        <div class="row">
            <div class="col-12">

                <h1>Editar usuariao</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="POST" action="editar_action.php">
                    <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
                    <label for="">
                        nome: <br>
                        <input type="text" name="marca" value="<?php echo $info['marca']; ?>"><br>        
                    </label>
                    <br>
                    <label for="">
                        email: <br>
                        <input type="text" name="cor" value="<?php echo $info['cor']; ?>"><br>        
                    </label><br>
                    <input type="submit" value="Salvar">
                    
                </form>
            </div>
        </div>
    </div>
</section>