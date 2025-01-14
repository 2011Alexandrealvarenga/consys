<?php
require('header.php');

$conexao = conectarBanco();

if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM carro WHERE id = $id";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        // Exibe os detalhes do item
        $carro = $result->fetch_assoc();
        
    } else {
        echo "Item não encontrado.";
    }
}else{
    echo 'não foi passado id';
}
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
    <section class="pagamento">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="subtitle">Forma de pagamento</h2>
          </div>
        <form action="dados-pagamento.php" method="post">
          <hr class="line">
          <div class="col-12">
            <h3 class="subtitle2">Dados do Carro</h3>
            <input type="hidden" name="id" value="<?php echo $carro['id']  ;?>">
          
            <div class="content-carro">
              <div class="item-carro">
                <span class="carac">Modelo</span>
                <span class="carac-item" ><?php echo $carro['modelo'] ;?></span>
              </div>
              <div class="item-carro">
                <span class="carac">valor</span>
                <div class="d-flex carac-item">
                  <span>R$ </span><span id="valor-carro"><?php echo $carro['valor'] ;?></span>
                </div>
              </div>
            </div>
          </div>
          <hr class="line">
          <div class="col-6">
            <div class="content-esquerdo">
              <div class="item">
                <span class="carac-item">Valor de entrada</span><br>
                <input type="text" class="input-valor" id='valor-entrada' name="vlEntrada" value="100">
              </div>
              <div class="item">
                <span>juros</span><br>
                <input type="text" id='juros' name='juros' value="10"><br>
                <span class="carac-item">Qtde. de parcelas</span>
                <div class="radiobtn">                  
                  <div class="">
                    <input type="radio" id="10" name="multiplicador" checked value="10">
                    <label for="10">10x</label><br>
                    <input type="radio" id="16" name="multiplicador" value="16">
                    <label for="16">16x</label><br>
                    <input type="radio" id="32" name="multiplicador" value="32">
                    <label for="32">32x</label><br>
                    <input type="radio" id="48" name="multiplicador" value="48">
                    <label for="48">48x</label><br>
                  </div>
                  <input type="hidden" name="resmultiplicador" id="resmultiplicador">
                </div>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="content-direito">
              <div class="item">
                <span class="carac-item">Valor a vista</span><br>
                <input type="radio" id="avista" name="valoraVista" value='<?php echo $carro['valor'] ;?>'>
                <label for="avista" class="carac-item" name='avista'>R$ <?php echo $carro['valor'] ;?></label><br>
              </div>
            </div>
          </div>
          <hr class="line">
          <div class="col-12">
            <div class="vl-total-financiado">
              <div class="item-carro">
                <span class="carac">Valor de cada parcela</span>
                <span class="carac-item" id='vlCadaParcela' name='vlCadaParcela'></span>
                <input type="hidden" name="resvlCadaParcela" id="resvlCadaParcela">
              </div>
              <div class="item-carro">
                <span class="carac">Valor total parcelado</span>
                <span class="carac-item" id='vlTotalFinanciado' name='vlTotalFinanciado'></span>
                <input type="hidden" name="resvlTotalFinanciado" id="resvlTotalFinanciado">
              </div>
              <div class="item-carro">
                <span class="carac">Valor de entrada mais parcelado</span>
                <span class="carac-item" id='vlTotalEntMaisParc' name='vlTotalEntMaisParc'></span>
                <input type="hidden" name="resvlTotalEntMaisParc" id="resvlTotalEntMaisParc">
              </div>
              <div class="btn-verificar float-left color-white"  onclick="somarValoresV2()">Calcular</div>
              <div class="btn-verificar">
                <button type="submit">Comprar</button>
              </div>
            </div>
          </div>
        </form>
        </div>
      </div>
    </section>
<?php require('footer.php') ;?>