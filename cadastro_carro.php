<?php require 'header.php'; ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method='POST' action="carro_cadastrar.php">
                    <h1>CARRO</h1>
                    <br>
                    Modelo <br>
                    <input type="text" name="modelo"><br>
                    Marca <br>
                    <input type="text" name="marca"><br>
                    ano <br>
                    <input type="text" name="ano"><br>
                    Quilometragem <br>
                    <input type="text" name="km"><br>
                    cambio <br>
                    <input type="text" name="cambio"><br>
                    combustivel <br>
                    <input type="text" name="combustivel"><br>
                    cor <br>
                    <input type="text" name="cor"><br>
                    valor <br>
                    <input type="number" name="valor"><br>

                    quantidade <br>
                    <input type="number" name="quantidade"><br>

                <br><br>
                <input type="submit" value="Cadastrar">

                </form>
            </div>
        </div>
    </div>
</section>
<?php require 'footer.php'; ?>