<?php require 'header.php'?>
<section class="addcarro">
    <div class="container">
        <div class="row">
            <div class="col-12">
                Adicionar Carro
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="adicionar_carro_action.php" method="post"><br>
                    <label for="">
                        Marca: <br>
                        <input type="text" name="marca"><br>
                    </label><br>
                    <label for="">
                        cor: <br>
                        <input type="text" name="cor"><br>
                    </label><br>
                    <input type="submit" value="Adicionar Carro">
                </form>
            </div>
        </div>
    </div>
</section>
<?php require 'footer.php'?>