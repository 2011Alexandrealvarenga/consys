<?php require '../header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Adicionar Fornecedor</h1>
            <form method="POST" action="fornecedor_adicionar.php">
                Razao social: <br>
                <input type="text" name="razao_social"><br>
                CNPJ: <br>
                <input type="number" name='cnpj'><br><br>
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
                <input type="submit" value="Cadastrar Fornecedor">
            </form>
        </div>
    </div>
</div>
<?php require '../footer.php'; ?>