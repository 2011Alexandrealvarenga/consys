<?php require 'header.php'; 

$info = [];
$id =filter_input(INPUT_GET, 'id');
if($id){
    $sql = $pdo->prepare('SELECT * FROM fornecedor WHERE id=:id');
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0){
        $info = $sql->fetch(PDO::FETCH_ASSOC);
    }else{

    }

}else{
    header('location: consulta_fornecedor.php');
}
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Adicionar Fornecedor</h1>
            <form method="POST" action="editar_fornecedor_action.php">
                <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
                Razao social: <br>
                <input type="text" value="<?php echo $info['razao_social'];?>" name="razao_social"><br>
                CNPJ: <br>
                <input type="number" value="<?php echo $info['cnpj'];?>" name='cnpj'><br><br>
                Enredeço: <br><br>
                rua: <br>
                <input type="text" value="<?php echo $info['rua'];?>" name="rua"><br>
                bairro: <br>
                <input type="text" value="<?php echo $info['bairro'];?>" name='bairro'><br>

                cidade: <br>
                <input type="text" value="<?php echo $info['cidade'];?>" name='cidade'><br>
                estado: <br>
                <input type="text" value="<?php echo $info['estado'];?>" name='estado'><br>

                <br>
                <input type="submit" value="Cadastrar Fornecedor">
            </form>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>