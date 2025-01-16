<?php 
include('header.php');
session_start();
$conexao = conectarBanco();

if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}

if (isset($_POST['login']) && isset($_POST['senha'])) {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

   $result = login($login, $senha, $conexao);

    if ($result->num_rows > 0) {
        $result->fetch_assoc();
        header('location: index.php');
    } else {
        echo "Item não encontrado.";
    }
} 
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
                <div class="col-6 ">
                  <div class="content">
                    <form action="" method="POST" class="borda">
                      <h3 class="title">Faça Login</h3>
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