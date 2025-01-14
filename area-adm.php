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
    <section class="login">
        <div class="container">
            <div class="row">   
                <div class="col-12">
                  <div class="content">
                   area adm
                  </div>
                </div>                   
            </div>
        </div>
    </section>
<?php require('footer.php') ;?>