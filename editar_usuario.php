<?php require 
'header.php'; 

$info = [];
$id = filter_input(INPUT_GET, 'id');
if($id){
    $sql = $pdo->prepare("SELECT * FROM usuario WHERE id =:id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0){
        $info = $sql->fetch(PDO::FETCH_ASSOC);
    }else{

    }
}else{
    header('location: index.php');
}

?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Adicionar usuario</h1>
            <form method="POST" action="editar_usuario_action.php">
                <input type="hidden" name="id" value="<?php echo $info['id'];?>">
                nome: <br>
                <input type="text" value="<?php echo $info['nome']; ?>" name="nome"><br>
                email: <br>
                <input type="email" value="<?php echo $info['email']; ?>" name='email'><br>
                usuario: <br>
                <input type="text" value="<?php echo $info['login']; ?>" name="login"><br>
                senha: <br>
                <input type="password" value="<?php echo $info['senha']; ?>" name='senha'><br>
                <br>
                <input type="submit" value="Cadastrar Usuarios">
            </form>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>