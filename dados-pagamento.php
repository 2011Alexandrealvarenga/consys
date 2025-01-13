<?php 

if(isset($_POST['id'])){
  $id = $_POST['id'];
}else{
  echo 'id nao enviado';
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(isset($_POST['resvlCadaParcela']) ? $resvlCadaParcela = $_POST['resvlCadaParcela'] : "valor nao enviado Valor Cada Parcela" );
  if(isset($_POST['resvlTotalFinanciado']) ? $resvlTotalFinanciado = $_POST['resvlTotalFinanciado'] : "valor nao enviado Valor Cada Parcela" );
  if(isset($_POST['resvlTotalEntMaisParc']) ? $resvlTotalEntMaisParc = $_POST['resvlTotalEntMaisParc'] : "valor nao enviado Valor Cada Parcela" );
  if(isset($_POST['resmultiplicador']) ? $resmultiplicador = $_POST['resmultiplicador'] : "qtd parcelas" );
} else {
  echo "<p>Nenhum dado recebido.</p>";
}

echo 'id: '.$id;
echo '<br>valor cada parcela: '.$resvlCadaParcela;
echo '<br>valor total financiado: '.$resvlTotalFinanciado;
echo '<br>valor total total ent mais parc: '.$resvlTotalEntMaisParc;
echo '<br>qtd parcelas: '.$resmultiplicador;
// echo '<br>Valor a vista R$: '.$valoraVista;

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
          <div class="col-12">
              <form action="relatorio-final.php" method="post">  
                <input type="hidden" name="id" value="<?php echo $id;?>">    
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
                  </div>
             
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
                  <hr class="line">
                  <h3 class="subtitle">Dados pagamento</h2>
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
                  <div class="btn-verificar">
                    <button type="submit">Comprar</button>
                  </div>     
                  <input type="hidden" name="resvlCadaParcela" value='<?php echo $resvlCadaParcela;?>'>
                  <input type="hidden" name="resvlTotalFinanciado" value='<?php echo $resvlTotalFinanciado;?>'>
                  <input type="hidden" name="resvlTotalEntMaisParc" value='<?php echo $resvlTotalEntMaisParc;?>'>
                  <input type="hidden" name="resmultiplicador" value='<?php echo $resmultiplicador;?>'>                  
              </form>
            </div>
          </div>            
        </div>
      </div>
    </section>
    <footer>
    </footer>
  </body>
</html>