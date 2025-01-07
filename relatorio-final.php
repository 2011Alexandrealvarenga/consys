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
    <link rel="stylesheet" href="assets/css/relatorio-final.css">
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
    <section class="relatorio-final">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="subtitle">Relatório Final</h2>
          </div>
          <hr class="line">
          <div class="col-12">
            <h3 class="subtitle">Dados Pessoais</h2>
          </div>
          <div class="col-6">
            <div class="content">
              <div class="item">
                <span class="bold">Nome completo</span><br>
                <span class="desc">Alexandre B f de alvarenga</span>
              </div>
              <div class="item">
                <span class="bold">CPF</span><br>
                <span class="desc">123.123.123-00</span>
              </div>
              <div class="item">
                <span class="bold">Endereço</span><br>
                <span class="desc">Rua Xpto, 123 - centro - São Paulo - SP </span>
              </div>
              
            </div>
          </div>
          
          <hr class="line">
          <div class="col-12">
            <h3 class="subtitle">Dados do veiculo</h2>
          </div>
          <div class="col-6">
            <div class="content">
              <div class="item">
                <span class="bold">Modelo/Marca</span><br>
                <span class="desc">Fit/Honda</span>
              </div>
              <div class="item">
                <span class="bold">VAlor a vista</span><br>
                <span class="desc">R$ 30.000,00</span>
              </div>
              <div class="item">
                <span class="bold">Valor da Parcela</span><br>
                <span class="desc">36 x R$ 33.000,00</span>
              </div>
              <div class="item">
                <span class="bold">Total a prazo</span><br>
                <span class="desc">R$ 36.000,00</span>
              </div>
              <div class="item">
                <span class="bold">Valor de entrada</span><br>
                <span class="desc">R$ 800,00</span>
              </div>
              <div class="item">
                <span class="bold">Valor de entrada mais parcelamento</span><br>
                <span class="desc">R$ 39.000,00</span>
              </div>
            </div>
          </div>    
          <div class="col-12">
            <div class="btn-verificar">
              <a href=""  onclick="imprimirPagina()">Imprimir</a>
            </div>      
          </div>
        </div>
      </div>
    </section>
    <footer>
      <script src="assets/js/relatorio-final.js"></script>
    </footer>
  </body>
</html>