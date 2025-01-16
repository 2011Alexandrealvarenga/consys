<?php 
include('header.php');

$conexao = conectarBanco();
$anos = ['2001','2002','2003','2004','2005','2006','2007','2008','2009','2010','2011','2012','2013','2014','2015','2016','2017','2018','2019','2020','2021','2022','2023','2024'];
$placas = ['0','1','2','3','4','5','6','7','8','9'];

$conexao->close();
;?>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Consys</h1>
                </div>
            </div>
        </div>
    </header>
    <section class="carro-cadastro">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <form action="carro-cadastro-envio.php" method="POST">
                            <label for="marca">Marca</label><br>
                            <input type="text" name="marca" id="marca"><br>

                            <label for="modelo">Modelo</label><br>
                            <input type="text" name="modelo" id="modelo"><br>

                            <label for="valor">Valor</label><br>
                            <input type="text" name="valor" id="valor"><br>
                            
                            <label for="ano_fabricacao">Ano de Fabricacao</label><br>
                            <select name="ano_fabricacao" id="ano_fabricacao">
                                <?php foreach ( $anos as $ano ) {?>
                                <option value="<?php echo $ano ;?>"><?php echo $ano ;?></option>                                 
                                <?php };?>
                            </select><br><br>

                            <label for="ano_modelo">Ano de Modelo</label><br>
                            <select name="ano_modelo" id="ano_modelo">
                                <?php foreach ( $anos as $ano ) {?>
                                <option value="<?php echo $ano ;?>"><?php echo $ano ;?></option>                                 
                                <?php };?>
                            </select><br><br>

                            <label for="quilometragem">Quilometragem</label><br>
                            <input type="text" name="quilometragem" id="quilometragem"><br>

                            <label for="cor">Cor</label><br>
                            <input type="text" name="cor" id="cor"><br>

                            <label for="placa_final">Placa Final</label><br>
                            <input type="text" name="placa_final" id="placa_final"><br>

                            <label for="ano_modelo">Ano de Modelo</label><br>
                            <select name="ano_modelo" id="ano_modelo">
                                <?php foreach ( $placas as $placa ) {?>
                                <option value="<?php echo $placa ;?>"><?php echo $placa ;?></option>                                 
                                <?php };?>
                            </select><br><br>

                            <label for="cambio">Câmbio</label><br>
                            <input type="text" name="cambio" id="cambio"><br>
                            
                            <label for="imagem">Imagem</label><br>
                            <input type="text" name="imagem" id="imagem"><br>

                            

                            <button>Cadastrar</button>
                        </form>                       
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require('footer.php') ;?>