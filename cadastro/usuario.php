<?php require 'header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Adicionar usuario</h1>
            <form method="POST" action="usuario_adicionar.php">
                nome: <br>
                <input type="text" name="nome"><br>
                email: <br>
                <input type="email" name='email'><br>
                usuario: <br>
                <input type="text" name="login"><br>
                senha: <br>
                <input type="password" name='senha'><br>
                <br>
                <input type="submit" value="Cadastrar Usuarios">
            </form>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>