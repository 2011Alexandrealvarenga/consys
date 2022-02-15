<?php require 'header.php'; 
$lista = [];
$sql =$pdo->query("SELECT * FROM usuario");

if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            
            <h1>Adicionar usuario</h1>
            <table border="1" width="100%">

                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>EMAIL</th>
                    <th>LOGIN</th>
                </tr>
                <?php foreach($lista as $usuario): ?>
                    <tr>                
                        <td><?php echo $usuario['id']; ?> </td>
                        <td><?php echo $usuario['nome']; ?></td>
                        <td><?php echo $usuario['email']; ?></td>
                        <td> <?php echo $usuario['login']; ?> </td>
                        <td>
                            <a href="editar_usuario.php?id=<?php echo $usuario['id'];?>">[Editar]</a>
                            <a href="excluir_usuario.php?id=<?php echo $usuario['id']; ?>">[Excluir]</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>