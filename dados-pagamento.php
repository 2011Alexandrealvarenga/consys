<?php 

if(isset($_POST['id'])){
  $id = $_POST['id'];
  // echo '<br>'.'id: '.$modelo = $_POST['modelo'];
  // echo '<br>'.'valor: '.$valor = $_POST['valor'];
  // echo '<br>'.'vlEntrada: '.$vlEntrada = $_POST['vlEntrada'];
  // echo '<br>'.'vlCadaParcela: '.$vlCadaParcela = $_POST['vlCadaParcela'];
  // echo '<br>'.'vlTotalFinanciado: '.$vlTotalFinanciado = $_POST['vlTotalFinanciado'];
  // echo '<br>'.'vlTotalEntMaisParc: '.$vlTotalEntMaisParc = $_POST['vlTotalEntMaisParc'];
  // echo '<br>'.'avista: '.$avista = $_POST['avista'];

}else{
  echo 'nao foi passado id';
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Verifica se o campo 'opcao' foi preenchido
  if (isset($_POST['valoraVista'])) {
      $valoraVista = $_POST['valoraVista'];
  } else {
      echo "Nenhuma opção foi selecionada.";
  }
}

echo '<br>id:'.$id;
echo '<br>Valor a vista R$: '.$valoraVista;

;?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConSys - Concessionária</title>
    <!-- <link href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dados-pagamento.css">
  </head>
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
    <section class="dados-pessoais">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="subtitle">Dados para pagamento</h2>
          </div>
          <hr class="line">
          <div class="col-12">
            <h3 class="subtitle">Dados Pessoais</h2>
          </div>
          <div class="col-6">
            <div class="content">
              <div class="item">
                <span class="bold">Nome completo</span><br>
                <input type="text" name='nome'>
              </div>
              <div class="item">
                <span class="bold">Endereço</span><br>
                <input type="text" name='endereco'>
              </div>
              <div class="item">
                <span class="bold">Número</span><br>
                <input type="text" name='numero'>
              </div>
              <div class="item">
                <span class="bold">Complemento</span><br>
                <input type="text" name='complemento'>
              </div>
              <div class="item">
                <span class="bold">Bairro</span><br>
                <input type="text" name='bairro'>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="content">
              <div class="item">
                <span class="bold">CPF</span><br>
                <input type="text" name='cpf'>
              </div>
              <div class="item">
                <span class="bold">Cidade</span><br>
                <input type="text" name='cidade'>
              </div>
              <div class="item">
                <span class="bold">Bairro</span><br>
                <input type="text" name='bairro'>
              </div>
            </div>
          </div>
          <hr class="line">
          <div class="col-12">
            <h3 class="subtitle">Dados pagamento</h2>
          </div>
          <div class="col-6">
            <div class="content">
              <div class="item">
                <span class="bold">Nome completo impresso no cartão</span><br>
                <input type="text" name='nomeImpressoCartao'>
              </div>
              <div class="item">
                <span class="bold">Número do cartão</span><br>
                <input type="text" name='numeroCartao'>
              </div>
              <div class="item">
                <span class="bold">Validade</span><br>
                <input type="text" name='validade'>
              </div>
              <div class="item">
                <span class="bold">Código verificador</span><br>
                <input type="text" name='codigoVerificador'>
              </div>
            </div>
          </div>    
          <div class="col-12">
            <div class="btn-verificar">
              <a href="relatorio-final.php">Comprar</a>
            </div>      
          </div>
        </div>
      </div>
    </section>
    <footer>
    </footer>
  </body>
</html>