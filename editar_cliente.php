<?php require 'header.php'; 
$info = [];
$id = filter_input(INPUT_GET, 'id');

if($id){

    $sql = $pdo->prepare('SELECT * FROM cliente WHERE id=:id');
    $sql->bindValue(':id', $id);
    $sql->execute();
    
    if($sql->rowCount() > 0){
       $info = $sql->fetch(PDO::FETCH_ASSOC);
    }else{

    }
}else{
    header('location: consulta_cliente.php');
}
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Adicionar cliente</h1>
            <form method="POST" action="editar_cliente_action.php">
                <input type="hidden" name="id" value="<?php echo $info['id'];?>">
                Nome: <br>
                <input type="text" value="<?php echo $info['nome']; ?>" name="nome"><br>
                Data de nascimento: <br>
                <input type="number" value="<?php echo $info['data_nascimento']; ?>" name='data_nascimento'><br>
                CPF: <br>
                <input type="number" value="<?php echo $info['cpf']; ?>" name='cpf'><br>
                RG: <br>
                <input type="number" value="<?php echo $info['rg']; ?>" name='rg'><br>
                telefone: <br>
                <input type="text" value="<?php echo $info['telefone']; ?>" name='telefone'><br>
                email: <br>
                <input type="text" value="<?php echo $info['email']; ?>" name='email'><br>
                <br>
                Enredeço: <br><br>
                rua: <br>
                <input type="text" value="<?php echo $info['rua']; ?>" name="rua"><br>
                bairro: <br>
                <input type="text" value="<?php echo $info['bairro']; ?>" name='bairro'><br>

                cidade: <br>
                <input type="text" value="<?php echo $info['cidade']; ?>" name='cidade'><br>
                estado: <br>
                <input type="text" value="<?php echo $info['estado']; ?>" name='estado'><br>

                <br>
                <input type="submit" value="Cadastrar cliente">
            </form>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>