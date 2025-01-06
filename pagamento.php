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
    <link rel="stylesheet" href="assets/css/pagamento.css">
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
    <section class="pagamento">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="subtitle">Forma de pagamento</h2>
          </div>
          <hr class="line">
          <div class="col-12">
            <h3 class="subtitle2">Dados do Carro</h3>
            <div class="content-carro">
              <div class="item-carro">
                <span class="carac">Modelo</span>
                <span class="carac-item">Fit</span>
              </div>
              <div class="item-carro">
                <span class="carac">valor</span>
                <!-- <span class="carac-item" id='valor-carro'>R$ 30.000,00</span> -->
                <!-- <input type="text" id="valor-carro"  value="30"> -->
                <span id="valor-carro">1000</span>
              </div>
            </div>
          </div>
          <hr class="line">
          <div class="col-6">
            <div class="content-esquerdo">
              <div class="item">
                <span class="carac-item">Valor de entrada</span><br>
                <input type="text" class="input-valor" id='valor-entrada'>
                <!-- <input type="text" class="input-valor" id='valor-entrada' MAXLENGTH="13" onKeydown="FormataMoeda(this,10,event)" onkeypress="return maskKeyPress(event)"> -->
              </div>
              <div class="item">
                <span>juros</span><br>
                <input type="text" id='juros'><br>
                <span class="carac-item">Qtde. de parcelas</span>
                <div class="radiobtn">
                  <span id="vlCarroMenosEntrada"></span>
                  <br>
                  <div class="btn-verificar" onclick="somarValoresV2()">Calcular</div>
                  <div class="">
                    <input type="radio" id="10" name="multiplicador" value="10">
                    <label for="10">10x</label><br>
                    <input type="radio" id="16" name="multiplicador" value="16">
                    <label for="16">16x</label><br>
                    <input type="radio" id="32" name="multiplicador" value="32">
                    <label for="32">32x</label><br>
                    <input type="radio" id="48" name="multiplicador" value="48">
                    <label for="48">48x</label><br>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="content-direito">
              direito
            </div>
          </div>
          <hr class="line">
          <div class="col-12">
            <div class="vl-total-financiado">
              <div class="item-carro">
                <span class="carac">Valor de cada parcela</span>
                <span class="carac-item" id='vlCadaParcela'></span>
              </div>
              <div class="item-carro">
                <span class="carac">Valor total parcelado</span>
                <span class="carac-item" id='vlTotalFinanciado'></span>
              </div>
              <div class="item-carro">
                <span class="carac">Valor de entrada mais parcelado</span>
                <span class="carac-item" id='vlTotalEntMaisParc'></span>
              </div>
              <div class="btn-verificar">
                <a href="pagamento.php">Comprar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <script src="assets/js/pagamento.js"></script>
    </footer>
  </body>
</html>