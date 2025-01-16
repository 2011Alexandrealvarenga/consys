<?php 
include('header.php');

$conexao = conectarBanco();


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
    <section class="lista-carro">
        <div class="container">
            <div class="row">   
                <div class="col">
                    lista de itens
                </div>                  
            </div>
        </div>
    </section>
<?php require('footer.php') ;?>