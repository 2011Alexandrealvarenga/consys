<?php require '../header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Adicionar cliente</h1>
            <form method="POST" action="cliente_adicionar.php">
                Nome: <br>
                <input type="text" name="nome"><br>
                Data de nascimento: <br>
                <input type="number" name='data_nascimento'><br>
                CPF: <br>
                <input type="number" name='cpf'><br>
                RG: <br>
                <input type="number" name='rg'><br>
                telefone: <br>
                <input type="text" name='telefone'><br>
                email: <br>
                <input type="text" name='email'><br>
                <br>
                Enredeço: <br><br>
                rua: <br>
                <input type="text" name="rua"><br>
                bairro: <br>
                <input type="text" name='bairro'><br>

                cidade: <br>
                <input type="text" name='cidade'><br>
                estado: <br>
                <input type="text" name='estado'><br>

                <br>
                <input type="submit" value="Cadastrar cliente">
            </form>
        </div>
    </div>
</div>
<?php require '../footer.php'; ?>