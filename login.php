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
            <div class="row justify-content-center">   
                <div class="col-6 borda">
                  <div class="content">
                    <form action="area-adm" method="POST">
                      <label for="login">Login</label><br>
                      <input type="text" name="login" id="login"><br>

                      <label for="senha">Senha</label><br>
                      <input type="text" name="senha" id="senha"><br><br>
                      <button>Entrar</button>
                    </form>
                  </div>
                </div>                   
            </div>
        </div>
    </section>
<?php require('footer.php') ;?>